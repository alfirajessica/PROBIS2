<?php
require_once("head.php");
?>

<!DOCTYPE html>
<html>
<head>
   
</head>
<body class="goto-here">
    <!-- header paling atas -->
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 1234 5678 9100</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">emos@gmail.com</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END header paling atas -->

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
        <a class="navbar-brand" href="home.php">EMOS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
               
                <li class="nav-item"><a href="produk.php" class="nav-link">Produk</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">[nama Toko/Perusahaan]</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="#">Status Order</a>
                    <a class="dropdown-item" href="#">Riwayat Order</a>
                    <a class="dropdown-item" href="#">Piutang</a>
                    <hr>
                    <a class="dropdown-item" href="pengaturan.php">Profil</a>
                    <a class="dropdown-item" href="#">Keluar</a>
                </div>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">         	
            <h1 class="mb-0 bread">PRODUK</h1>
            <div class="col-md-12 d-flex align-items-center">
            
            <!-- Cari Product -->
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Cari Produk">
                <input name="" id="" class="btn btn-primary" type="button" value="Cari">              
              </div>
            </form>
            <!--End Cari Product -->

          </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Jenis Product -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">Semua</a></li>
    					<li><a href="#">Minuman</a></li>
    					<li><a href="#">Konsumsi</a></li>
    					<li><a href="#">Pribadi</a></li>
    					<li><a href="#">Obat</a></li>
    				</ul>
          </div>
        </div>
        
        <!-- row Jenis Product -->
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Minuman</a></h3>
                  <div class="d-flex">
                    <div class="pricing"></div>
                  </div>
                
                  <div class="d-flex px-3 d-flex justify-content-center align-items-center text-center">
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Detail</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-3">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Minuman</a></h3>
                  <div class="d-flex">
                    <div class="pricing"></div>
                  </div>
                
                  <div class="d-flex px-3 d-flex justify-content-center align-items-center text-center">
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Detail</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-3">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Minuman</a></h3>
                  <div class="d-flex">
                    <div class="pricing"></div>
                  </div>
                
                  <div class="d-flex px-3 d-flex justify-content-center align-items-center text-center">
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Detail</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-3">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Minuman</a></h3>
                  <div class="d-flex">
                    <div class="pricing"></div>
                  </div>
                
                  <div class="d-flex px-3 d-flex justify-content-center align-items-center text-center">
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Detail</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-3">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end row Jenis Product -->
            
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
    <!-- END Jenis Product -->

    <!-- footer -->
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->
        
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>
</html>