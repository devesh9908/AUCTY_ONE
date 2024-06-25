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
<?php require("include/header.php"); ?>
<!--contact start here-->
<div class="contact">
	<div class="contact-main">
	   <div class="container">
			<div class="contact-top">
				<h3>CONTACT US</h3>
				<p> if you want any support so you can contact with fill following form.. </p>
		<div id="msg"> </div>
			</div>
			<div class="contact-bottom">
	<form id="contact">
				<div class="col-md-7 contact-left">
					<p>Name</p>
		             <input type="text" value="" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required />
		            <p>E-mail</p> 
		             <input type="email" value="" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required />
		            <p>Subject</p>
		             <input type="text" value="" name="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required />
		            <p>Mobile</p>
		             <input type="number" value="" name="mobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required />
				</div>
				<div class="col-md-5 contact-right">
					<p>Messages</p>
					  <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required /></textarea>
		             <input type="submit" value="Send">
				 </div>
				 <div class="clearfix"> </div>
				</div>
	</form>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
	<div class="container">
		<div class="col-md-7 map-left">
			<h3>CONTACT INFO</h3>
				      <P>Specific levels of change in contact resistance are proposed as failure criteria for both power and signal applications. The results presented in this analysis are based on threshold behavior for contact stability.</P>
				     <div class="address">
					      <h4>ADDRESS</h4>
					      <p>Address : Bail Bazar, Kalyan East Thane.</p>
						  <p>New Street : Near cotton market yard. </p>
						  <p>ph : +91 9226926292</p>
					 </div>
		</div>


		<div class="col-md-5 map-right">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.97854350436!2d73.1222578464085!3d19.235406306276097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be795d05c18d693%3A0x4a5b50853db0a97!2sBail+Bazar%2C+Bhoiwada%2C+Kalyan%2C+Maharashtra+421301!5e0!3m2!1sen!2sin!4v1526128384193"> </iframe>
	   </div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    $("#contact").on('submit',(function(e) {
            
        e.preventDefault();
        $.ajax({
            url: "admin/php/contact.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {

             
            
             $("#msg").html(data);	

             
              

	          
            }           
       });
    }));




  });
</script>
<!--map end here-->

<?php require("include/footer.php"); ?>
</body>
</html>