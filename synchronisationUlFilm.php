<?php
	require('db_connection.php');
	$reponse = $db->query('SELECT `Titre_Film`, `Emplacement_Film`, `Cover_Film`, `Date_Ajout` FROM `film` WHERE `Type_film`=1 AND `moderation_Film`=1');
	$i=0;
	while($donnees = $reponse->fetch())
	{
		$i++;
		?>
		<li><a class=<?php echo "F$i";?> onclick='ChangeVTW("<?php echo $donnees['Cover_Film'];?>","<?php echo $donnees['Titre_Film'];?>","<?php echo $donnees['Emplacement_Film'];?>","DS1","V1","T1")'><img src="<?php echo $donnees['Cover_Film'];?>" alt="" />
		<?php echo $donnees['Titre_Film'];?></a></li>
		<?php
	}
	$reponse->closeCursor(); 
?>
