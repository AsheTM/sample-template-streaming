<?php
	require('db_connection.php');
	$repons = $db->query('SELECT `Cover_Film`, `Date_Ajout` FROM `film` where moderation_Film=1 ORDER BY `Date_Ajout` DESC');
	$i=0;
	while($donnees = $repons->fetch())
	{
		$i++;
		echo '<img class="img'.$i.'" src="'.$donnees['Cover_Film'].'" alt="" />';
		if($i==3)break;
	}
	$repons->closeCursor(); 
?>
