@extends('layouts.frontend.app')
@section('content')
  <!-- ServicesDetails Codes -->
  <section class="detail-one">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-6">
          <div class="detail-text">
            <span>SERVICES</span>
            <h1>WE PROVIDE BEST SERVICES</h1>

            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Services
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="detail-two">
    <div class="container">
      <div class="row">
      @foreach($servicedetail as $detaildata)
        <div class="col-xl-7 col-lg-8">
          <div class="img-wrapper">
            <img src="assets/img/New/ServiceDetails/description-1.jpg" alt="" class="img-fluid">
          </div>

          <div class="secure">
            <h2>{{ $detaildata->title }}</h2>
            <p>{!! ($detaildata->description)!!}</p>
          </div>
          <div class="overview">
            <h3>OVERVIEW</h3>
            <p>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year,
              Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport &
              logistics services.</p>
            <ul class="overview-points">
              <li>We provide innovative solutions with the best</li>
              <li>We offer our clients support in destination marketing</li>
              <li>promoting unique story each destination</li>
              <li>Strong partnerships with international agencies</li>
            </ul>
          </div>
        </div>
        @endforeach

        <div class="col-xl-4 offset-xl-1 col-lg-4">
          <div class="category-sidebar">
            <ul class="service_sidebar">
                @foreach($services as $servicedata)
              <li class="<?php if($servicedata->id == $id){ echo 'active' ;}?>">
                <a href="{{$servicedata->id}}">{{$servicedata->name}}</a>
              </li>
             @endforeach
            </ul>
          </div>

          <div class="quote-sidebar">
            <h3>REQUEST A QUOTE</h3>
            <div class="quote-form">
              <div class="form-element"><span><input type="text" name="name" value="" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                    aria-invalid="false" placeholder="Your name"></span></div>
              <div class="form-element"><span><input type="email" name="email" value="" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                    aria-required="true" aria-invalid="false" placeholder="Email"></span></div>
              <div class="form-element"><span><input type="text" name="phone" value="" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                    aria-invalid="false" placeholder="Phone"></span></div>
              <div class="form-element"><input type="submit" value="Submit"
                  class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="footer-up">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2>REACH YOUR DESTINATION 100% SAFE &amp; SECURE</h2>
        </div>
        <div class="col-md-3">
          <button><a href="#">CONTACT US</a></button>
        </div>
      </div>
    </div>
  </section>

  <section class="back"></section>

  <section class="about-four">
    <div class="container">
      <div class="row">
        <div class="col-md-6 nil"></div>
        <div class="col-lg-6 col-12">
          <div class="features">
            <span>FEATURES</span>
            <h2>WHY CHOOSE US</h2>
            <div class="row mt-5 aos-init aos-animate" data-aos="fade-up">
              <div class="col-md-2">
                <img src="../../public/assets/img/New/about-us/unnamed (3).png" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <h4>24/7 SUPPORT</h4>
                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit
                  voluptat.</p>
              </div>
            </div>

            <div class="row mt-5 aos-init aos-animate" data-aos="fade-up">
              <div class="col-md-2">
                <img src="../../public/assets/img/New/about-us/unnamed (4).png" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <h4>ON TIME DELIVERY</h4>
                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit
                  voluptat.</p>
              </div>
            </div>

            <div class="row mt-5 aos-init aos-animate" data-aos="fade-up">
              <div class="col-md-2">
                <img src="../../public/assets/img/New/about-us/unnamed (5).png" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <h4>GLOBAL SERVICE</h4>
                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit
                  voluptat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
