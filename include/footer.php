<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 footer-grid">
				<h3>About This Online Auction System</h3>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.account of the system.</p>
			</div>
			<div class="col-md-4 footer-grid">
				<h3>Recents Posts</h3>

<?php 
require_once("admin/php/config.php"); 
$db = new dbObj();
$conn =  $db->getConnstring();

$res=mysqli_query($conn,"select * from product order by ID desc LIMIT 3"); 
while($rows=mysqli_fetch_assoc($res)){

?>

			  <div class="ftr-sub-gd">
				<div class="col-md-4 ftr-gd2-img">
					<a href="#"><img style="width:50px;height:50px;" src="admin/uploads/<?php echo $rows['img']; ?>" alt=""></a>
				</div>
				<div class="col-md-8 ftr-gd2-text">
						<a href="#"><h4><?php echo $rows['product_name']; ?></h4></a>
						<a href="#"><p><?php echo $rows['date']." ".$rows['time']; ?></p></a>
				</div>
				<div class="clearfix"> </div>
			  </div>
			  
			
<?php } ?>



		   </div>
			<div class="col-md-4 footer-grid">


			<h3>CONTACT INFO</h3>
				      <P>Specific levels of change in contact resistance are proposed as failure criteria for both power and signal applications. The results presented in this analysis are based on threshold behavior for contact stability.</P>
				     <div class="address">
					      <h4 style="color:red;">ADDRESS</h4>
					      <p>Address : Bail Bazar, Kalyan East Thane.</p>
						  <p>New Street : Near cotton market yard. </p>
						  <p>ph : +91 9226926292</p>
					 </div>
	


				
			</div>






		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="copyright">
	<div class="container">
		<div class="copy-main">
			
			<div class="copy-right"> 
				<ul>
					<li><a class="active" href="index.php">Home</a></li>/
					<li><a href="about.php">About</a></li>/
					<li><a href="product_list.php">Products</a></li>/
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>