<?php
require_once("include/session_data.php");
require_once("admin/php/config.php"); 
$db = new dbObj();
$conn =  $db->getConnstring();


$res=mysqli_query($conn,"select *,(select name from seller where ID=product.seller_id) as seller_name from product where ID='".$_GET['pid']."'"); 
$rows=mysqli_fetch_assoc($res);


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
<?php require("include/header.php"); ?>
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="col-md-9 blog-left">
				<div class="blog-grids">
					<a href="#"><img width="100%" src="admin/uploads/<?php echo $rows['img']; ?>" alt=""></a>
					<div class="blog-detail">
						<a href="#"><h3><?php echo $rows['product_name']; ?></h3></a>




						<div class="blog-para">
							<?php echo $rows['description']; ?>
						</div>
						
					</div>
					<div class="data-line">
			    	<ul>
			    		<li><small class="calen"> </small><span class="calen">Comments</span></li>
			    		
			    	</ul>
			    </div>

<div id="comments_list">

    <?php
$re=mysqli_query($conn,"select *,(select user_name from user where ID=comment.user_id) as username,(select img from user where ID=comment.user_id) as img from comment where product_id='".$_GET['pid']."'");
while($row=mysqli_fetch_assoc($re)){
    ?>

    <div class="single-commemts" style="margin-bottom: 10px;">
			   	    <div class="col-md-2 user">
							<a href="#"><img style="width:70px;height: 70px;" src="admin/uploads/<?php echo $row['img']; ?>" alt=""/></a>
						</div>
						<div class="col-md-10 user-comment"
							<a href="#"><h4 style="color:blue;"><?php echo $row['username']; ?></h4></a>
							<p><?php echo $row['message']; ?></p>
						    <a class="comme" href="#"><?php echo $row['date']; ?> <?php echo $row['time']; ?></a>
						    
						</div>



                  <div class="clearfix"> </div>
			   </div>



    <?php
}
    ?>

</div>


			   


			   








			   <div class="magsingle-contact">
			   	<h3>Leave A Comment</h3>
			   	<form id="comment">
			    	<input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>"/>
			    	
			    	<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required />Message</textarea>
			    	<input type="submit"  value="Submit Comment" />
			     </form>
			   </div>
			</div>

				</div>
			</div>
			<div class="col-md-3 blog-right">
				<div class="blog-cate">
				<h3>Product Details</h3>
				<ul>
					<li><a href="#">Upload date: <br><?php echo $rows['date']." ".$rows['time']; ?></a></li>
					<li><a href="#">Price : <br><?php echo $rows['price']; ?></a></li>
					<li><a href="#">Product Name : <br><?php echo $rows['product_name']; ?></a></li>
					<li><a href="#">Seller Name : <br><?php echo $rows['seller_name']; ?></a></li>
					
				</ul>
			</div>




			




			</div>
		 <div class="clearfix"> </div>
		</div>
</div>


<script type="text/javascript">
$(document).ready(function() {

    $("#comment").on('submit',(function(e) {
            
        e.preventDefault();
        $.ajax({
            url: "admin/php/comments.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {

             
            
             $("#comments_list").append(data);	

             
              

	          
            }           
       });
    }));




  });
</script>
<!--blog end here-->
<?php require("include/footer.php"); ?>
</body>
</html>