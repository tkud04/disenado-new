@extends('layout')

@section('title',"Welcome")

@section('sliderText',"Welcome to Disenado NG")

@section('content')

  <!---------- What we do ---------->
  <div class="section">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 ml-auto pl-lg-4 mb-5 order-2">

          <img src="images/about_2.jpg" alt="Image" class="img-fluid mb-5">
                   
          <h2 class="mb-4 section-title">What We Do</h2>
          <span class="d-block text-primary">Digital solutions to your business needs in Nigeria</span>
		  <p class="mb-3">
		    We build web and mobile solutions for numerous industries; school portal/e-learning systems, blogs, religious websites, charity/donation websites, landing pages for your products and services etc. 
            No matter your business needs, we are more than capable of building solutions that get the job done and meets your satisfaction.
		  </p>
		  <span class="d-block text-primary">Reseller solutions and services in Nigeria</span>
		  <p class="mb-4">We connect sellers of various products and services to their prospective buyers. As long as you have something to sell in Nigeria we can process provide buyers for a fee.</p>
          <p><a href="#" class="btn btn-outline-black">Learn More</a></p>
        </div>
        <div class="col-lg-6 order-1">
          <figure class="img-dotted-bg">
          <!-- <img src="images/about_1.jpg" alt="Image" class="img-fluid">-->
             <img src="images/disenado-4.png" alt="Image" class="img-fluid">
          </figure>

        </div>
      </div>
    </div>
  </div>
  <!----------/What we do ---------->

  <!---------- Services ---------->
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-2">
		<center><h2 class="mb-4 section-title">Services</h2></center>
		</div>
        <div class="col-lg-3 mb-4">
          <div class="service text-center" data-aos="fade-up" data-aos-delay="">
            <span class="icon icon-screen-desktop mb-4 d-block"></span>
            <h3>Web Design</h3>
            <p>Web applications that solve your business needs and firmly establishes your online presence.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service text-center" data-aos="fade-up" data-aos-delay="100">
            <span class="icon icon-screen-smartphone mb-4 d-block"></span>
            <h3>Mobile Apps</h3>
            <p>Android/iOS apps built with your customers in mind. Designed to engage your customers and provide a mobile presence.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service text-center" data-aos="fade-up" data-aos-delay="200">
            <span class="icon icon-paper-plane mb-4 d-block"></span>
            <h3>Reseller services</h3>
            <p>Do you have products/services to sell in Nigeria and you need buyers? We've got you covered.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service text-center" data-aos="fade-up" data-aos-delay="300">
            <span class="icon icon-magnifier mb-4 d-block"></span>
            <h3>Consulting</h3>
            <p>We can make and apply changes to your current websites and Android/iOS apps (based on your requirements)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!----------/Services---------->

  <!----------Gallery---------->
  <div class="section portfolio-section">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Gallery</h2>
          <p>A few of past projects done for our clients</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mb-5 no-gutters">
      <?php
        foreach($gallery as $item){
      ?>
        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="100">
          <a href="gallery-single.php" class="work-thumb">
            <div class="work-text">
              <h2>Project Name Here</h2>
              <p>Website</p>
            </div>
            <img src="images/work_1.jpg" alt="Image" class="img-fluid">
          </a>
        </div>
        <?php
        }
         ?>        

      </div>
      
    </div>
  </div>
    <!----------/Gallery---------->
  
  <!----------Get in touch---------->
  <div class="bg-primary py-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7">
           <div class="get-in-touch owl-carousel">
              <div class="item">
                <h3 class="text-white mb-2 font-weight-normal" >Need a Solution for your business?</h3>
                <p class="text-white mb-4">We make use of latest technologies to deliver original, state-of-the-art solutions for your new or existing business.</p>
            
                <p class="mb-0" data-aos="fade-up" data-aos-delay="200"><a href="{{url('contact')}}" class="btn btn-outline-white px-4 py-3">Get In Touch!</a></p>
              </div>
              <div class="item">
                <h3 class="text-white mb-2 font-weight-normal" >Do you need buyers for your products/services?</h3>
                <p class="text-white mb-4">As long as you have products or services that you can sell in Nigeria we can get buyers for you.</p>
            
                <p class="mb-0" data-aos="fade-up" data-aos-delay="200"><a href="{{url('contact')}}" class="btn btn-outline-white px-4 py-3">Get In Touch!</a></p>
              </div>
           </div>
        </div>
      </div>

    </div>
  </div>
  <!----------/Get in touch---------->
@stop