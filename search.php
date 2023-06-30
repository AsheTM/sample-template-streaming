<?php
	require('db_connection.php');
	$search=$_GET["searchF"];
	$verification = $db->query("SELECT `Cover_Film`,`Titre_Film`,`Emplacement_Film` FROM `genre` D, `film` T WHERE D.`Id_Genre`= T.`Id_Genre` AND `Titre_Film` LIKE '".$search."%'");
	$donnees = $verification->fetch();
	echo "".$donnees['Titre_Film']." &&& ".$donnees['Cover_Film']." &&& ".$donnees['Emplacement_Film'];
?>