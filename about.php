<?php 
 require_once("include/session_data.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php require("include/title.php"); ?></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
</head>
<body>
<!-- //end-smoth-scrolling -->
<!--header start here-->
<?php require("include/header.php"); ?>
<!--header end here-->
<!--start-about-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="about-top">
					<h3>A Few Words About Us</h3>
					<p>An online auction is an auction that takes place via the internet, allowing users to sell or bid for products and services online. Online auctions allow sellers to reach larger audiences, in different locations and geographical areas.</p>
				</div>
				<div class="about-text">
					<div class="col-md-4 about-text-left">
						<a href="single.html"><img src="images/ultra.jpeg" alt=""></a>
						<a href="single.html"><h5>Lorem ipsum dolor</h5></a>
						<p>Painting is a visual art, which is characterized by the practice of applying paint, pigment, color or other medium to a solid surface</p>
					</div>
					<div class="col-md-4 about-text-left">
						<a href="single.html"><img src="images/a2.jpeg" alt=""></a>
						<a href="single.html"><h5>Our Capabilities</h5></a>
						<p>Painting is a visual art, which is characterized by the practice of applying paint, pigment, color or other medium to a solid surface</p>
					</div>
					<!-- <div class="col-md-4 about-text-left">
						<a href="single.html"><img src="images/a1.jpeg" alt=""></a>
						<a href="single.html"><h5>Our Standards</h5></a>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et dignissim augue, et sagittis turpis. Vestibulum congue turpis ac tincidunt accumsan.</p>
					</div> -->
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--end-about-->

<!--footer start here-->
<?php require("include/footer.php"); ?>
<!--footer end here-->
</body>
</html>