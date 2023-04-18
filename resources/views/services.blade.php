@extends('layouts.frontend.app')
@section('content')
 <!-- Services -->
 <section class="services-one">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-6">
          <div class="service-text">
            <span>Services</span>
            <h1>we provide best services</h1>
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

  <section class="services-two">
    <div class="container">
      <div class="col-md-6">
        <span>OUR SERVICES</span>
        <h2>WHAT WE PROVIDE</h2>
      </div>


      <div class="row">
        @foreach($services as $service)
        <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-left">
          <div class="single-service wow fadeInRight">
            <div class="img-wrapper">
              <img src="{{asset($service->image)}}" alt="" class="img-fluid">
            </div>
            <div class="service-txt">
              <h4 class="service-title">{{$service->name}}</h4>

              <p class="service-para">{!! substr($service->short_description, 0, 200)!!}
             .... </p>
              <a href="{{ url('service-details/'.$service->id) }}" class="readmore">
                READ MORE
              </a>
            </div>
          </div>
        </div>
        @endforeach

        <!-- <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-left">
          <div class="single-service wow fadeInRight">
            <div class="img-wrapper">
              <img src="assets/img/New/Services/service_4.jpg" alt="" class="img-fluid">
            </div>
            <div class="service-txt">
              <h4 class="service-title">ROAD FREIGHT</h4>
              <p class="service-para">
                SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                solutions.... </p>
              <a href="#" class="readmore">
                READ MORE
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-left">
          <div class="single-service wow fadeInRight">
            <div class="img-wrapper">
              <img src="assets/img/New/Services/service_2.jpg" alt="" class="img-fluid">
            </div>
            <div class="service-txt">
              <h4 class="service-title">OCEAN FREIGHT</h4>
              <p class="service-para">
                SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                solutions.... </p>
              <a href="#" class="readmore">
                READ MORE
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-left">
          <div class="single-service wow fadeInRight">
            <div class="img-wrapper">
              <img src="assets/img/New/Services/service_6.jpg" alt="" class="img-fluid">
            </div>
            <div class="service-txt">
              <h4 class="service-title">WARE HOUSING</h4>
              <p class="service-para">
                SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                solutions.... </p>
              <a href="#" class="readmore">
                READ MORE
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-left">
          <div class="single-service wow fadeInRight">
            <div class="img-wrapper">
              <img src="assets/img/New/Services/service_5.jpg" alt="" class="img-fluid">
            </div>
            <div class="service-txt">
              <h4 class="service-title">STORAGE</h4>
              <p class="service-para">
                SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                solutions.... </p>
              <a href="#" class="readmore">
                READ MORE
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-left">
          <div class="single-service wow fadeInRight">
            <div class="img-wrapper">
              <img src="assets/img/New/Services/service_3.jpg" alt="" class="img-fluid">
            </div>
            <div class="service-txt">
              <h4 class="service-title">PACKAGING</h4>
              <p class="service-para">
                SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                solutions.... </p>
              <a href="#" class="readmore">
                READ MORE
              </a>
            </div>
          </div>
        </div> -->

      </div>
    </div>
  </section>

  <section class="about-five">
    <div class="container">
      <div class="row">
        <div class="offset-lg-5 col-lg-7">
          <div class="quote-form-section">
            <span>QUOTE</span>
            <h2>REQUEST A FREE QUOTE</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="fname" placeholder="Your Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="fname" placeholder="Select a Freight">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <button><a href="#">SUBMIT</a></button>
              </div>
            </div>
          </div>
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
            <div class="row mt-5" data-aos="fade-up">
              <div class="col-md-2">
                <img src="assets/img/New/about-us/unnamed (3).png" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <h4>24/7 SUPPORT</h4>
                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit
                  voluptat.</p>
              </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
              <div class="col-md-2">
                <img src="assets/img/New/about-us/unnamed (4).png" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <h4>ON TIME DELIVERY</h4>
                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit
                  voluptat.</p>
              </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
              <div class="col-md-2">
                <img src="assets/img/New/about-us/unnamed (5).png" alt="" class="img-fluid">
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

  <section class="footer-up">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2>REACH YOUR DESTINATION 100% SAFE & SECURE</h2>
        </div>
        <div class="col-md-3">
          <button><a href="#">CONTACT US</a></button>
        </div>
      </div>
    </div>
  </section>
@endsection
