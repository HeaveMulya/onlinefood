 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NdechiFeast | Home</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- CSS -->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    	.card p {
    		margin: unset
    	}
    	.card img{
		    max-width: calc(100%);
		    max-height: calc(59%);
    	}
    	div.sticky {
		  position: -webkit-sticky; /* Safari */
		  position: sticky;
		  top: 4.7em;
		  z-index: 10;
		  background: white
		}
		.rem_cart{
		   position: absolute;
    	   left: 0;
		}
    </style>
</head>

<body>
  

  <!--Top Bar-->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center text-success"><span>+255 0743 2624 50</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center text-success"><span>Mon-Sat: 07:00 AM - 09:00 PM</span></i>
    </div>
  </section>

  <!--Header -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1 class="text-warning">NdechiFeast</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?#menu" >Menu</a></li>
          <li><a class="nav-link scrollto" href="cartpage.php"><i class="fa-solid fa-cart-shopping">Cart</i><sup class="text-warning"><?php  
    include'admin/connection.php';
    include'Function.php';
    $ip = getIPAddress(); 
    $select_query="select * from cart where user_ip='$ip'";
    $result_query=mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
     
  
  echo  $count_cart_items; ?></sup></a> </li>
          <li><a class="nav-link scrollto" href="index.php?#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php?#about">About</a></li>
        
          <li><a class="nav-link scrollto" href="index.php?#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- Hero Section-->
  <section id="hero">
    <div class="hero-container">
     

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(img/9.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> FoodCart </h2>
                <p class="animate__animated animate__fadeInUp">Scroll down to see Foods in the cart</p>
              </div>
            </div>
          </div>

         
          

        
      
    </div>
  </section><!-- End Hero -->

 <!-- Masthead-->
 <header class="masthead">
    
	<section class="page-section>
        <div class="container">
        	  <?php 
        		$total=0;
                $ip = getIPAddress(); 
                $select_query="select * from cart,food_items where cart.product_id=food_items.food_id and cart.user_ip='$ip'";
                $result_query=mysqli_query($conn,$select_query);
                $count=mysqli_num_rows($result_query);
                if($count<1){
                    echo"<div class='container'>
                    <div class='jumbotron '>
                    <h3 class='text-center'>Your cart is empty. Explore are <a href='index.php?#menu' class='text-decoration-none fw-bolder'>Menu</a>.</h3>        
                    </div>      
                </div>  ";
                }
                
                else{
                    ?>
                <div class="row">
        	<div class="col-lg-8">
        		<div class="sticky">
	        		<div class="card">
	        			<div class="card-body">
	        				<div class="row">
		        				<div class="col-md-8"><b>Items</b></div>
		        				<div class="col-md-4 text-right"><b>Total</b></div>
	        				</div>
	        			</div>
	        		</div>
                </div>
                <?php
                while($row=mysqli_fetch_assoc($result_query)){
                    $img=$row['food_img'];
                    $total += ($row['product_qty'] * $row['food_price']);
        		?>

        		<div class="card">
	        		<div class="card-body">
		        		<div class="row">
			        		<div class="col-md-4 d-flex align-items-center" style="text-align: -webkit-center">
								<div class="col-auto">	
			        				<a href="" class="rem_cart btn btn-sm btn-outline-danger" data-id=""><i class="fa fa-trash"></i></a>
								</div>	
								<div class="col-auto flex-shrink-1 flex-grow-1 text-center">	
			        				<img src="<?php echo' ./foodimage/'.$img; ?>" alt="" height=150px width="100%">
								</div>	
			        		</div>
			        		<div class="col-md-4">
			        			<p><b><large><?php echo $row['food_name'] ?></large></b></p>
			        			<p class='truncate'> <b><small>Desc :<?php echo $row['food_description'] ?></small></b></p>
			        			<p> <b><small>Unit Price :<?php echo number_format($row['food_price'],2) ?></small></b></p>
                    <div class="form-group">
		<div class="input-group">
			  <div class="input-group-btn">
				  <a id="down"  class="btn btn-outline-success" onclick=" down('0')"><span class="glyphicon glyphicon-minus">-</span></a>
			  </div>
			  <input type="text" id="myNumber" class="form-control input-number" value="1" name="qty" >
			  <div class="input-group-btn">
				  <a id="up" class="btn btn-outline-success" onclick="up('100')"><span class="glyphicon glyphicon-plus">+</span></a>
			  </div>
		  </div>

	</div>
  </div>
  <div class="col-md-4 text-right">
			        			<b><large><?php echo number_format($row['product_qty'] * $row['food_price'],2) ?></large></b>
			        		</div>
		        		</div>
	        		</div>
                
	        	</div>

	        
           
        	  <?php }?></div>
        	<div class="col-md-4">
        		<div class="sticky">
        			<div class="card">
        				<div class="card-body">
        					<p><large>Total Amount</large></p>
        					<hr>
        					<p class="text-right"><b><?php echo number_format($total,2) ?></b></p>
        					<hr>
        					<div class="text-center">
        						<button class="btn btn-block btn-success" type="button" id="checkout">Proceed to Checkout</button>
        					</div>
                        
        				</div>
        			</div>
                    <br>
                    <div class="text-end">
				<a href="?delete"><button class="rounded-0 btn btn-danger"><span class="fa fa-trash"></span> Empty Cart</button></a>
				<a href="index.php?#menu"><button class="rounded-0 btn btn-warning">Add more items</button></a>
				<?php
                if(isset($_GET['delete'])){
$delete_sql="delete from cart where user_ip='$ip'";
$result=mysqli_query($conn,$delete_sql);
if($result){
    echo "<script>alert('This food is deleted in cart')</script>";
    echo "<script>window.open('cartpage.php','_self')</script>";

}else{
    echo "<script>alert('Ooop!Error Occur Food is still in cart')</script>";
    echo "<script>window.open('cartpage.php','_self')</script>";

}
                }
                
                ?>
			</div>
            </div>
        		</div>
                
        	</div>
        	<?php }?>
        </div>
    </section>
    
    
  <!--  Footer -->
  <footer id="footer">
    <div class="container">
      <h3 class="text-warning">NdechiFeast</h3>
      <p>Discover culinary excellence at NdechiFeast, where every bite tells a story of taste, tradition, and innovation.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Heaven</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
  <script src="incrementing.js"></script>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
<script src="assets/js/main.js"></script>  

</body>

</html>
   
	
