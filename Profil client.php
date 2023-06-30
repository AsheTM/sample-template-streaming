<?php
session_start();
if(!isset($_SESSION['id'] ))
header('location:AccD.php');
else $id=$_SESSION['id'];
 include("Verification.php");
			echo "<section><table id=table>
			<tr>
			<th>Titre</th>
			<th>Type</th>
			<th>Genre</th>
			<th>Modération</th>
			<th>Date d'ajout </th>
			</tr>";
			require('db_connection.php');
			$result = $db->query('SELECT Designation_Genre,Titre_Film,Type_film,Date_ajout,moderation_Film FROM film,genre where id_user="'.$id.'" and film.Id_Genre=genre.Id_Genre');
			while($row = $result->fetch()) {
				if($row['Type_film']==1)$typef="Réel";
				else $typef="Anime";
				if($row['moderation_Film']==1)$moderation="Accepté";
				else $moderation="En attente";
				echo "<tr>";
				echo "<td>" . $row['Titre_Film'] . "</td>";
				echo "<td>" . $typef . "</td>";
				echo "<td>" . $row['Designation_Genre'] . "</td>";
				echo "<td>" .  $moderation . "</td>";
				echo "<td>" . $row['Date_ajout'] . "</td>";
				echo "</tr>";
			}
			echo "</table></section>";
			$result->closeCursor(); 
		?>
		<style>
		#table {
				width:80%;
				border-collapse: collapse;
				margin:auto;
				border-radius:15px ;
				padding: 5px;
				border: 1px solid black;
			}

			 table td,#table th {
				border: 1px solid black;
				padding: 5px;
				
			}
			#table tr:nth-Child(even){background-color:#f2f2f2;}
			#table tr{background-color:gray;}
			th {
				text-align: left;
				background-color:#0f0f0a;
				color:white;
				}
#section
{
	border-radius:25px;
	padding:10px;
	width:90%;
	height:150px;
	margin:auto;
	display: block;
	position: relative;
	background: -webkit-linear-gradient(bottom, rgba(165,163,163,0.3), rgba(192,190,190,0.5));
	border-radius: 10px 10px 10px 10px;
	border-width: 10px;
}

section:before
{
	content: "";
	position: absolute;
	right: 0px;
	top: 0px;
	border-style: solid;
	height: 0px;
	width: 0px;
	display: block;
	box-shadow: 0pt 2px 5px rgba(0, 0, 0, 0.8);
	border-radius: 0pt 0pt 0pt 5px;
	border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(192,190,190,0.5) rgba(192,190,190,0.5);
	border-width: 10px;
}
	

		</style>