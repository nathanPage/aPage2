function closeModal(name){
		document.getElementById("modalDark").style.opacity="0";
		setTimeout(function(){
			document.getElementById("modalDark").style.display="none";
		},500);
	}
	function openModal(name){
		var loc= "portfolio/"+name +".html";
		document.getElementById("modalDark").style.display="block";
		ajaxModalRequest(loc,"modalContent");
	}
	
	function ajaxModalRequest(url,element){
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
 		xmlhttp=new XMLHttpRequest();
  	}
	else{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function(){
  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
   			setTimeout(function(){
   				document.getElementById(element).innerHTML=xmlhttp.responseText;
   				document.getElementById("modalDark").style.opacity="1";
   			},500)
   			
    	}
 	}
  	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}