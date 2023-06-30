<?php
	require('db_connection.php');
	$a = intval($_GET['a']);
	$modifier='UPDATE film set moderation_Film= 1 where Id_film= :id';
	$s=array('id'=>$a);
	$req1=$db->prepare($modifier);
	$req1->execute($s);
?>
