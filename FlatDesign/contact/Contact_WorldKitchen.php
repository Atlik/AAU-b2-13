<html>
    <meta charset="utf-8">
<link rel="stylesheet"type="text/css"href="Contact_CSS.css">
	   <!---------------BACKGROUND----------------->
	
	   <!---------------BACKGROUND----------------->
    <head>
        <title>Contact us</title>

	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="chrome=1"><![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
	<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
	<link rel="dns-prefetch" href="http://ajax.googleapis.com/">
	<link rel="dns-prefetch" href="http://html5shim.googlecode.com/">
	<link rel="dns-prefetch" href="http://google-analytics.com/">
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72-ipad.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114-retina.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144-retina.png">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,400italic">
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="styles/blog_style.css">

</head>

<body>
<!--<div class="backgroundImage">-->
<!--[if IE]>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
    <style>.chromeFrameInstallDefaultStyle { width: 100%; border: 5px solid #ffa700; }</style><div id="prompt"></div>
    <script>window.attachEvent("onload", function() {CFInstall.check({mode: "overlay", node: "prompt"});});</script>
<![endif]-->

		<!---------------MENU----------------->
<a class="scroll-point" id="home"></a>

<div id="top">
	<nav>
		<ul id="menu">
			<li><a href="#home">Home</a></li>
            <li><a href="#about">About us</a></li>
			<li><a href="#freebies">Blog</a></li>
			<li><a href="#contact">Contact us</a></li>
			<li><a href="#payment">Get tickets</a></li>
		</ul>
	
	<form class="menu-dropdown hidden">
			<select onchange="location = this.options[this.selectedIndex].value;">
				<option value="#home">Home</option>
                <option value="#about">About us</option>
            	<option value="#freebies">Blog</option>
            	<option value="#contact">Contact us</option>
            	<option value="payment">Get tickets</option>
			</select>
		</form>
		<a href="#menu-footer" class="menu-btn"></a>
	</nav>
</div>

<section id="breadCrumbsSection">
	<div id="breadCrumbs">
			<a href="nyflad.php"> Home </a>
			&nbsp &#x25BA &nbsp
			<a href="nyflad.php">Contact</a>
			&nbsp &#x25BA &nbsp
			<a href="Contact_WorldKitchen.php"> Contact us </a>
	</div>
</section>
		<!---------------MENU----------------->
   
   <section>
    <h1>Contact us</h1>
	 
		<!---------------COMPANY INFORMATION----------------->    
	<div class="contactTitle">Worldkitchen</div>
	<div class="ContactInfo">     
	Catarina Figuerdo Bettencourt   <br>+45 12 34 56 78<br>
	3th Floor, Aalborg University  <br>CatarinaBettencourt@gmail.com<br>
    Denmark, Aalborg 9000
    </div>
		<!---------------COMPANY INFORMATION----------------->
		
		<!---------------USERINPUT----------------->

  <form action="Contact_WorldKitchen.php" method="POST"> 
    <div class="InformationFields">    
		<input type="text" id="nameField" style="border:1px solid #ff0000" name="name" placeholder= "Your Name:" required="required"> <br><br>
        <input type="text" id="topicField" name="topic" placeholder= "Your Topic:" required="required"> <br><br>
        <input type="text" id="mailField" name="mail" placeholder= "Your Mail:" required="required"> <br><br>
        <input type="text" id="phonenumberField" name="phonenumber" placeholder= "Your Phonenumber:" required="required"> <br><br>
        <input type="text" id="messageField" name="message" placeholder="Your Message:" required="required" maxlength="10"> 
    </div>    

	<div>
        <input type="submit" id="submitField" value="Submit"> 
    </div>
	</section> 
</form>
		<!---------------USERINPUT----------------->

		<!---------------FOOTER-------------------->
	<div class="Footer1">
    <div class="menuFooter">Menu</div>
	<div class="contactFooter">Contact</div>
    <div class="footerBoxes">
        <ul type="square">
			<a href="BreadcrumbsHome.php"><li>Home</li> </a>
			<a href="BreadcrumbsBlog.php"><li>Blog</li> </a>
			<a href="BreadcrumbsAbout.php"><li>About</li> </a>
			<a href="BreadcrumbsContact.php"><li>Contact</li> </a>
			<a href="BreadcrumbsTicket.php"><li>Buy ticket</li> </a>
         </ul>
    </div>
      
    <div class=footerContactInfo>
      Name (Catarina) <br>
      Address (Gammeltorv) <br>
      Region (Aalborg) <br>
      Country (Denmark) <br>
      Email@email.com <br>
      +45 69696969
    </div>
   </div>

 
   <div class="Footer2">
    Copyright © 2017 Worldconflict. All rights reserved.
   </div>
		<!---------------FOOTER----------------->
<!--</div>-->

<?php
$name_Field= $_POST['name'];
$topic_Field= $_POST['topic'];
$mail_Field= $_POST['mail'];
$phone_Field= $_POST['phonenumber'];
$message_Field= $_POST['message'];

$fh = fopen("WorldKitchen Mail list.txt","w") or die("The file could not be created");
	fwrite($fh, $name_Field) or die ("Could not write to file. Check if all textfields have been filled out");
	fwrite($fh, $topic_Field) or die ("Could not write to file. Check if all textfields have been filled out");
	fwrite($fh, $mail_Field) or die ("Could not write to file. Check if all textfields have been filled out");
	fwrite($fh, $phone_Field) or die ("Could not write to file. Check if all textfields have been filled out");
	fwrite($fh, $message_Field) or die ("Could not write to file. Check if all textfields have been filled out");
fclose($fh);
?>
</body>
</html>