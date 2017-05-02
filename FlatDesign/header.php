<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="chrome=1"><![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
	<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
	<link rel="dns-prefetch" href="http://ajax.googleapis.com/">
	<link rel="dns-prefetch" href="http://html5shim.googlecode.com/">
	<link rel="dns-prefetch" href="http://google-analytics.com/">
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,400italic">
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" type="text/css" href="nystyles.css">
	<link rel="stylesheet" type="text/css" href="styles/font-awesome.css">
	<!--<link rel="stylesheet" type="text/css" href="styles/home_style.css">-->
</head>

<body>

<!--[if IE]>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
    <style>.chromeFrameInstallDefaultStyle { width: 100%; border: 5px solid #ffa700; }</style><div id="prompt"></div>
    <script>window.attachEvent("onload", function() {CFInstall.check({mode: "overlay", node: "prompt"});});</script>
<![endif]-->


<a class="scroll-point" id="home"></a>

<!-- Makes the menu bar with a following feature, so that the menu will follow the user when scrolling on the page.
The value given to the options allows an automatic scrolling feature whereas the user will get to the desired secion indicated by anchor points throughout the code -->

<div id="top">
	<nav>
		<ul id="menu">
			<li><a href="#home">Home</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a id="buy" href="#payment">Buy tickets</a></li>			
		</ul>
		<form class="menu-dropdown hidden">
			<select onchange="location = this.option[this.selectedIndex].value;">
				<option value="#home">Home</option>
                <option value="#blog">Blog</option>
            	<option value="#about">About</option>
            	<option value="#contact">Contact</option>
            	<option value="#payment" id="buy">Buy tickets</option>
			</select>			
		</form>
		<a href="#menu-footer" class="menu-btn"></a>
			<div class="wrapper">
				<div class="parent">
        			<div class="child">
        				<div><p>hej</p>
        			</div>
        		</div>
    		</div>

	</nav>
</div>
</div>