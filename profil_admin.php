 <?php
session_start();
if(!isset($_SESSION['id'] ))
header('location:AccD.php');
else $id=$_SESSION['id'];
 include("Verification.php");
 require('db_connection.php');
 ?>
 <html>
 <head>
		<link rel="stylesheet" href="malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css" />
		<script text="text/javascript" src="jquery.js"></script>
		<!--<script text="text/javascript" src="AccD.js"></script>-->
		<script text="text/javascript" src="jqueryUI.js"></script>
		<script text="text/javascript" src="jquery.mousewheel.js"></script>
		<script text="text/javascript" src="jscolor.js"></script>
		<script src="jquery-animate-css-rotate-scale.js" type="text/javascript"></script>
		<script src="rotate3Di.js" type="text/javascript"></script>
		<script src="malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
		<script text="text/javascript" src="velocity.min.js"></script>
		<script text="text/javascript" src="VelocityExemple.js"></script>
		<script text="text/javascript" src="velocity.ui.js"></script>
		<script text="text/javascript" src="d3.js"></script>
		<script text="text/javascript" src="d3.min.js"></script>
		<script text="text/javascript" src="raphael.min.js"></script>
		<script text="text/javascript" src="raphael.js"></script>
</head>
 <body onload="document.getElementById('table').style.width = '1000px';$('#section').mCustomScrollbar({theme:'inset-2',axis:'yx',setHeight: 'auto', setWidth: 'auto'});" style="width:100%;overflow:hidden">
 <?php
			echo "<center><section id=section style='width:90%;overflow:hidden'><table id='table' style='max-width:1000px;margin-top:25px;'>
			<tr width=1000>			
			<th>Utilisateur</th>
			<th>Genre </th>
			<th>Titre</th>
			<th><center>Emplacement</center></th>
			<th>Type</th>
			<th>Extension</th>
			<th><center>Cover</center></th>
			<th>Date d'ajout</th>
			<th>Modération</th>
			<th>Accepter</th>
			<th><center>Mise en attente<center></th>
			<th>Suprimer</th>
			</tr>";
			$result = $db->query('SELECT Designation_Genre,Id_film,Emplacement_Film,Extension_Film,Cover_Film,user_name,user.id_user,Titre_Film,Type_film,Date_ajout,moderation_Film FROM film,genre,user where film.Id_Genre=genre.Id_Genre and film.id_user=user.id_user');
			while($row = $result->fetch()) {
				if($row['Type_film']==1)$typef="Réel";
				else $typef="Anime";
				if($row['moderation_Film']==1)$moderation="Accepté";
				else $moderation="En attente";
				echo "<tr>";
				echo "<td>" . $row['user_name'] . "</td>";
				echo "<td>" . $row['Designation_Genre'] . "</td>";
				echo "<td>" . $row['Titre_Film'] . "</td>";
				echo "<td>" . $row['Emplacement_Film'] . "</td>";
				echo "<td>" . $typef . "</td>";
				echo "<td>" . $row['Extension_Film'] . "</td>";
				echo "<td>" . $row['Cover_Film'] . "</td>";
				echo "<td>" . $row['Date_ajout'] . "</td>";
				echo "<td>" . $moderation . "</td>";				
				echo "<td> <a id=". $row['Id_film'] ." onclick='accepter(this.id);'href='#'><img width=20 height=20 src='Wallpaper/accepter.png 'id=". $row['Id_film'] ."/> </a></td>";
				echo "<td> <a id=". $row['Id_film'] ." onclick='attente(this.id);'href='#'><img width=20 height=20 src='Wallpaper/attente.png 'id=". $row['Id_film'] ."/> </a></td>";
				echo "<td> <a id=". $row['Id_film'] ." onclick='suprimer(this.id);' href='#'><img width=20 height=20 src='Wallpaper/suprimer.png ' id=". $row['Id_film'] ."/> </a></td>";
				echo "</tr>";
			}
			echo "</table></section></center>";
			$result->closeCursor(); 
		?>
				<script><!--Barre de défilement pour TopFilm-->
					$(document).ready(function(){
						$("body").mCustomScrollbar({
							theme:"inset-2"
						});
					});
				</script>
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
		<script>
		function suprimer(str) { 
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
               var e = confirm("Vouler vous vraiment suprimer ce fichier?");
               if( e == true ){
                    xmlhttp.open("GET","suprimer.php?elt="+str,true);
		  xmlhttp.send();
		  window.location.reload();
		}
                  
               }
		function attente(str) { 
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  var b = confirm("Vouler vous vraiment mettre en attente ce fichier?");
               if( b == true ){
		  xmlhttp.open("GET","attente.php?att="+str,true);
		  xmlhttp.send();
		  window.location.reload();
			   }
		}
		function accepter(str) { 
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  var c = confirm("Vouler vous vraiment accepter ce fichier?");
               if( c == true ){
		  xmlhttp.open("GET","accepter.php?a="+str,true);
		  xmlhttp.send();
			   window.location.reload();
			  }
		}
		</script>
	</body>
</html>