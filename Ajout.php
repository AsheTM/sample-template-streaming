<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<body >
    
	<form method="POST" action="upload.php" enctype="multipart/form-data">
	<fieldset>
	<legend>Uploder Votre Fichier</legend>
		<center><table border=1 cellspacing=0>
            <tr> 
			<td><label for ="s1" >Type </label></td>
			<td> 
				<select id="s1" onchange="verif();" name="s1" > 
					<option value=1 >Film
					<option value=0>Série
				</select>
			</td>
			</tr>
			<tr> 
			<td><label for ="s2" class=label >Type de votre Film:</label></td>
			<td> 
				<select   id="s2" name="s2" onchange="change(this.value);"> 
					<option value="">---</option>
					<option value=1 >Réel </option>
					<option value=0>Anime</option>
				</select>
			</td>
			</tr>
			<tr> 
			<td><label for ="s3" class=label >Genre de votre Film </label></td>
			<td> 
				<select id="s3" name="s3" > 
				</select>
			</td>
			</tr>	
			<tr> 
			<td><label for ="nom" class=label>Entrer le nom de votre Film</label></td>
			<td> 
				<input type=text id="nom" name="nom" maxlength=20  >
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
				<td> <input type=reset value=Annuler ></td>
		        <td> <input type=submit id=envoyer value=Envoyer onsubmit="verif_nom_film()"></td>    
		        </tr>   		

		</table></center>
		</fieldset>
	</form>
	<script>
		document.getElementById("envoyer").addEventListener("click", function(event){
			var a=document.getElementById("nom");
			var b=document.getElementById("video");
			var c=document.getElementById("cover");
			var d=document.getElementById("s1");
			var e=document.getElementById("s2");
			var f=document.getElementById("s3");
			if(a.value.length<2 || b.value=="" || c.value=="" || f.value=="" || e.value=="" || f.value=="") 
			{	
				alert("Remplissez tous les champs SVP");
			event.preventDefault()
			}
		});
		</script>
</body>
</html>