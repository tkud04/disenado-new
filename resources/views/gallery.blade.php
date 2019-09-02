@extends('layout')

@section('sliderText',"Our Past Works")
@section('breadCrumb',"Gallery")

@section('title',"Gallery")

@section('content')
<div class="section portfolio-section">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Selected Work</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusamus perferendis
            libero accusantium nisi.</p>
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
  
@stop