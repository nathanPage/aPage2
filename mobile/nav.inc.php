<?php
$file= $_SERVER[REQUEST_URI];
	$file= rtrim($file,"/");
	$removecomm= preg_quote("/aPage/");
	$file= preg_replace($removecomm, "", $file);
	$removecomm= preg_quote("/apage/");
	$file= preg_replace($removecomm, "", $file);
	$file= preg_replace("{/}", "", $file,2);
	if ($file=="mobile"){
		$file="mobile/index.php";
	}
	$homeArray= Array("mobile/index.php");
	
	$aboutArray= Array("mobile/about.php");
	
	$contactArray= Array("mobile/contact.php");
	
	$portfolioArray= Array("mobile/portfolio.php");
	
	$left=-300;
	if(in_array($file, $homeArray)){
		$homeIn="onPage";
		$left=-492;
	}
	else if(in_array($file, $aboutArray)){
		$aboutIn="onPage";
		$left=-372;
	}
	else if(in_array($file, $contactArray)){
		$contactIn="onPage";
		$left=-71;
	}
	else if(in_array($file, $portfolioArray)){
		$portfolioIn="onPage";
		$left=-227;
	}
?>
<script src="nav.js"></script>
<noscript>I highly recomend you turn on javascript to get the full experience</noscript>
<div id="wrap">
			<div id="main">
				<div id="nav" style="background-position: <?php echo $left; ?>px 0">
					<div id="navInnerArea">
						<div id="navInner">
							<div id="navLogo"><span id="navLogoImg"></span> ADAM PAGE</div>
							<div id="navRefArea">
								<div><a onclick="ReftoMe(this.id)" id="homeButton" class="firstRef <?php echo $homeIn ;?>">HOME</a></div>
								<div><a onclick="ReftoMe(this.id)" id="aboutButton" class="<?php echo $aboutIn ;?>">ABOUT</a></div>
								<div><a onclick="ReftoMe(this.id)" id="portfolioButton" class="<?php echo $portfolioIn ;?>">PORTFOLIO</a></div>
								<div><a onclick="ReftoMe(this.id)" id="contactButton" class="<?php echo $contactIn ;?>">CONTACT</a></div>
							</div>
						</div>
					</div>
				</div>
				<div id="content">