var home="-336.5px";
var about="-255px";
var portfolio="-157px";
var contact="-51px";
function ReftoMe(id){
	document.getElementById("content").style.opacity="0";
	document.getElementById("homeButton").setAttribute("class","firstRef");
	document.getElementById("aboutButton").setAttribute("class","");
	document.getElementById("contactButton").setAttribute("class","");
	document.getElementById("portfolioButton").setAttribute("class","");
		
		if(id=="homeButton"){
			ajaxRequest("index.php?ajax=1","content",id);
			window.history.pushState("", "Title hello", "index.php");
			document.title = "Home Page";
		}
		else if(id=="aboutButton"){
			ajaxRequest("about.php?ajax=1","content",id);
			window.history.pushState("", "Title hello", "about.php");
			document.title = "About Page";
		}
		else if(id=="contactButton"){
			ajaxRequest("contact.php?ajax=1","content",id);
			window.history.pushState("", "Title hello", "contact.php");
			document.title = "Contact Page";
		}
		else if(id=="portfolioButton"){
			ajaxRequest("portfolio.php?ajax=1","content",id);
			window.history.pushState("", "Title hello", "portfolio.php");
			document.title = "Portfolio Page";
		}
	}
function ajaxRequest(url,element,id){
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
	   			document.getElementById("content").style.opacity="1";
		   		if(id=="homeButton"){
					document.getElementById("navUnder").style.backgroundPosition= home+" 0";
					document.getElementById("homeButton").setAttribute("class","firstRef onPage");
				}
				else if(id=="aboutButton"){
					document.getElementById("navUnder").style.backgroundPosition= about+" 0";
					document.getElementById("aboutButton").setAttribute("class","onPage");
				}
				else if(id=="contactButton"){
					document.getElementById("navUnder").style.backgroundPosition=contact+" 0";
					document.getElementById("contactButton").setAttribute("class","onPage");
				}
				else if(id=="portfolioButton"){
					document.getElementById("navUnder").style.backgroundPosition= portfolio+" 0";
					document.getElementById("portfolioButton").setAttribute("class","onPage");
				}
				sendToTop();
   			},500)
   			
    	}
 	}
  	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
function sendToTop(){		
	var offset=window.pageYOffset/25;
	var i=25;
	var timeout=setInterval(function(){
		if(i>=0){
			window.scrollTo(0,offset*i);
			i--;
		}
		else{
			clearInterval(timeout);
		}		
	},5);
}
function isMobile() {
	var index = navigator.appVersion.indexOf("Mobile");
	if(index > -1){
		window.location.href="mobile/index.php"
	}
	else{
		
	}
}
isMobile();

function closeModal(name){
		document.getElementById("modalDark").style.opacity="0";
		setTimeout(function(){
			document.getElementById("modalDark").style.display="none";
		},500);
	}
	function openModal(name){
		var loc= "portfolio/"+name +".php";
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
/* some basic rotate function that didn't work out
window.onload=function(){
	homeRot= new Image();
	homeRot.src="images/base/rotation/navLogo0.png"
	aboutRot= new Image();
	aboutRot.src="images/base/rotation/navLogo45.png"
	contactRot= new Image();
	contactRot.src="images/base/rotation/navLogo90.png"
	portfolioRot= new Image();
	portfolioRot.src="images/base/rotation/navLogo135.png"
}
setTimeout(function(){
	document.getElementById("navLogoImg").style.webkitTransition="all 0s linear";
	document.getElementById("navLogoImg").style.backgroundImage="url(" + aboutRot.src + ")";
	document.getElementById("navLogoImg").style.webkitTransform="rotate(0deg)";
	setTimeout(function(){document.getElementById("navLogoImg").style.webkitTransition="all 1s linear";},20);
},1000);
 */