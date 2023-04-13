@extends('layouts.frontend.app')
@section('content')

<!-- Home Codes -->
<section class="home-one">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="hero-text">
            <span class="top">We are J-ARk</span>
            <h1>NO# 1 SOLUTION FOR TRANSPORT</h1>
            <a class="wow fadeInUp boxed-btn" data-wow-duration="1.5s" href="{{route('services')}}">
              <span>SEE SERVICES</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-four">
    <div class="container mt">
      <div class="row">
        <div class="col-md-6">
          <div class="bac"></div>
        </div>
        <div class="col-md-6">
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

  <section class="services-two">
    <div class="container">
      <div class="col-md-6">
        <span>OUR SERVICES</span>
        <h2>WHAT WE PROVIDE</h2>
      </div>

      <div class="row row-testicont">
        <div class="col-md-12">
          <div id="developerCarousel" data-ride="carousel" class="carousel slide carousel-fade">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row rowFix">
                    @foreach($services as $service)
                  <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                    <div class="single-service wow fadeInRight">
                      <div class="img-wrapper">
                        <img src="{{asset($service->image)}}" alt="" class="img-fluid">
                      </div>
                      <div class="service-txt">
                        <h4 class="service-title">{{$service->name}}</h4>
                        <p class="service-para">
                        {!! substr($service->short_description, 0, 200)!!}
             ....</p>
                        <a href="{{ url('service-details/'.$service->id) }}" class="readmore">
                          READ MORE
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  <!-- <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
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
                  </div> -->

                  <!-- <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
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
                  </div> -->
                </div>
              </div>



            </div>
          </div>
        </div>

        <!-- <a href="#devcarousel" role="button" data-slide="prev" class="carousel-control-prev">
          <span aria-hidden="true" class="carousel-control-prev-icon">
            <img src="assets/img/New/arrow-left.png" alt="">
          </span>
        </a>

        <a href="#devcarousel" role="button" data-slide="next" class="carousel-control-next">
          <span aria-hidden="true" class="carousel-control-next-icon">
            <img src="assets/img/New/arrow-right.png" alt="">
          </span>
        </a> -->
      </div>

    </div>
  </section>

  <section class="back-home">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img src="assets/img/New/ceo.png" alt="" class="ceo-image">
        </div>
        <div class="col-md-6 offset-md-1">
          <div class="about-con">
            <span>ABOUT US</span>
            <h2>WE ARE J_ARk</h2>
            <p>
              We offers a host of logistic management services and supply chain solutions. We provide innovative
              solutions with the best. Incididunt dolor sit amet, consectetur adipiscing elit, sed dolore magna.
            </p>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo.
            </p>
            <img src="assets/img/New/signature.png" alt="" class="img-fluid">
            <h5>JUNG YONG HUNING </h5>
            <span>Founder &amp; CEO</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="testimonial-section">
    <div class="container">
      <div class="testimonial-container">
        <div class="row">
          <div class="col-lg-5">
            <div class="testimonial">
              <span>TESTIMONIAL</span>
              <h2>WHAT THEY SAY</h2>

              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <p>They offer a host of logistic management services and supply chain. We provide innovative
                      solutions with the best. tempor incididunt ut labore et dolor empore tempor incididunt
                    </p>
                    <h5>JONATHAN DOE</h5>
                    <div class="designation">Designer, art media</div>
                  </div>
                  <div class="carousel-item">
                    <p>They offer a host of logistic management services and supply chain. We provide innovative
                      solutions with the best. tempor incididunt ut labore et dolor empore tempor incididunt
                    </p>
                    <h5>MARIA CARROL</h5>
                    <div class="designation">Designer</div>
                  </div>
                  <div class="carousel-item">
                    <p>They offer a host of logistic management services and supply chain. We provide innovative
                      solutions with the best. tempor incididunt ut labore et dolor empore tempor incididunt
                    </p>
                    <h5>ROBERT CHEN</h5>
                    <div class="designation">Director</div>
                  </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a> -->
              </div>

            </div>
          </div>
          <div class="col-lg-7">
            <div class="free-space"></div>
          </div>
        </div>
        <div class="quote-icon">
          <i class="flaticon-quote-left"></i>
        </div>
      </div>
    </div>
  </div>

  <section class="about-three">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="row">
              <div class="col-md-2 pt-2">
                <img src="assets/img/New/about-us/Mission.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <div class="box-content">
                  <h4>OUR MISSION</h4>
                  <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing
                    elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium</p>
                </div>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="row">
              <div class="col-md-2 pt-2">
                <img src="assets/img/New/about-us/Vision.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <div class="box-content">
                  <h4>OUR VISION</h4>
                  <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing
                    elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="faq">
            <span>FAQS</span>
            <h3>FREQUENTLY ASKED QUESTIONS</h3>

            <div class="accordion" id="accordionExample">
              <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Why choose this? </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    They offers a host of logistic management services and supply chain . We provide innovative
                    solutions with the best. tempor incididunt ut labore et dolor empor tempor incididunt innovative
                    solutions
                  </div>
                </div>
              </div>


              <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Is it costly? </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    They offers a host of logistic management services and supply chain . We provide innovative
                    solutions
                    with the best. tempor incididunt ut labore et dolor empor tempor incididunt innovative solutions
                  </div>
                </div>
              </div>

              <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      When usally product reach? </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    They offers a host of logistic management services and supply chain . We provide innovative
                    solutions
                    with the best. tempor incididunt ut labore et dolor empor tempor incididunt innovative solutions
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
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
