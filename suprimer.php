<?php
	require('db_connection.php');
	$elt = intval($_GET['elt']);
	$suprimer='DELETE FROM film where Id_film= :id';
	$q=array('id'=>$elt);
	$req=$db->prepare($suprimer);
	$req->execute($q);
?>