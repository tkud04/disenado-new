<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title') | Disenado NG - Custom Web and Mobile Solutions For Any Industry | Reseller Services in Nigeria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400,400i|Roboto+Mono&display=swap" rel="stylesheet">

   <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">


  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
	
	  <header role="banner" id="hd">
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="{{url('/')}}">Disenado</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

   
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{url('services')}}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
          </ul>

          
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  
 
   @include("slider")
  @yield('content')
  @include("testimonials")
  
  
  
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4 mb-5">
          <h3 class="mb-4">About Us</h3>
          <p class="mb-5">
          	Established in 2014, we have continually provided our clients with web and mobile software solutions that meet their various requirements. 
          </p>
          

        </div>
        <div class="col-md-3 ml-auto">

          <h3 class="mb-4">Navigation</h3>
          <ul class="list-unstyled footer-link">
            <li><a href="{{url('about')}}">About</a></li>
            <li><a href="{{url('services')}}">Services</a></li>
            <li><a href="{{url('gallery')}}">Gallery</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
          </ul>


          
        </div>
        <div class="col-md-3 mb-5">
          <ul class="list-unstyled footer-link d-flex footer-social">
            <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
        
      </div>
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-energy text-danger" aria-hidden="true"></i> Powered by <a href="#">Disenado</a>
           
          </p>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" id="back-to-top" class="back-to-top" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#ffc107" /></svg></div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>

</html>