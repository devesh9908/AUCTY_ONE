<?php
if(isset($_SESSION['ID'])){
?>
<div style="height:50px;background-color: #3f96b0;" >
	 <div style="float:right;color:white;margin:10px 10px 0px 10px">

	   	<?php echo $_SESSION['username']." ( ".$_SESSION['email']." )"; ?>  <a class="btn btn-danger" href="logout.php">logout</a>
	 </div>
</div>

<?php
}
?>

<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="logo">
				<a href="index.html"> <img src="images/logo.png" alt="" title=""> </a>
			</div>
			<div class="head-right">
			  <div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
				<ul class="res">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="product_list.php">Product</a></li>
					<li><a href="contact.php">Contact</a></li>


<?php
if(!isset($_SESSION['ID'])){
?>
					<li><a href="login.php">Login</a></li>

<?php
}
?>

					
				<div class="clearfix"> </div>
				</ul>
				<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
			<!-- /script-for-menu -->
			 </div>
		    
			
				
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form action="product_list.php">
						<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
			   </div>
			</div>
			<div class="clearfix"> </div>
			   <!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
			  <!-- //search-scripts -->
		   </div>
		
		<div class="clearfix"> </div>
		</div>
	</div>
</div>