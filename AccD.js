function changeSource(idbout) {
	var video = document.getElementById('myvideo');
	var bouton = document.getElementById(idbout);
	var source=bouton.innerText +".mp4";
	video.src = source;
	video.load();
}
function chnge(i){
	var variable=document.getElementById("df1");
	var evt = variable.getElementsByTagName("ul");
	var elmt = document.getElementById(i);
		if(elmt.className !== "sup") {
			elmt.className = "sup";
			evt[i-1].className="d1";
		}	
		else {
			elmt.className = "inf";
			evt[i-1].className="d2";
			for(j=1;j<5;j++){
				if(j!=i) 
				{
					var elt = document.getElementById(j);
					elt.className="sup";
					evt[j-1].className="d1";
				}
			}
		}
	
}

		