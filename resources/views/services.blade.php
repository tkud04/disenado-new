@extends('layout')

@section('sliderText',"Our Services")
@section('breadCrumb',"Services")

@section('title',"Services")

@section('content')

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
  
@stop