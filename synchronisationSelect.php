<?php
	require('db_connection.php');
	$select = intval($_GET['select']);
	$reponse1 = $db->query('SELECT Designation_Genre,Id_Genre FROM genre where Type="'.$select.'"');
	while ($donnees1 = $reponse1->fetch())
	{?>
		<option value=" <?php echo $donnees1['Id_Genre']; ?>" > 
		<?php echo $donnees1['Designation_Genre']; ?></option>
		<?php
	}
	$reponse1->closeCursor(); 
?>
