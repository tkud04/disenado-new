<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url('images/hero_2.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
		  @hasSection('sliderText')
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">@yield('sliderText')</h1>
		  @endif
		  
          @hasSection('breadCrumb')
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="{{url('/')}}">Home</a> <span class="mx-3">/</span> @yield('breadCrumb')</p>
          @endif
        </div>
      </div>
    </div>
  </div>