<?php 
require_once("include/session_data.php");

require_once("admin/php/config.php"); 
$db = new dbObj();
$conn =  $db->getConnstring();

?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php require("include/title.php"); ?></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<script src="js/jquery-1.11.0.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
<?php require('include/header.php'); ?>
<!--header end here-->
<!--banner strip start here-->





<!--banner strip end here--> 
<!--services start here-->
<div class="services">
	<div class="container">
		<div class="services-main">
			<div class="services-top">
				<h3>Product List for Auction Click and Start</h3>
				<p>Great design is about more than style,it,s about being yoursel</p>
			</div>
			<div class="services-bottom">
				<div class="row">
					  

<?php
if(isset($_GET['search'])){
 $res=mysqli_query($conn,"select * from product where product_name like '%".$_GET['search']."%'"); 
}else{
 $res=mysqli_query($conn,"select * from product"); 
}

while($rows=mysqli_fetch_assoc($res)){
?>
				<div class="col-sm-6 col-md-4 ser">
					<div class="blog-grids">
					
					<div class="blog-detail">
						<a href="view.php?pid=<?php echo $rows['ID']; ?>"><img src="admin/uploads/<?php echo $rows['img']; ?>" class="img img-responsive" alt="">
						<h3 style="font-size:20px;"><?php echo $rows['product_name']; ?></h3>
						<h3 style="font-size:20px;color:green;"> Price : <?php echo $rows['price']; ?> </h3>

						<h3 style="font-size:15px;color:red;"> Date : <?php echo $rows['date']." ".$rows['time']; ?> </h3>



						</a>
						
						</div>
					</div>
			    </div>

<?php } ?>



				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--services end here-->


<!--clients start here-->


<?php require("include/footer.php"); ?>

</body>
</html>