<html>
    <meta charset="utf-8">
    <head>
        <title>Contact us</title>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="chrome=1"><![endif]--> <!--specifies that Google Chrome frame should start if the user has it installed-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no"/> <!--Makes sure that phonenumbers don't get flagged as links-->
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" /> 
	<link rel="dns-prefetch" href="http://fonts.googleapis.com/"> <!--The user's visible area of a web page.-->
	<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	<link rel="dns-prefetch" href="http://ajax.googleapis.com/">
	<link rel="dns-prefetch" href="http://html5shim.googlecode.com/">
	<link rel="dns-prefetch" href="http://google-analytics.com/">
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="styles/blog_style.css">
	<link rel="stylesheet"type="text/css"href="Contact_CSS.css">
</head>

<body>
<!--[if IE]>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
    <style>.chromeFrameInstallDefaultStyle { width: 100%; border: 5px solid #ffa700; }</style><div id="prompt"></div>
    <script>window.attachEvent("onload", function() {CFInstall.check({mode: "overlay", node: "prompt"});});</script>
<![endif]-->

		<!---------------MENU BEGIN----------------->
<a class="scroll-point" id="home"></a>

<div id="top"> <!--Displays the top menu and allows the user to click on a link and be taken to that section-->
	<nav>
		<ul id="menu">
			<li><a href="#home">Home</a></li>
            <li><a href="#about">About us</a></li>
			<li><a href="#freebies">Blog</a></li>
			<li><a href="#contact">Contact us</a></li>
			<li><a href="#payment">Buy tickets</a></li>
		</ul>
	</nav>
</div>


<section id="breadCrumbsSection"> <!--Displays which section you are on, on the website. Eg: Home ► Contact ► Contact us -->
	<div id="breadCrumbs">
			<a href="nyflad.php"> Home </a> <!--Allows users to click the link and be taken to that section on the website-->
			&nbsp &#x25BA &nbsp
			<a href="nyflad.php">Contact</a>
			&nbsp &#x25BA &nbsp
			<a href="Contact_WorldKitchen.php"> Contact us </a>
	</div>
</section>
		<!---------------MENU END----------------->
   
<section>
	 
		<!---------------COMPANY INFORMATION BEGIN----------------->    
	<div class="contactTitle">Worldkitchen</div> <!--Displays the information of the company-->
	<div class="ContactInfo">     
	Worldkitchen's service <span class="Whitespace"></span> +45 91 94 16 13 <br><br>
	Folkekirkens hus, gammel torv 4
	
	<span class="Whitespace2"></span> <img src="envelope_image.jpg" alt="EnvelopePicture" style="width:20px;height:30px;
	margin-top: -5px; position:absolute"> <span class="Whitespace3"></span>verdenskoekkenet@gmail.com<br><br>
    Denmark, Aalborg 9000
    </div>
		<!---------------COMPANY INFORMATION END----------------->
		
		<!---------------USERINPUT BEGIN----------------->

  <form action="emailform_worldkitchen.php" method="POST"> <!--Allows users to input name, mail, phonenumber, and a message and submit it-->
    <div class="InformationFields">    
		<input type="text" id="nameField" style="border:1px solid grey" name="name" placeholder= "Your Name:" required="required"> <br><br>
        <input type="text" id="mailField" style="border:1px solid grey" name="mail" placeholder= "Your Mail:" required="required"> <br><br>
        <input type="text" id="phonenumberField" style="border:1px solid grey" name="phonenumber" placeholder= "Your Phonenumber:" required="required"> <br><br>
		<input type="text" id="messageField" style="border:1px solid grey" name="message" placeholder="Your Message:" required="required" maxlength="10">
	</div>    

<div class="checkboxesMail"> <!--Allows user choose to whome the email should be sent to-->
  <input type="checkbox" name="checkWorldKitchen" value="Kitchen"> To the Worldkitchen's service
  <br><br>
  <input type="checkbox" name="checkJournalist" value="Journalist"> To the journalist
  <br><br>
  <input type="checkbox" name="checkCEO" value="CEO"> To the CEO<br>
</div>
	<div>
        <input type="submit" id="submitField" value="Submit"> 
    </div>
	</form>
</section> 
		<!---------------USERINPUT END----------------->
<section>
<div class="FAQ">FAQ</div> <!--Displays the Frequently asked questions-->
<div class="FAQList">
<ul type="disc">
	<li><u>Where do I pay for the next event?</u></li>
	At the menubar there is a text called "Buy ticket" By clicking it you will be taken to a new site where
	you have the opportunity to buy your ticket.
	<br><br>
	<li><u>How can I contact you?</u></li>
	If you want to contact us or have a question you want answered, you can just click the button
	with the text "Click here" down below.
	<br><br>
	<li><u>Can I write my experience from previous events?</u></li>
	Just down below the About section there is a section where you can see other people have shared their
	experience. Below that there is a "click more" button where you will be sent over to a new site, where
	you can write your experience
	<br><br>
	<li><u>How can I...?</u></li>
	If you want to contact us or have a question you want answered, you can just click on the button
	with the text "Click here" down below.	
	<br><br>
	<li><u>How can I...?</u></li>
	If you want to contact us or have a question you want answered, you can just click on the button
	with the text "Click here" down below.   
</ul>
</div>
</section>
		<!---------------FOOTER BEGIN-------------------->
	
	<div class="Footer1"> <!--Displays the footer of the website-->
    <section>
	<div class="menuFooter">Menu</div>
	<div class="contactFooter">Contact</div>
    <div class="footerBoxes">
        <ul type="square">
			<a href="BreadcrumbsHome.php"><li>Home</li> </a> <br> <!--Allows the users to click an anchor element and they will be taken to that section-->
			<a href="BreadcrumbsBlog.php"><li>Blog</li> </a> <br>
			<a href="BreadcrumbsAbout.php"><li>About</li> </a> <br>
			<a href="BreadcrumbsContact.php"><li>Contact</li> </a> <br>
			<a href="BreadcrumbsTicket.php"><li>Buy ticket</li> </a>
         </ul>
    </div>


	<div class=footerContactInfo>
      Name (Worldkitchen) <br><br>
      Address (Gammeltorv) <br><br>
      Region (Aalborg) <br><br>
      Country (Denmark) <br><br><br>
      verdenskoekkenet@gmail.com <br><br>
      +45 69696969
	</div>   

	<div class="footerImages">
	<img src="Twitter_logo.png" width="45px" height="45px">
	<img src="Facebook_logo.png" width="45px" height="45px">
	<img src="Instagram_logo.png" width="45px" height="45px">
	</div> 
</div>

   <div class="Footer2"> <!--displayed at the bottom of the page. For copyright claims-->
    Copyright © 2017 Worldkitchen. All rights reserved.
   </div>
   </section>
		<!---------------FOOTER END----------------->


</body>
</html>