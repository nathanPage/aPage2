<?php
	$gen=$_REQUEST['ajax'];
	if($gen!=1){
		include 'header.inc.php';
	}

?>
<title>Home Page</title>
<h1>HELLO AND WELCOME TO MY PORTFOLIO WEBSITE</h1>
<div id="indexImg"></div>
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
</p>
<h4>My Capabilities</h4>
<div id="capabilityArea">
	<div class="capabilityType firstType">
		<div class="capabilityHead">IOS Development</div>
		<span>Insert some stuff</span>
	</div>
	<div class="capabilityType">
		<div class="capabilityHead">Program Languages</div>
		<span>obj c</span>
		<span>c</span>
		<span>c++</span>
		<span>java</span>
		<span>python</span>
		<span>assembly</span>
		<span>javascript</span>
		<span>verilog</span>
		<span>VDHL</span>
		<span>natlogo</span>
	</div>
	<div class="capabilityType">
		<div class="capabilityHead">IDE's</div>
		<span>Xcode</span>
		<span>Qt</span>
		<span>eclipse</span>
		<span>xilinx</span>
		<span>matlab</span>
		<span>mathematica</span>
		<span>sas</span>
		<span>cadence</span>
	</div>
	<div class="capabilityType lastType">
		<div class="capabilityHead">Hardware</div>
		<span>verilog</span>
		<span>vhdl</span>
	</div>
</div>
<?php
	if($gen!=1){
		include 'footer.inc.php';
	}
?>
