
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
  .modal-dialog { 
    position: fixed;
     margin: auto; 
     width: 350px;
      height: 100%;
       right: 0px; 
      } 
  .modal-content {
     height: 100%;
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="cartpage.php"><i class="fa-solid fa-cart-shopping">Cart</i><sup class="text-warning"><?php  
    include'admin/connection.php';
    include'Function.php';
    $ip = getIPAddress(); 
    $select_query="select * from cart where user_ip='$ip'";
    $result_query=mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
     
  
  echo  $count_cart_items; ?></sup></a> </li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
        
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- Hero Section-->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(img/9.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span class="text-warning">NdechiFeast</span>Restaurant </h2>
                <p class="animate__animated animate__fadeInUp">Welcome to NdechiFeast - Your Ultimate Online Food Destination! Delight in a culinary journey with us. Order now for a feast of flavors delivered to your door.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto ">Menu</a>
                  <a href="#about" class="btn-book animate__animated animate__fadeInUp scrollto ">About Us</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(img/6.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown ">Experience <span class="text-warning">NdechiFeast</span></h2>
                <p class="animate__animated animate__fadeInUp">"Your Ultimate Online Food Destination! Explore a world of flavors, order now for a feast delivered to your door.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto bg-success">Menu</a>
                  <a href="#about" class="btn-book animate__animated animate__fadeInUp scrollto bg-success">About Us</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(img/3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown ">Indulge in <span class="text-warning">NdechiFeast</span></h2>
                <p class="animate__animated animate__fadeInUp">Your Premier Online Food Hub! Discover delectable delights, and order now for a gourmet experience delivered to your doorstep.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto ">Menu</a>
                  <a href="#about" class="btn-book animate__animated animate__fadeInUp scrollto ">About Us</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
       
      </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
 <!--Menu Section -->
 <section id="menu" class="menu">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Explore Our Delicious <span>Menu</span></h2>
        </div>
        <div class="row">
        <?php 
        include'admin/connection.php';
        $query = "select * from food_items";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)){
          $id = $row['food_id'];
          $name =  $row['food_name'];
          $description=$row['food_description'];
          $img=$row['food_img'];
          $price=$row['food_price'];

          echo "
          <div class='col-md-4'>
          <div class='card   rounded-3'>
          
          
                                  <div class='position-relative overflow-hidden' id='item-img-holder'>
                                  <span class='badge badge-success'>$price</span>
                                  <img class='card-img-top' src='./foodimage/$img' alt='$name' height=250px width=100%>
                                  </div>
                                  <div class='card-body rounded-0'>
                                    <h5 class='card-title'>$name</h5>
                                    <p class='card-text truncate'>$description</p>                      
              <div class='d-grid gap-2'>
              <button data-id='".$id."' class='btn btn-success btn-sm btn-popup'>View</button>
          </div>
           
                                        
                                    
                                  
                                   
                                  </div>
                                  
                                </div>
                                <br>
                      </div>
                    
          ";
        }
        ?>
       
           
        </div>


      </div>
    </section><!-- End Menu Section -->


    <!-- Modal -->
    <div class="modal fade" id="custModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Product Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>


    <!--About Section -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("img/8.jpg");'>
            <a href="" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Discover <span class="text-warning">NdechiFeast</span><strong>: Our Story and Mission </strong></h3>
              <p>
              At NdechiFeast, we're passionate about bringing exceptional food experiences to your doorstep. Our journey began with a simple idea - to make delicious and diverse cuisine accessible to everyone, anytime, anywhere.
              
              </p>
              <p class="fst-italic">
              We believe that food is more than just sustenance; it's a celebration of culture, tradition, and taste. That's why we've curated a diverse menu that captures the essence of culinary excellence from around the world.Services offered in NdechiFeast?
              </p>
              <ul>
              <li><i class="bx bx-check-double text-success"></i> Online Food Ordering: Allow customers to browse through a diverse menu of dishes offered by various restaurants, select their favorite items, and place orders for delivery or pickup.</li>

              <li><i class="bx bx-check-double text-success"></i>Delivery Services: Provide reliable and efficient food delivery services, ensuring that orders reach customers' doorsteps promptly and in excellent condition.</li>

              <li><i class="bx bx-check-double text-success"></i>Pickup Option: Offer customers the option to order online and pick up their food directly from the restaurant if they prefer.</li>

              <li><i class="bx bx-check-double text-success"></i>Catering Services: Cater to special occasions and events by offering catering services, with customizable menus to suit the needs of parties, gatherings, and celebrations.</li>

              <li><i class="bx bx-check-double text-success"></i>Customization: Allow customers to personalize their orders, including special dietary requests, portion sizes, and additional toppings or sides.</li>

              <li><i class="bx bx-check-double text-success"></i>User Accounts: Enable users to create accounts to save their preferences, order history, and payment information for a more convenient ordering experience.</li>

             

              <li><i class="bx bx-check-double text-success"></i>Menu Previews: Display high-quality images and detailed descriptions of menu items to help customers make informed choices.</li>

              <li><i class="bx bx-check-double text-success"></i>Secure Payment: Offer secure payment options, including credit/debit cards, digital wallets, and cash on delivery.</li>

            

              <li><i class="bx bx-check-double text-success"></i>Customer Support: Provide excellent customer support through multiple channels, including live chat, email, and phone, to address any inquiries or issues promptly.</li>

             


            </ul>
            <p>
              We value your trust and strive to provide the highest standards of quality, safety, and reliability in every aspect of our service. Your satisfaction is our top priority, and we're committed to making your dining experience with us exceptional, every time.

Thank you for choosing NdechiFeast. Join us in celebrating the joy of good food, shared moments, and delightful feasts. Together, let's savor the flavors of life.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!--  Why Us Section -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span class="text-warning">NdechiFeast</span></h2>
          <p>Select NdechiFeast for a tantalizing array of cuisine, hassle-free ordering, and prompt delivery - elevating your dining experience every time.</p>
        </div>

        <div class="row">

          <div class="col-lg-2">
            <div class="box">
              <span class="text-success">01</span>
              <h4>Diverse Selection:</h4>
              <p>Enjoy a wide range of cuisines and restaurants, ensuring something for every craving.</p>
            </div>
          </div>
           

          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box">
              <span class="text-success">02</span>
              <h4>          User-Friendly: 
</h4>
              <p>Our platform is easy to navigate, making ordering a breeze.</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box">
              <span class="text-success">03</span>
              <h4>        Secure Payments:
</h4>
              <p>Prioritize your safety with secure payment options.</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box">
              <span class="text-success">04</span>
              <h4>    Customizable Orders:
</h4>
              <p>Tailor your meals to your liking with customization options.</p>
            </div>
          </div>
          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box">
              <span class="text-success">05</span>
              <h4>   Support Team: 
</h4>
              <p>Dedicated support for a seamless experience.</p>
            </div>
          </div>
           



 


          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box">
              <span class="text-success">06</span>
              <h4> Reliable Delivery:</h4>
              <p> Count on us for prompt and secure food delivery services.</p>
            </div>
          </div>
         
        </div>

      </div>
    </section><!-- End Whu Us Section -->

   

    
          


    <!--Gallery Section -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Savor the Visual Feast <span class="text-warning">In NdechiFeast</span></h2>
          <p>Our image gallery captures the artistry and flavors of our delectable dishes. Experience our culinary creations before you order!</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- Testimonials Section  -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Connect with Us – We're Here to Help! Reach out for any inquiries, assistance, or feedback. Your satisfaction is our priority.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Ghona Street<br>Moshi, Tanzania</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>07:00 AM - 2100 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Heavenlyamuya45@gmail.com<br>Urioveida@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+255 7432 6245 0<br>+255 6893 8727 7</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
 
  
  <script type="text/javascript">
    $(document).ready(function () {

      $('.btn-popup').click(function () {
        var custId = $(this).data('id');
        $.ajax({
          url: 'get_data.php',
          type: 'post',
          data: { custId: custId },
          success: function (response) {
            $('.modal-body').html(response);
            $('#custModal').modal('show');
          }
        });
      });

    });
  </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
<script src="assets/js/main.js"></script>  

</body>

</html>