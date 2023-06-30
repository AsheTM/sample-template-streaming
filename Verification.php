<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		function verif(){
			var select = document.getElementById("s1");
			var choice = select.selectedIndex;
			var valeur_cherchee = select.options[choice].value;	
			var elt=document.getElementsByClassName("label");
			var echange=null;
			if(valeur_cherchee==0){
				for(i=0;i<elt.length;i++){
					echange=elt[i].innerHTML.substring(0,elt[i].innerHTML.lastIndexOf("F"))+" Série";
					elt[i].innerHTML=echange;
				}
			}
			else {
				for(i=0;i<elt.length;i++){
					echange=elt[i].innerHTML.substring(0,elt[i].innerHTML.lastIndexOf("S"))+" Film";
					elt[i].innerHTML=echange;
				}
		}
		}
		function change(str) {
		  if (str==" ") {
			document.getElementById("s3").innerHTML="<option> ";
			return;
		  } 
		  if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			  document.getElementById("s3").innerHTML=this.responseText;
			}
		  }
		  xmlhttp.open("GET","synchronisationSelect.php?select="+str,true);
		  xmlhttp.send();
		}

	</script>
</head>
<body style='background-image:URL("Wallpaper/b.jpg");background-attachemnt:fixed;background-size:100% 100%;'>
	
  <h1 style="background-color:#d6d6d2;">&nbsp;&nbsp;&nbsp;Uploader Un Fichier<a href="AccD.php" style="float:right;text-decoration:none;">Accueil&nbsp;&nbsp;</a></h1>
	<section id=sections>
	<form id=myForm action="upload.php" method="POST" enctype="multipart/form-data">
		<fieldset>
		<legend>Uploder Un Fichier</legend>
		<center><table >
            <tr> 
			<td><label for ="s1" >Type </label></td>
			<td> 
				<select id="s1" onchange="verif();" name="s1" class="select"> 
					<option value=1 >Film
					<option value=0>Série
				</select>
			</td>
			</tr>
			<tr> 
			<td><label for ="s2" class=label >Type de votre Film:</label></td>
			<td> 
				<select   id="s2" name="s2" onchange="change(this.value);"class="select"> 
					<option value="" selected>---</option>
					<option value=1 >Réel</option>
					<option value=0>Anime</option>
				</select>
			</td>
			</tr>
			<tr> 
			<td><label for ="s3" class=label >Genre de votre Film </label></td>
			<td> 
				<select id="s3" name="s3"class="select" > 
				</select>
			</td>
			</tr>	
			<tr> 
			<td><label for ="nom" class=label>Entrer le nom de votre Film</label></td>
			<td> 
				<input type=text id="nom" name="nom" maxlength=20 class="select" >
			</td>
			</tr>
			<tr>
			<td><label for ="video" class=label>Télécharger votre Film</label></td>			
			<td> 
				<input type="file" name=video id=video>
			</td>
			</tr>
			<tr>
			<td><label for ="cover" class=label>Télécharger le cover de votre Film</label></td>			
			<td> 
				<input type="file" name=cover id=cover value="test.png">
			</td>
			</tr>
				<tr>
				<td> <input type=reset value=Annuler></td>
		        <td> <input type=submit id=envoyer value=Envoyer onclick="Verification()"></td>    
		        </tr>   
				

		</table></center></fieldset>
	</form></section>
	<script>
		document.getElementById("envoyer").addEventListener("click", function(event){
			var a=document.getElementById("nom");
			var b=document.getElementById("video");
			var c=document.getElementById("cover");
			var d=document.getElementById("s1");
			var e=document.getElementById("s2");
			var f=document.getElementById("s3");
			if(a.value.length<2 || b.value=="" || c.value=="" || d.value=="" || e.value=="" || f.value=="") 
			{	
				alert("Remplissez tous les champs SVP");
				event.preventDefault();
			}
			else{
				
			}
		});
				$("#myForm").submit(function(event){
					$.ajax({
						url:"upload.php",
						method:"post",
						data:new FormData(this),
						contentType:false,
						processData:false
					}).done(function(data){
						alert(data);
						window.location.reload();
					});
					event.preventDefault();
				});
		</script>
		 <h1 style="background-color:#d6d6d2;"><center>Boite de reception</center></h1>
		
</body>
<style>
.select{
	width:200px;
	font-size:16px;
	font-family:arial black;
	text-align:center;
}
#sections
{
	font-family:arial black;
	border-radius:25px;
	padding:10px;
	width:60%;
	margin:auto;
	display: block;
	position: relative;
	background: -webkit-linear-gradient(bottom, rgba(165,163,163,0.3), rgba(192,190,190,0.5));
	border-radius: 10px 10px 10px 10px;
	border-width: 10px;
}
#video,#cover{
	font-size:16px;
	font-family:arial black;
}
</style>
</html>