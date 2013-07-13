<?php
$file= $_SERVER[SCRIPT_NAME];
	$file= rtrim($file,"/");
	$removecomm= preg_quote("/aPage/");
	$file= preg_replace($removecomm, "", $file);
	$removecomm= preg_quote("/apage/");
	$file= preg_replace($removecomm, "", $file);
	$file= preg_replace("{/}", "", $file,2);
	if ($file==""){
		$file="index.php";
	}
	
	$homeArray= Array("index.php");
	
	$aboutArray= Array("about.php");
	
	$contactArray= Array("contact.php");
	
	$portfolioArray= Array("portfolio.php");
	
	$left=-300;
	if(in_array($file, $homeArray)){
		$homeIn="onPage";
		$left=-336;
	}
	else if(in_array($file, $aboutArray)){
		$aboutIn="onPage";
		$left=-255;
	}
	else if(in_array($file, $contactArray)){
		$contactIn="onPage";
		$left=-51;
	}
	else if(in_array($file, $portfolioArray)){
		$portfolioIn="onPage";
		$left=-157;
	}
?>
<script src="nav.js"></script>
<noscript>I highly recomend you turn on javascript to get the full experience</noscript>
<div id="wrap">
			<div id="main">
				<div id="nav">
					<div class="navCenterer"></div>
					<div id="navInnerArea">
						<div id="navInner">
							<div id="navLogo"><span id="navLogoImg"></span> ADAM PAGE</div>
							<div id="navRefArea">
								<div><a onclick="ReftoMe(this.id)" id="homeButton" class="firstRef <?php echo $homeIn ;?>">HOME</a></div>
								<div><a onclick="ReftoMe(this.id)" id="aboutButton" class="<?php echo $aboutIn ;?>">ABOUT</a></div>
								<div><a onclick="ReftoMe(this.id)" id="portfolioButton" style="width:71px" class="<?php echo $portfolioIn ;?>">PORTFOLIO</a></div>
								<div><a onclick="ReftoMe(this.id)" id="contactButton" style="width:59px" class="<?php echo $contactIn ;?>">CONTACT</a></div>
							</div>
						</div>
						<div id="navUnder" style="background-position:  <?php echo($left); ?>px 0px;"></div>
					</div>
					<div class="navCenterer"></div>
				</div>
				<div id="content">