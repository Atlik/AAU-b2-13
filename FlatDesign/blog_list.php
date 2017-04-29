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
<!--[if IE]>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
    <style>.chromeFrameInstallDefaultStyle { width: 100%; border: 5px solid #ffa700; }</style><div id="prompt"></div>
    <script>window.attachEvent("onload", function() {CFInstall.check({mode: "overlay", node: "prompt"});});</script>
<![endif]-->


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

<section>
	<div id="breadcrumb">
		<ul>
			<li> <a href="nyflad.php"> Home </a> </li>
			<li> <span>&#8250;</span> </li>
			<li><a href="blog_list.php">Blog list </a> </li>
		</ul>
	</div>
</section>


<section>
<!-- Denne section skulle gerne kunne genere disse nyheder som de bliver skrevet ind -->

<div id="blog_news_spot">
	<article class="spot">
<?php  
require_once 'DB/db_connect.php';
$row = mysqli_fetch_assoc($results);
?> 
		<div class="blog_picture" style="background-image: url(img/Full_image_placeholder.jpg) /*<?php echo $row['PICTURE']; ?> datatypen virker ikke endnu...*/ no-repeat 0px 0px;">
		</div>
		<div class="blog_text"> 
			<a href="show_blog_info.php"> <?php echo $row['TITLE']; ?> </a>
		</div>
	</article>
	<?php mysqli_close($connection); ?>
</div>

<!--	<div id="blog_news_spot">
		<article class="spot">
			<div class="blog_picture" style="background: url(img/Full_image_placeholder.jpg) no-repeat 0px 0px;">
			</div>
			<div class="blog_text">
					<a href="show_blog_info.php"> Read more <!-- Link til php der generere den bestemte nyhed   </a>
			</div>
		</article>

		<article class="spot">
				<div class="blog_picture" style="background: url(img/Full_image_placeholder.jpg) no-repeat 0px 0px;">
				</div>
			<div class="blog_text">
				<a href="show_blog_info.php"> Read more <!-- Link til php der generere den bestemte nyhed   </a>
			</div>
		</article>
	</div>	-->
</section>

</body>

</html>