<?php
	require('db_connection.php');
	$att = intval($_GET['att']);
	$modifier='UPDATE film set moderation_Film= 0 where Id_film= :id';
	$s=array('id'=>$att);
	$req1=$db->prepare($modifier);
	$req1->execute($s);
?>
