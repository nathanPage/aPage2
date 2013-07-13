<?php
	$gen=$_REQUEST['ajax'];
	if($gen!=1){
		include 'header.inc.php';
	}

?>

<title>Contact Page</title>
<h1>CONTACT</h1>

<?php

//Clear cookie
//setcookie("emailSent", "", time()-3600);
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }
if (isset($_COOKIE["emailSent"])){
	$seconds = $_COOKIE["emailSent"];
	$diff = abs(time() - $seconds);
	$hours= floor($diff/3600);
	$diff-=  $hours*3600;
	$minutes=floor($diff/60);
	$diff-= $minutes*60;
	$seconds= $diff;
	echo "If I haven't gotten back to you fast enough I apologize. <br> You cat send me another email for ". $hours . " hours " . $minutes . " minutes " . $seconds . " seconds" ;
}
else{
	if (isset($_REQUEST['email'])){//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE){
    echo "Invalid input. Redirecting in 3 seconds <script>setTimeout(function(){ajaxRequest('contact.php?ajax=1','content','contactButton');window.history.pushState('', 'Title hello', 'contact.php');
			document.title = 'Contact Page';},3000)</script>";
    }
  else if(strlen($_REQUEST['message'])>800 || strlen($_REQUEST['name'])>50 || strlen($_REQUEST['email'])>50 || strlen($_REQUEST['company'])>50){
  	echo "Your message or something else is too large. Redirecting in 3 seconds <script>setTimeout(function(){ajaxRequest('contact.php?ajax=1','content','contactButton');window.history.pushState('', 'Title hello', 'contact.php');
			document.title = 'Contact Page';},3000)</script>";
  }
  else{//send email
  	//Allow one message a day
  	$expire=time()+60*60*24;
	setcookie("emailSent", $expire, $expire);
    $email = $_REQUEST['email'] ;
    $subject = "A message from" . $_REQUEST['name'] ;
    $message = "Name: ". $_REQUEST['name'] . "<br>Company: " . $_REQUEST['company'] . "<br>Message:<br>" .  $_REQUEST['message'] . "<br>Email back at:" . $_REQUEST['email'];
    mail("someone@example.com", "Subject: $subject",
    $message, "From: $email" );
    echo "Thank you for using our mail form";
    }
  }
else{//if "email" is not filled out, display the form
  echo '<form>
	<span>NAME:</span><input name="name" id="name"/>
	<br />
	<span>COMPANY:</span><input name="company" id="company"/>
	<br />
	<span>RETURN EMAIL:</span><input name="email" id="returnCompany"/>
	<br />
	<span>MESSAGE:</span><br>
	<textarea name="message" id="message"></textarea>
	<button onclick="sendEmail()">Submit</button>
</form>';
  }	
}
?>
<script>
	var int1=Math.floor(Math.random()*11)+2;
	var int2=Math.floor(Math.random()*11)+2;
	var ans= int1*int2;
	window.onload= function(){
		document.getElementById("spamCheck").innerHTML+= " (" + int1 + "x" + int2 + "=" +"):";
	};
	
	function sendEmail(){
		var name= document.getElementById("name").value;
		
		var company= document.getElementById("name").value;
		
		var email= document.getElementById("name").value;
		
		var message= document.getElementById("name").value;
		
		console.log(name+ "<br>" + company + "<br>"+ email + "<br>" +message);
	}
	
</script>
<?php
	if($gen!=1){
		include 'footer.inc.php';
	}
?>
