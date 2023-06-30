<?php
session_start();
if(isset($_SESSION['id'] )){
$idc=$_SESSION['id'];
$typeUser=$_SESSION['type'];
}
require('db_connection.php');
	// if($_FILES['video']['name'] !=''){
		$type=$_POST["s2"];
		$genre=$_POST["s3"];
		$film=$_FILES['video']['name'];
		$tab=explode(".",$film);
		$film_name=$_POST["nom"];
		$film_extension=$tab[1];
		$film_tmp=$_FILES["video"]['tmp_name'];
		$dest='Film/'.$film;
		$cover=$_FILES['cover']['name'];
		$tab_cover=explode(".",$cover);
		$cover_extension=$tab_cover[1];
		$cover_tmp=$_FILES["cover"]['tmp_name'];
		$dest_cover='Wallpaper/'.$cover;
		$date=date("Y,n,j");
		$extension_film=array("FLV","flv","mkv","MKV","mp4","MP4","webm","WEBM");
		$extension_cover=array("jpg","JPG","JPEG","jpeg","PNG","png");
	if(in_array($film_extension,$extension_film) and in_array($cover_extension,$extension_cover)){
		$verification = $db->query('SELECT count(*) FROM film WHERE Titre_film = "'.$film_name.'"');
			$donnees = $verification->fetch();
			if($donnees[0]==0){
	if(move_uploaded_file($film_tmp,$dest) and move_uploaded_file($cover_tmp,$dest_cover)){
		$req=$db->prepare('INSERT INTO film(Titre_film,Emplacement_film,Type_film,Extension_Film,Cover_Film,Date_ajout,Id_Genre,id_user) VALUES (?,?,?,?,?,?,?,?); ');
			$req->execute (array($film_name,$dest,$type,$film_extension,$dest_cover,$date,$genre,$idc));
			if($typeUser==1) $lien="Profil_admin.php";
			else $lien="Profil client.php";
			// echo "<img src='Wallpaper/good.jpg'/>";
			// echo "<div class=message >
			
			// <h1>Ficher envoyé avec succes</h1>	
			// <a href=".$lien.">Retour</a>
			// </div>";
			echo "Fichier envoyé avec succes";
		}
		else
		// else echo "<div class=message >
		// <h1>Une erreur est survenue</h1>
		// <a href='#' onclick='window.history.back();'>Retour</a>
		// </div>";
			echo "Une erreur est survenue";
		}
		else 
			// echo "<div class=message >
		// <h1>Ce fichier existe deja</h1>
		// <a href=".$lien.">Retour</a>
		// </div>";
		echo "Ce fichier existe déjà!";
	}
	else {
		// echo "<div class=message >
		// <h1>Seuls les fichiers d'extensions valides sont autorisés</h1>
		// <a href='#' onclick='window.history.back();'>Retour</a>
		// </div>";
		echo "Seuls les fichiers d'extensions valides sont autorisés.";
	}
	// }
	// else
		// echo "Khawi";
?>
