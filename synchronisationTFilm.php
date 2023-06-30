<?php
	require('db_connection.php');
	$repons = $db->query('SELECT `Titre_Film`, `Date_Ajout` FROM `film` WHERE `moderation_Film`=1 ORDER BY `Date_Ajout` DESC');
	$i=0;
	while($donnees = $repons->fetch())
	{
		echo $donnees['Titre_Film'];
		$i++;
		if($i==1)break;
	}
	$repons->closeCursor(); 
?>
