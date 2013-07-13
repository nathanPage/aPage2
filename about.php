<?php
	$gen=$_REQUEST['ajax'];
	if($gen!=1){
		include 'header.inc.php';
	}

?>
<title>About Page</title>
<h1>ABOUT ME</h1>
<div id="aboutImg"></div>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere turpis sit amet libero rhoncus, 
	in dignissim ante tristique. Vestibulum eu laoreet sapien. Sed fringilla lacus augue, quis placerat 
	lectus commodo sit amet. Etiam ipsum lacus, blandit sed sem at, fringilla sagittis erat. Donec lorem 
	dolor, posuere eu lorem pellentesque, ultrices porta tortor. Aenean vitae lacus metus. Donec luctus 
	nulla arcu, id laoreet odio imperdiet vel. Integer id velit sodales justo hendrerit iaculis sed in nunc. 
	Fusce elit orci, interdum vel scelerisque quis, ultricies sed nunc. Aliquam fringilla, ligula nec 
	lacinia malesuada, quam odio ullamcorper orci, vitae faucibus sapien magna et dolor. Ut condimentum
	tempus velit id auctor. Vestibulum gravida nisi varius, tempor nulla in, lobortis eros. Pellentesque 
	vulputate turpis accumsan, pellentesque magna et, blandit neque. Donec tincidunt eu lacus at semper. 
	Nam eleifend magna et augue dictum, nec dignissim velit egestas.
	<ul class="basicList">
		<li>Hello</li>
		<li>Hello</li>
		<li>Hello</li>
	</ul>
</p>
<h3>Sub-title</h3>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere turpis sit amet libero rhoncus, 
	in dignissim ante tristique. Vestibulum eu laoreet sapien. Sed fringilla lacus augue, quis placerat 
	lectus commodo sit amet. Etiam ipsum lacus, blandit sed sem at, fringilla sagittis erat. Donec lorem 
	dolor, posuere eu lorem pellentesque, ultrices porta tortor. Aenean vitae lacus metus. Donec luctus 
	nulla arcu, id laoreet odio imperdiet vel. Integer id velit sodales justo hendrerit iaculis sed in nunc. 
	Fusce elit orci, interdum vel scelerisque quis, ultricies sed nunc.
</p>
<?php
	if($gen!=1){
		include 'footer.inc.php';
	}
?>
