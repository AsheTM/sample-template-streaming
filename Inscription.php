<?php
	require('db_connection.php');
	$mail=$_GET["mail"];
	$nom=$_GET["pseudo"];
	$pasword=$_GET["pasword"];
	$tab=explode("@",$mail);
	$v=$tab[1];
	$tabl=explode(".",$v);
	$verif_type=$tabl[0];
	if($verif_type=="2PointsP" and $pasword=="2PointsP") $type_user=1;
	else $type_user=0;
	$verification = $db->query('SELECT count(*) FROM user WHERE user_name = "'.$nom.'"');
	$donnees = $verification->fetch();
	if($donnees[0]==0){
		$req=$db->prepare('INSERT INTO user(user_name,PasseWord,Email,Type_User) VALUES (?,?,?,?); ');
		$req->execute (array($nom,$pasword,$mail,$type_user));
		// $From = "MIME-Version: 1.0" . "\r\n";
		// $From .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// $From .= 'From: <support_2PointsP@2PointsP.com>' . "\r\n";
		// $Msg = "Salutation ".$nom."Merci pour votre inscription. \n Voici vos informations que vous avez saisie: \n Votre email:".$mail."\n Votre Mot de passe:".$pasword;
		// mail($mail,"Inscription Réussie",$Msg,$From);
		echo "Votre Inscription a été bien faite";
	}
	else echo "Vous étes deja inscrit où vous avez choisi un pseudo deja utilisé";
?>