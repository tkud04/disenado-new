@extends('layout')

@section('sliderText',"Contact Us")
@section('breadCrumb',"Contact Us")

@section('title',"Contact Us")

@section('content')
  <div class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 contact-form-contact-info">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="">
              <p class="d-flex">
                <span class="ion-ios-location icon mr-5"></span>
                <span>Lagos, NG</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <p class="d-flex">
                <span class="ion-ios-telephone icon mr-5"></span>
                <span>+234 705 429 1601, +234 802 420 4576</span>
              </p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <p class="d-flex">
                <span class="ion-android-mail icon mr-5"></span>
                <span>info@disenado.com.ng</span>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">

        <div class="col-12 mb-5 order-2">
          <form action="{{url('contact')}}" method="post">
			  {{csrf_field()}}
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name"  value="{{old('name')}}" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{old('phone')}}" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" value="{{old('email')}}" name="email" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8">{{old('message')}}</textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Send Message" class="btn btn-outline-black px-3 py-3">
              </div>
            </div>
          </form>
        </div>

        
      </div>

      
    </div>
  </div>
  
@stop