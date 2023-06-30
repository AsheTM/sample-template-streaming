<?php
	require('db_connection.php');
	if(!empty($_POST['cmail'] ) and !empty($_POST['cpasword'])){
	$email=$_POST['cmail'];
	$login=$_POST['cpasword'];
	$verif= $db->query('SELECT count(*) FROM user WHERE Email = "'.$email.'" and PasseWord="'.$login.'"');
	$donnees = $verif->fetch();
	if($donnees[0]==1){
		$result= $db->query('SELECT * FROM user WHERE Email = "'.$email.'" and PasseWord="'.$login.'"');
			session_start();
			while($row = $result->fetch()) {
				session_start();
				$_SESSION['id']=$row['id_user'] ;
				$_SESSION['name']=$row['user_name'];
				$_SESSION['type']=$row['Type_User'];	
			}
			header('location:AccD.php');
			$result->closeCursor();
		
	}
	else header('location:AccD.php');
	}
?>