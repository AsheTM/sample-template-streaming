<?php
try{
$db=new PDO('mysql:host=localhost;dbname=streaming','root','');
}catch(PDOException $e){
	die('Erreur:'.$e->getMessage());
}


?>