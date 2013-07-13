<?php
	$gen=$_REQUEST['ajax'];
	if($gen!=1){
		include 'header.inc.php';
	}

?>
<script>
</script>
<title>Portfolio Page</title>
<h1>PORTFOLIO</h1>
<div id="portfolio" class="clearfix">
	<div class="portFolioArea">
		<img src="images/placeHolder/indexPlaceHolder.png" />
		<h6>Title</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus nulla. 
			Morbi molestie, mi sed faucibus iaculis, leo risus malesuada diam nullam.
		</p>
		<div class="portfolioButton" onclick="openModal('iosDevelopment')">Read More</div>
	</div>
	<div class="portFolioArea">
		<img src="images/placeHolder/indexPlaceHolder.png" />
		<h6>Title</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus nulla. 
			Morbi molestie, mi sed faucibus iaculis, leo risus malesuada diam nullam.
		</p>
		<div class="portfolioButton">Read More</div>
	</div>
	<div class="portFolioArea">
		<img src="images/placeHolder/indexPlaceHolder.png" />
		<h6>Title</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus nulla. 
			Morbi molestie, mi sed faucibus iaculis, leo risus malesuada diam nullam.
		</p>
		<div class="portfolioButton">Read More</div>
	</div>
	<div class="portFolioArea">
		<img src="images/placeHolder/indexPlaceHolder.png" />
		<h6>Title</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus nulla. 
			Morbi molestie, mi sed faucibus iaculis, leo risus malesuada diam nullam.
		</p>
		<div class="portfolioButton">Read More</div>
	</div>
	<div class="portFolioArea">
		<img src="images/placeHolder/indexPlaceHolder.png" />
		<h6>Title</h6>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus nulla. 
			Morbi molestie, mi sed faucibus iaculis, leo risus malesuada diam nullam.
		</p>
		<div class="portfolioButton">Read More</div>
	</div>
</div>

<div id="modalDark">
	<div id="modalArea">
		<div id="modalClose" onclick="closeModal()"></div>
		<div id="modalContainer">
			<div id="modalContent">
			</div>
		</div>
	</div>
</div>
<?php
	if($gen!=1){
		include 'footer.inc.php';
	}
?>

