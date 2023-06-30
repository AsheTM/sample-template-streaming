<?php 
session_start();
if(!empty($_SESSION['id'])){
	$connexion=1;
	$utilisateur=$_SESSION['name'];
	$type=$_SESSION['type'];
}
else $connexion=0;
?>
<!DOCTYPE HTML><!--HTM-->
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width" />
		<title>Accueil</title>
		<link rel="stylesheet" href="Style/AccDi1.css"/>
		<link rel="stylesheet" href="Style/AccDi2.css"/>
		<link rel="stylesheet" href="Style/AccDi3.css"/>
		<link rel="stylesheet" href="Style/AccDi31.css"/>
		<link rel="stylesheet" href="Style/AccDi4.css"/>
		<link rel="stylesheet" href="Style/AccDi5.css"/>
		<link rel="stylesheet" media="screen and (max-width:1100px)" href="Style/AccDiMQ1.css"/>
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
		<script>
			function ChangeVTW(URL,T,Src,DS,V,TT){
				var URLL = 'URL("'+URL+'")';
				$("#"+V).attr("src",Src);
				$("#"+V).attr("poster",URL);
				$("#"+TT).text(T);
				$("."+DS).css({backgroundImage:URLL});
			}
		</script>
		<script>
			function verif_connexion(){
				var connect='<?php echo$connexion;?>';
				var utilisat='<?php echo$utilisateur;?>';
				var type='<?php echo$type;?>';
				var tabConnexion=document.getElementById("Cent4");
				var boutConnexion=document.getElementById("Cxn");
				if(connect==1){
					$("#Ins").css({display:"none"});
				}
				if(connect==1 && type==0){
					boutConnexion.style.backgroundColor="white";
					boutConnexion.innerHTML=""+utilisat;
					boutConnexion.style.color="black";
					tabConnexion.style.backgroundColor="black";
					tabConnexion.innerHTML="<center><br><a href='Profil client.php' class='profile' style='color:white;text-decoration:none'><img width=20 height=20 src='Wallpaper/profile.png'/>&nbsp;Profile</a><br><a href='deconnexion.php' class='profile' style='color:white;text-decoration:none'><img width=20 height=20 src='Wallpaper/deconnexion.png'/>&nbsp;Deconnexion</a></center>";	
				}
				if(connect==1 && type==1){
					boutConnexion.style.backgroundColor="white";
					boutConnexion.innerHTML=""+utilisat;
					boutConnexion.style.color="black";
					tabConnexion.style.backgroundColor="black";
					tabConnexion.innerHTML="<center><br><a href='profil_admin.php' class='profile' style='color:white;text-decoration:none'><img width=20 height=20 src='Wallpaper/profile.png'/>&nbsp;Profile</a><br><a href='deconnexion.php' class='profile' style='color:white;text-decoration:none'><img width=20 height=20 src='Wallpaper/deconnexion.png'/>&nbsp;Deconnexion</a></center>";		
				}
			}
		</script>
		<style>
			.profile:hover{
				position:relative;
				left:15px;
			}
			.profile:active{
				left:0px;
			}
		</style>
	</head>
	<body onload="verif_connexion();" style="overflow:hidden;"> <!--style="overflow:hidden" onload="ScrollBody();"-->
	<div id=SplashScreen style="background-color:black;">
		<span id=SS1 style="color:rgb(81,168,255)">2</span>
		<span id=SS2 style="color:rgb(81,168,255)">points</span>
		<span id=SS3 style="color:rgb(81,168,255)">P</span>
		<!--<span id="count">175</span>-->
	</div>
	<script><!--Disparition du SplashScreen-->
		$(document).ready(function(){
			$("#SplashScreen").delay(3000).animate({ backgroundColor: 'rgba(0,0,0,0)'},1000);
			$("#SS1,#SS2,#SS3").delay(3751).animate({ opacity: "0"},500);
			setTimeout(function(){$("#SplashScreen").css({display:"none"});},4501);
			//$("#SS1#SS2#SS3").delay(3000).animate({opacity:"1"},1000);
		});
	</script>
	<span id="Anc" style="position:absolute"></span><!--Pour l'ancrage-->
		<div class=ContenuACC>
			<header style="z-index:5;overflow:hidden;">
				<ul class="Menu">
					<div class=deuxpointsP>
						<li>
							<a id="Acc">
								<span class="NameSite">2PointsP</span>
								<img id="Logo"src="logo.png" alt="2pointsP" style="z-index:4;background-color:none"/>
							</a>
					<script>
						var Dep1 = function(){
						$(document).ready(function(){
							$("#Logo").hover(function(){
							$(".NameSite").stop().animate({left:"69", opacity:"1"}, 300);
							$(".Cent1").stop().animate({left:"167"}, 300);
							$(".Cent2").stop().animate({left:"253"}, 300);
						}, function(){
							$(".NameSite").stop().animate({left:"5", opacity:"0"}, 300);
							$(".Cent1").stop().animate({left:"70"}, 300);
							$(".Cent2").stop().animate({left:"146"}, 300);
								});
							});
					};
					Dep1();
					</script></li></div>
					<li class=Cent1> <a id="Div" href="#C2">Films</a> 
					<script>
						var Dep2 = function(){
							$(document).ready(function(){
								$(".Cent1").hover(function(){
									$(".Cent2").stop().animate({left:"200"}, 300);
								},function(){
									$(".Cent2").stop().animate({left:"146"}, 300);
								})
							});
						};
						Dep2();
					</script></li>
					<li class=Cent2><a id="Etu" href="#C3">Series</a></li>
					<li id=Cent3 class=Cent3><span id="Cxn">Connexion</span></li>
				</ul>				
			</header>
			
			<div id="Def"  style="z-index:-1"><!--Défilement des images au fond d'écran-->
				<img src="<?php require('db_connection.php');
					$repons = $db->query('SELECT `Cover_Film`, `Date_Ajout` FROM `film` WHERE `moderation_Film`=1 ORDER BY `Date_Ajout` DESC');
					$donnees = $repons->fetch();
					echo $donnees['Cover_Film'];
				?>" id="img1" class="img1" style="z-index:-1" />
				<img src="<?php
					$donnees = $repons->fetch();
					echo $donnees['Cover_Film'];
				?>" id="img2" class="img2" style="z-index:-1" />
				<img src="<?php
					$donnees = $repons->fetch();
					echo $donnees['Cover_Film'];
					$repons->closeCursor();
				?>" id="img3" class="img3" style="z-index:-1" />
			</div>
			
			<script><!--Pour centrer les images Pub de Def ('défilement')-->
				$(document).ready(function(){
					var S;
					$("#img1").ready(function(){
						S=$("#Def").width()/$("#img1").width();
						if($("#img1").height() < $("#img1").width()){
							$("#img1").css({/*marginTop:-(S*$("#img1").height()-$(window).height())/2,*/maxWidth:"100%",height:"auto"});
						}else{
							if($("#img1").height() == $("#img1").width()){
								$("#img1").css({marginTop:-(S*$("#img1").height()-$(window).height())/2,maxWidth:$(window).width(),height:"auto"});
							}else
								$("#img1").css({/*marginLeft:-(S*$("#img1").width()-$(window).width())/2,*/maxHeight:"100%",width:"auto"});
						}
					});
					$("#img2").ready(function(){
						S=$("#Def").width()/$("#img2").width();
						if($("#img2").height() < $("#img2").width()){
							$("#img2").css({/*marginTop:-(S*$("#img2").height()-$(window).height())/2,*/maxWidth:"100%",height:"auto"});
						}else{
							if($("#img2").height() == $("#img2").width()){
								$("#img2").css({marginTop:-(S*$("#img2").height()-$(window).height())/2,maxWidth:$(window).width(),height:"auto"});
							}else
								$("#img2").css({/*marginLeft:-(S*$("#img2").width()-$(window).width())/2,*/maxHeight:"100%",width:"auto"});
						}
					});
					$("#img3").ready(function(){
						S=$("#Def").width()/$("#img3").width();
						if($("#img3").height() < $("#img3").width()){
							$("#img3").css({/*marginTop:-(S*$("#img3").height()-$(window).height())/2,*/maxWidth:"100%",height:"auto"});
						}else{
							if($("#img3").height() == $("#img3").width()){
								$("#img3").css({marginTop:-(S*$("#img3").height()-$(window).height())/2,maxWidth:$(window).width(),height:"auto"});
							}else
								$("#img3").css({/*marginLeft:-(S*$("#img3").width()-$(window).width())/2,*/maxHeight:"100%",width:"auto"});
						}
					});
				});
			</script>
			
			<aside id=Cent4 class=Cent3><!--Petite fenetre pour se connecter-->
				<table>
					<form method="POST" action="connexion.php">
						<tr>
							<td>Email :</td>
							<td><input type="email" id="cmail" name="cmail" placeholder="example@gmail.com"/></td>
						</tr>
						<tr>
							<td>Mot de passe :</td>
							<td><input type="password" id="cpasword" name="cpasword" placeholder=""/></td>
						</tr>
						<tr>
							<td colspan=2 align=center><input type=submit value="Se connecter" id="Se connecter"></td>
						</tr>
					</form>
				</table>
				<script>
					document.getElementById("Se connecter").addEventListener("click", function(event){
						var cmail=document.getElementById("cmail");
						var cpswd=document.getElementById("cpasword");
						if(cpasword.value.length<6 || cmail.value=="" ) 
						{	
							alert("Vous n'avez pas pas remplit tous les champs où vous avez  mal remplit un champs");
						event.preventDefault()
						}
					});
				</script>
			</aside>
			<script><!--Apparition de la fenetre du connexion et son invisibilité-->
				var Dep3 = function(){
					$(document).ready(function(){
						$("#Cent3").hover(function(){
							$("#Cxn").stop().animate({width:"200"},200);
							$("#Cent4").stop().delay(200).slideDown(300);
							$("#Ins").stop().delay(200).animate({top: "+=50"},300);
						});
						$("#Cent4").mouseleave(function(){
							$("#Cxn").stop().delay(200).animate({width:"77px"},200);
							$("#Cent4").stop().slideUp(200);
							$("#Ins").stop().animate({top:"20%"},300);
						});
					});};
				Dep3();
			</script>
				
			<aside id="Ins" style="height:210px"><!--Block d'inscription-->
				<table>
					<tr style="background-color:rgb(0,100,200)"><td><b>Inscription</b></td></tr>
					<tr id=TabFormIns style="display:flex;min-height:97%">
						<form id=FormIns action="Inscription.php" method="get">
							<td>
								<table>
									<tr><td align=center width=70px>Pseudo</td><td><input id="pseudo" name="pseudo" class="Ch" type="text" placeholder="AsheTM"/></td></tr>
									<tr><td align=center width=70px>Email</td><td><input id="mail" name="mail" class="Ch" type="email" placeholder="example@gmail.com"/></td></tr>
									<tr><td align=center width=70px>Mot de passe</td><td><input id="pasword" name="pasword" class="Ch" type="password"/></td></tr>
									<tr><td align=center width=70px>Vérification du Mot de passe</td><td><input id="vpassword" class="Ch" type="password"/></td></tr>
									<tr><td align=center colspan=2 align=center><input type="button" id="s'inscrire" value="S'inscrire"/></td></tr>
								</table>
							</td>
						</form>
					</tr>
				</table>
				<script>
					document.getElementById("s'inscrire").addEventListener("click", function(event){
						var pseudo=document.getElementById("pseudo");
						var mail=document.getElementById("mail");
						var pswd=document.getElementById("pasword");
						var vpswd=document.getElementById("vpassword");
						if(pseudo.value.length<2 || mail.value=="" || pswd.value.length<6 || vpswd.value.length<6 ) 
						{	
							alert("Vous n'avez pas pas remplit tous les champs où vous avez  mal remplit un champs");
							event.preventDefault()
						}
						else if( pswd.value!= vpswd.value ) 
						{	
							alert("Les Deux Mots De Passe Ne Sont Pas Identiques");
							event.preventDefault()
						}
						else
						{
							xmlhttp=new XMLHttpRequest();
							xmlhttp.open("GET","Inscription.php?pseudo="+pseudo.value+"&mail="+mail.value+"&pasword="+pswd.value,true);
							xmlhttp.onreadystatechange = function (aEvt) {
								if (xmlhttp.readyState == 4) {
									if(xmlhttp.status == 200) {
										if(xmlhttp.responseText == "Votre Inscription a été bien faite"){
											$("#FormIns").css("display","none");
											$("#TabFormIns").html(xmlhttp.responseText);
										}
										else
										{
											alert(xmlhttp.responseText);
										}
									}
								}
							};
							xmlhttp.send();
							// $.ajax({
								// method: "POST",
								// url: $("#FormIns").attr("action"),
								// data: $("#FormIns").serialize()
							// })
							// .done(function( msg ) {
									// alert( "Data Saved: " + msg );
							// });
						}
					});
				</script>
			</aside>
			
			<aside id="APr">
				<table>
					<tr style="background-color:rgb(0,100,200)"><td><b>A PROPOS</b></td></tr>
					<tr><td>Nous sommes un trinome, on avait pour objectif de faire un projet; Site Web. Notre site est basé sur l'idée du streaming...</td></tr>
				</table>
			</aside>
			
			<!--<a class=prev onclick="prev()">&#10094;</a>
			<a class=next onclick="next()">&#10095;</a> -->
		</div>	
		
		<div id=C2 class=Contenu2>                               <!--|||||||||||||||||||-1ERE BLOCK FILM-|||||||||||||||||||-->
			<span id="MB1" style="top:120px;background-color:rgb(81,168,255);display:block;z-index:9;"><img src="MLI.png" alt="Button Menu"/></span><!--Le button Menu-->
			<ul class="topnav" style="background-color:rgb(81,168,255)">
				<li><a class="active Home" href="#Anc" style="background-color:rgb(0,100,200)">Home</a></li>
				<div id=TopF>
					<li><a href="" class=TopF style="background-color:rgb(0,100,200)">Nouveau Film</a></li><!--Button Top Film (hover)-->
					<div class="List" id=ListeTF style="overflow:hidden;width:100%;height:245px;z-index:10"><!--List Top Film-->
						<ul><!--Au click d'un anime au choix dans la liste, on change l'arrière plan, le titre et la vidéo-->
							<?php
								require("synchronisationUlFilm.php");
							?>
						</ul>
					</div>
				</div>
				<script><!--Barre de défilement pour TopFilm-->
					$(document).ready(function(){
						$("#ListeTF").mCustomScrollbar({
							theme:"inset-2"
						});
					});
				</script>
				<script><!--Apparition du list des anime 1ere block-->
					$(".TopF").hover(function(){
						$("#ListeTF").stop().fadeIn(500);
						$(".TopF").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#TopF").mouseleave(function(){
						$("#ListeTF").stop().fadeOut(500);
						$(".TopF").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<div id=TopAnime>
					<li><a href="#contact" class=TopAnime style="background-color:rgb(0,100,200)" >Nouveau Anime</a></li><!--Button Top Anime (hover)-->
					<div class="List" id=ListeTA style="overflow:hidden;width:100%;height:245px;"><!--List Top Anime-->
						<ul><!--Au click d'un anime au choix dans la liste, on change l'arrière plan, le titre et la vidéo-->
							<?php
								require("synchronisationUlFilmA.php");
							?>
						</ul>
					</div>
				</div>
				<script><!--Barre de défilement pour TopAnime-->
					$(document).ready(function(){
						$("#ListeTA").mCustomScrollbar({
							theme:"inset-2"
						});
					});
				</script>
				<script><!--Apparition du list des anime 2eme block-->
					$(".TopAnime").hover(function(){
						$("#ListeTA").stop().fadeIn(500);
						$(".TopAnime").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#TopAnime").mouseleave(function(){
						$("#ListeTA").stop().fadeOut(500);
						$(".TopAnime").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<li class="right search" style="position:relative;top:10px;right:100px;">
				<form><input id="searchF" class="searchBlur" onclick="Searching()" onkeyup="Searching()" style="width:300px;height:15px;" type=text placeholder="Recherche Film"/>
				</form></li>
				<a href="#" id="LinkSearch" class="NonClickable searchF searchBlur" onblur="$('.searchF').css('display','none'); " onfocus="$('.searchF').css(backgroundColor,'blue');" onclick="Appliquer_Searching()" style="box-shadow:5px 5px 15px;position:absolute;top:30px;right:101px;width:302px;display:none;background-color:white;padding-bottom:25px;padding-top:25px;color:black;text-decoration:none;">
					<div class="searchF">
						<div style="height:35px;background-color:white;z-index:15;display:none;"></div>
						<!--<div class="searchF" style="height:35px;background-color:white;z-index:15;"></div>
						<div class="searchF" style="height:35px;background-color:white;z-index:15;"></div>-->
					</div>
				</a>
				<script>
					var TF,CF,EF;
					var Searching = function (){
							var xhttp=new XMLHttpRequest();
							xhttp.open("GET","search.php?searchF="+$('#searchF').val(),true);
							xhttp.onreadystatechange = function (aEvt) {
								if (xhttp.readyState == 4) {
									if(xhttp.status == 200) {
										if(xhttp.responseText!=""){
											$(".searchF").css("display","block");
											var F = xhttp.responseText.split(" &&& ");
											TF = F[0];
											CF = F[1];
											EF = F[2];
											$(".searchF").text(TF);
											// $("#LinkSearch").attr("onClick","'alert(test);'");
										}
										if(xhttp.responseText=="" || $("#searchF").val()==""){
											$(".searchF").css("display","none");
										}
									}
								}
							};
							xhttp.send();
						},
						Appliquer_Searching = function (){
							ChangeVTW(CF,TF,EF,"DS1","V1","T1");
						};
				</script>
			</ul>
			<div class="DF1" id="BTN1" style="background-color:rgb(81,168,255);"><!--onmousedown="scroll('+1')" onmouseup="scroll(-1)"--><!--List des buttons pour la 1ere block-->
				<!--<span id=scrollBar1></span>-->
				<div id=FR style="background-color:rgb(0,100,200);"><a class="NonClickable" href="#" style="margin:auto;font-size:24px">Film Réelle</a></div>
				<script>
					$("#FR").hover(function(){
						$("#FR").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#FR").mouseleave(function(){
						$("#FR").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<ul id=FRL style="list-style-type:none;position:absolute;right:0px;top:auto;width:100%;overflow:hidden">
					<?php require('db_connection.php');
						$repons = $db->query('SELECT `Designation_Genre`, `Cover_Film`,`Titre_Film`,`Emplacement_Film` FROM `genre` D, `film` T WHERE D.`Id_Genre`= T.`Id_Genre` AND `Type_Film`=1 ORDER BY `Designation_Genre` ASC');
						$genre="";
						while($donnees = $repons->fetch()){
					?><li style="display:block;background-color:rgb(0,100,200);border-radius:25px;" align=center><a class="NonClickable" href="#" style="margin:auto;"><?php echo $donnees['Designation_Genre'];?></a></li>
						<ul style="list-style-type:none;width:80%;">
							<?php
								if($genre!=$donnees['Designation_Genre'])$genre=$donnees['Designation_Genre'];
								if($genre=="" || $genre==$donnees['Designation_Genre']){
							?>
							<li style="width:200px;margin-left:-25px;padding-left:-25px;"><a class="NonClickable Interaction" style="padding-left:-25px;" href="#" onclick='ChangeVTW("<?php echo $donnees['Cover_Film'];?>","<?php echo $donnees['Titre_Film'];?>","<?php echo $donnees['Emplacement_Film'];?>","DS1","V1","T1")'>
							<img style="width:180px;height:auto;" src="<?php echo $donnees['Cover_Film'];?>" alt="" />
							<?php echo $donnees['Titre_Film'];?></a></li>
							<?php
								$genre=$donnees['Designation_Genre'];
								}
							?>
						</ul>
						<script>
							// $(".Interaction").hover(function(){
								// $(".Interaction").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
							// });
							// $(".Interaction").mouseleave(function(){
								// $(".Interaction").stop().animate({backgroundColor:"rgb(81,168,255)"},350);
							// });
						</script>
					<?php
						}
						$repons->closeCursor();
					?>
				</ul>
				<script>
					$(document).ready(function(){
						$("#FRL").css("height",($(window).height()-325)+"");
					});
				</script>
				<script><!--Barre de défilement pour la liste glissant Film Réelle-->
					$(document).ready(function(){
						$("#FRL").mCustomScrollbar({
							theme:"inset-2"
						});
					});
				</script>
				<div id=FA style="background-color:rgb(0,100,200);"><a class="NonClickable" href="#" style="margin:auto;font-size:24px">Film Animée</a></div>
				<script>
					$("#FA").hover(function(){
						$("#FA").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#FA").mouseleave(function(){
						$("#FA").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<ul id=FAL style="list-style-type:none;position:absolute;right:0px;top:auto;width:100%;overflow:hidden">
					<?php require('db_connection.php');
						$repons = $db->query('SELECT `Designation_Genre`, `Cover_Film`,`Titre_Film`,`Emplacement_Film` FROM `genre` D, `film` T WHERE D.`Id_Genre`= T.`Id_Genre` AND `Type_Film`=0 ORDER BY `Designation_Genre` ASC');
						$genre="";
						while($donnees = $repons->fetch()){
					?><li style="display:block;background-color:rgb(0,100,200);border-radius:25px;" align=center><a class="NonClickable" href="#" style="margin:auto;"><?php echo $donnees['Designation_Genre'];?></a></li>
						<ul style="list-style-type:none;width:80%;">
							<?php
								if($genre!=$donnees['Designation_Genre'])$genre=$donnees['Designation_Genre'];
								if($genre=="" || $genre==$donnees['Designation_Genre']){
							?>
							<li><a class="NonClickable" href="#" onclick='ChangeVTW("<?php echo $donnees['Cover_Film'];?>","<?php echo $donnees['Titre_Film'];?>","<?php echo $donnees['Emplacement_Film'];?>","DS1","V1","T1")'>
							<img style="width:180px;height:auto;" src="<?php echo $donnees['Cover_Film'];?>" alt="" />
							<?php echo $donnees['Titre_Film'];?></a></li>
							<?php
								$genre=$donnees['Designation_Genre'];
								}
							?>
						</ul>
					<?php
						}
						$repons->closeCursor();
					?>
				</ul>
				<script>
					$(document).ready(function(){
						$("#FAL").css("height",($(window).height()-325)+"");
					});
				</script>
				<script><!--Barre de défilement pour la liste glissant Film Animée-->
					$(document).ready(function(){
						$("#FAL").mCustomScrollbar({
							theme:"inset-2"
						});
					});
				</script>
			</div>
			<script><!--Déplacement de la liste glissante-->
				var F=true;
				$("#FR").click(function(){
					if(F){
						$("#FA").fadeOut(300);
						$("#FRL").slideDown(300);
						F=false;
					}
					else{
						$("#FA").fadeIn(300);
						$("#FRL").slideUp(300);
						F=true;
					}
				});
				$("#FA").click(function(){
					if(F){
						$("#FR").slideUp(300);
						$("#FAL").slideDown(300);
						F=false;
					}
					else{
						$("#FR").slideDown(300);
						$("#FAL").slideUp(300);
						F=true;
					}
				});
			</script>
			<div class="DS1" style='background-image:<?php require("synchronisationIFilm.php"); ?>'>
				<span id="T1" class="T" style="color:white">
				<?php
					require("synchronisationTFilm.php");
				?>
				</span><br/>
				<!--<script>
					$("#TC").load(function(){
						var C = new ColorThief();
						alert(C.getColor($("#TC"))[0]);
					});
				</script>-->
				<span class="Trailer"><video style="width:500px;height:auto;max-height:300px;" id=V1 src="<?php require("synchronisationVFilm.php");?>" controls /></span><!-- V1.mp4 -->
				<!--<script>alert($(".DS2").colorPicker());</script>-->
				<script><!--Déplacement du titre de l'anime du deuxieme block-->
					var position1 = $(window).scrollTop();
					function PtiDepA() {
						var scroll = $(window).scrollTop();
						if ($(window).scrollTop() > 6*$(window).height()/8 && $(window).scrollTop() < $(window).height() && position < scroll) 
							$('#T1').css({top:"-=3"}); 
						if ($(window).scrollTop() > 6*$(window).height()/8 && $(window).scrollTop() < $(window).height() && position > scroll)  
							$('#T1').css({top:"+=3"});
						if ($(window).scrollTop() < 6*$(window).height()/8 || $(window).scrollTop() > $(window).height())
							$('#T1').css({top:"50"});
						position=scroll;
					}
					$(window).scroll(PtiDepA);
					PtiDepA();
				</script>
			</div>
		</div>
					
					<script><!--Apparition du Button Menu 1 ou l'invisibilité du button--><!--COMMENTAIRE-->
						/*function AppMBA() {
							if ($(window).scrollTop() > $(window).height() && $(window).scrollTop() < 3*$(window).height()/2) 
								$('#MB1').fadeIn("fast"); 
							else 
								$('#MB1').fadeOut("fast"); 
						}
						$(window).scroll(AppMBA);
						AppMBA();*/
					</script>
					<script><!--Apparition des Button de la liste 1 ou l'invisibilité des button-->
						function AppBTNA() {
							$("#MB1").hover(function(){
								$(".DF1").show("slide", { direction: "right" }, 300);
								$("#MB1").fadeOut("fast");
							});
							$(".DF1").mouseleave(function(){
								$(".DF1").hide("slide", { direction: "right" }, 300);
								$("#MB1").fadeIn("slow");
								$("#FA").fadeIn(150);
								$("#FRL").slideUp(150);
								$("#FR").fadeIn(150);
								$("#FAL").slideUp(150);
							});
							if ($(window).scrollTop() < 6*$(window).height()/7 || $(window).scrollTop() > 13*$(window).height()/7) 
								$('.DF1').fadeOut("slow"); 
							//$("body:not(#BTN)").click(function(){$('#BTN').fadeOut("slow");});
						}
						// $(window).scroll(AppBTNA);
						AppBTNA();
					</script>
		
		<div id="C3" class=Contenu3>                               <!--|||||||||||||||||||-2EME BLOCK SERIE-|||||||||||||||||||--><!--ELLE EST TJRS STATIC-->
			<span id="MB2" style="top:120px;background-color:rgb(81,168,255);display:block;position:absolute;z-index:11;"><img src="MLI.png" alt="Button Menu"/></span><!--Le button Menu-->
			<ul class="topnav" style="background-color:rgb(81,168,255)">
				<li><a class="active" href="#Anc"  style="background-color:rgb(0,100,200)">Home</a></li>
				<div id=Anime>
					<li><a href="" class=Anime  style="background-color:rgb(0,100,200)">Anime</a></li><!--Button Anime (hover)-->
					<div class="List" id=ListeA style="overflow:hidden;width:100%;height:245px;z-index:12;"><!--La liste des animes-->
						<ul><!--Au click d'un anime au choix dans la liste, on change l'arrière plan, le titre et la vidéo-->
							<!--<span id=scrollBarA1 style="top:0px"></span>-->
							<li><a class=A7 onclick='ChangeVTW("Wallpaper/A7.png","Claymore","Serie/[BS]Claymore01.mkv","DS2","V2","T2")'><img src="Wallpaper/A7.png" alt="" />Claymore</a></li>
						</ul>
					</div>
					<script><!--Barre de défilement pour ListeA-->
						$(document).ready(function(){
							$("#ListeA").mCustomScrollbar({
								theme:"inset-2"
							});
						});
					</script>
				</div>
				<script><!--Apparition du list des anime 2eme block-->
					$(".Anime ").hover(function(){
						$("#ListeA").stop().fadeIn(500);
						$(".Anime").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#Anime").mouseleave(function(){
						$("#ListeA").stop().fadeOut(500);
						$(".Anime").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<div id=TV>
					<li><a href="#contact" class=TV  style="background-color:rgb(0,100,200)">TV</a></li><!--Button TV (hover)-->
					<div class="List" id=ListeB style="overflow:hidden;width:100%;height:245px;z-index:12;"><!--La liste des tvs-->
						<ul><!--Au click d'un anime au choix dans la liste, on change l'arrière plan, le titre et la vidéo-->
							<li><a class=A7 onclick='ChangeVTW("Wallpaper/bs.jpg","Blindspot","Serie/BlindspotS01E03.mkv","DS2","V2")'><img src="Wallpaper/bs.jpg" alt="" />Blindspot</a></li>
						</ul>
					</div>
					<script><!--Barre de défilement pour ListeB-->
						$(document).ready(function(){
							$("#ListeB").mCustomScrollbar({
								theme:"inset-2"
							});
						});
					</script>
				</div>
				<script><!--Apparition du list des tv 2eme block-->
					$(".TV ").hover(function(){
						$("#ListeB").stop().fadeIn(500);
						$(".TV").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#TV").mouseleave(function(){
						$("#ListeB").stop().fadeOut(500);
						$(".TV").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<li class="right" style="height:15px;position:absolute;top:10px;right:100px;"><form><input style="width:300px;" type=text placeholder="Recherche Serie"/></form></li>
			</ul>
			<div class="DF2" id="BTN2" style="background-color:rgb(81,168,255);overflow:hidden"><!--List des buttons pour la 2eme block-->
				<!--List des buttons pour la 2eme block-->
					<!--<span id=scrollBar1></span>-->
				<div id=SR style="background-color:rgb(0,100,200);"><a class="NonClickable" href="#" style="margin:auto;font-size:24px">Série Réelle</a></div>
				<script>
					$("#SR").hover(function(){
						$("#SR").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#SR").mouseleave(function(){
						$("#SR").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<ul id=SRL style="list-style-type:none;position:absolute;right:0px;top:auto;width:100%;overflow:hidden">
					<li style="display:block;background-color:rgb(0,100,200);border-radius:25px;" align=center><a class="NonClickable" href="#" style="margin:auto;">Police</a></li>
						<ul style="list-style-type:none;width:80%;">
							<li style="width:200px;margin-left:-25px;padding-left:-25px;"><a class="NonClickable Interaction" style="padding-left:-25px;" href="#" onclick='ChangeVTW("Wallpaper/bs.jpg","Blindspot","Serie/BlindspotS01E03.mkv","DS2","V2","T2")'>
							<img style="width:180px;height:auto;" src="Wallpaper/bs.jpg" alt="" />Blindspot</a></li>
						</ul>
				</ul>
				<script>
					$(document).ready(function(){
						$("#SRL").css("height",($(window).height()-325)+"");
					});
				</script>
				<script><!--Barre de défilement pour la liste glissant Film Réelle-->
					$(document).ready(function(){
						$("#SRL").mCustomScrollbar({
							theme:"inset-2"
						});
					});
				</script>
				<div id=SA style="background-color:rgb(0,100,200);"><a class="NonClickable" href="#" style="margin:auto;font-size:24px">Série Animée</a></div>
				<script>
					$("#SA").hover(function(){
						$("#SA").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$("#SA").mouseleave(function(){
						$("#SA").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
				<ul id=SAL style="list-style-type:none;position:absolute;right:0px;top:auto;width:100%;overflow:hidden">
					<li style="display:block;background-color:rgb(0,100,200);border-radius:25px;" align=center><a class="NonClickable" href="#" style="margin:auto;">Aventure</a></li>
						<ul style="list-style-type:none;width:80%;">
							<li style="width:200px;margin-left:-25px;padding-left:-25px;"><a class="NonClickable" href="#" onclick='ChangeVTW("Wallpaper/A7.png","Claymore","Serie/[BS]Claymore01.mkv","DS2","V2","T2")'>
							<img style="width:180px;height:auto;" src="Wallpaper/A7.png" alt="" />Claymore</a></li>
						</ul>
				</ul>
				<script>
					$(document).ready(function(){
						$("#SAL").css("height",($(window).height()-325)+"");
					});
				</script>
				<script><!--Barre de défilement pour la liste glissant Film Animée-->
					$(document).ready(function(){
						$("#SAL").mCustomScrollbar({
							theme:"inset-2"
						});
					});
				</script>
			</div>
			<script><!--Déplacement de la liste glissante-->
				var F=true;
				$("#SR").click(function(){
					if(F){
						$("#SA").fadeOut(300);
						$("#SRL").slideDown(300);
						F=false;
					}
					else{
						$("#SA").fadeIn(300);
						$("#SRL").slideUp(300);
						F=true;
					}
				});
				$("#SA").click(function(){
					if(F){
						$("#SR").slideUp(300);
						$("#SAL").slideDown(300);
						F=false;
					}
					else{
						$("#SR").slideDown(300);
						$("#SAL").slideUp(300);
						F=true;
					}
				});
			</script>
			<!-- $('#colorpickerHolder').ColorPicker({flat: true}); http://www.eyecon.ro/colorpicker/#        http://www.kevinsubileau.fr/projets/color-thief-php   -->
			<div class="DS2" style="background-image:URL('Wallpaper/A7.png');">
				<span id="T2" class="T" style="color:white">Claymore</span><br/>
				<!--<script>
					$("#TC").load(function(){
						var C = new ColorThief();
						alert(C.getColor($("#TC"))[0]);
					});
				</script>-->
				<span class="Trailer"><video style="width:500px;height:auto;max-height:300px;"id=V2 src="" controls /></span><!-- V1.mp4 -->
				<!--<script>alert($(".DS2").colorPicker());</script>-->
				<script><!--Déplacement du titre de l'anime du deuxieme block--><!--PROBLEME ICI-->
					var position2 = $(window).scrollTop();
					function PtiDepB() {
						var scroll = $(window).scrollTop();
						if ($(window).scrollTop() > 14*$(window).height()/8 && position2 < scroll) 
							$('#T2').css({top:"-=3"}); 
						if ($(window).scrollTop() > 14*$(window).height()/8 && position2 > scroll)  
							$('#T2').css({top:"+=3"});
						if ($(window).scrollTop() < 14*$(window).height()/8 )
							$('#T2').css({top:"50"});
						position2=scroll;
					}
					$(window).scroll(PtiDepB);
					PtiDepB();
				</script>
			</div>
		</div>
					
					<script><!--Apparition du Button Menu 2 ou l'invisibilité du button--><!--COMMENTAIRE-->
						/*function AppMBB() {
							if ($(window).scrollTop() > 2*$(window).height()) 
								$('#MB2').fadeIn("fast"); 
							else 
								$('#MB2').fadeOut("fast"); 
						}
						$(window).scroll(AppMBB);
						AppMBB();*/
					</script>
					<script><!--Apparition des Button de la liste 2 ou l'invisibilité des button-->
						function AppBTNB() {
							$("#MB2").hover(function(){
								$(".DF2").show("slide", { direction: "right" }, 300);
								$("#MB2").fadeOut("fast");
							});
							$(".DF2").mouseleave(function(){
								$(".DF2").hide("slide", { direction: "right" }, 300);
								$("#MB2").fadeIn("slow");
								$("#SA").fadeIn(150);
								$("#SRL").slideUp(150);
								$("#SR").fadeIn(150);
								$("#SAL").slideUp(150);
							});
							if ($(window).scrollTop() < 6*$(window).height()/7 || $(window).scrollTop() > 13*$(window).height()/7) 
								$('.DF2').fadeOut("slow"); 
							//$("body:not(#BTN)").click(function(){$('#BTN').fadeOut("slow");});
						}
						// $(window).scroll(AppBTNB);
						AppBTNB();
					</script>
		
				<script>
					$(".Home").hover(function(){
						$(".Home").stop().animate({backgroundColor:"rgb(0,55,115)"},350);
					});
					$(".Home").mouseleave(function(){
						$(".Home").stop().animate({backgroundColor:"rgb(0,100,200)"},350);
					});
				</script>
		<a id="UF" href="#Anc"><span id="Up" style="background-color:rgb(81,168,255)"><span id="Fleche"></span></span></a>
		<div id=""></div>
		<script><!--Apparition du Button de l'ancrage ou l'invisibilité du button-->
			function AppUp() {
				if ($(window).scrollTop() > $(window).height()/2) 
					$('#Up').fadeIn("slow"); 
				else 
					$('#Up').fadeOut("slow"); 
			}
			$(window).scroll(AppUp);
			AppUp();
		</script>
		<footer>
			<center><p> Copyright &copy; </p></center>
		</footer>
		<script><!--Pour l'ancrage, montez doucement-->
				$(document).ready(function() {
				$('.active').on('click', function() {
					var page = $(this).attr('href');
					$("#MB1").fadeOut(1000);
					$("#MB2").fadeOut(1000);
					$('html, body').animate( { scrollTop: $(page).offset().top }, 750);
					return false;
				});
			});
		</script>
		<script><!--Pour fixer le premier bloc-->
			function fixDiv1() {
				var $cache1 = $('.Contenu2');
				if ($(window).scrollTop() >= $(window).height() && $(window).scrollTop() <= 2*$(window).height()){ 
					$cache1.css({'position': 'fixed', 'top': '0px'}); 
				}
				else if ($(window).scrollTop() < $(window).height() || $(window).scrollTop() > 2*$(window).height()) 
					$cache1.css({'position': 'absolute', 'top': 'auto'}); 
			}
			$(window).scroll(fixDiv1);
			fixDiv1();
		</script>
		<script><!--Pour fixer le deuxieme bloc--><!--A REPARER !!!!!!!!!!!!!!!!!!!!-->
			/*function fixDiv2() {
				var $cache2 = $('.Contenu3');
				if ($(window).scrollTop() > 2*$(window).height() && $(window).scrollTop() <= 4*$(window).height()){ 
					$cache2.css({'position': 'fixed', 'top': '0px'}); 
				}
				else if ($(window).scrollTop() <= 2*$(window).height()) 
					$cache2.css({'position': 'absolute', 'top': 'auto'}); 
			}
			$(window).scroll(fixDiv2);
			fixDiv2();*/
		</script>
		<script><!--Pour l'ancrage, montez doucement-->
			$(document).ready(function() {
				$('#UF').on('click', function() {
					var page = $(this).attr('href');
					$('html, body').animate( { scrollTop: $(page).offset().top }, 750);
					return false;
				});
			});
		</script>
		<script><!--Pour l'ancrage, descendre doucement vers Film-->
			$(document).ready(function() {
				$('#Div').on('click', function() {
					var page = $(this).attr('href');
					//$('.Contenu2').css("display","block");
					$("#MB1").fadeIn(1000);
					$('html, body').animate( { scrollTop: $(page).offset().top }, 750);
					return false;
				});
			});
		</script>
		<script><!--Pour l'ancrage, descendre doucement vers Serie-->
			$(document).ready(function() {
				$('#Etu').on('click', function() {
					var page = $(this).attr('href');
					$("#MB2").fadeIn(1000);
					$('html, body').animate( { scrollTop: $(page).offset().top }, 750);
					return false;
				});
			});
		</script>
		<script><!--Pour empecher les balise a de faire partir à un autre lien, c'est-à-dire empecher d'activer l'événement-->
			$('.DF1 a,.TopF,.TopAnime,.Anime,.TV,.NonClickable').click(function(event){
				event.preventDefault();
			});
		</script>
		<!--<div style="postision:relative;bottom:-200%;">test</div>-->
	</body>
</html>