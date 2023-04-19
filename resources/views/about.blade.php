@extends('layouts.frontend.app')
@section('content')
 <!-- About us -->
 <section class="about-one">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-6">
          <div class="about-text">
            <span>ABOUT US</span>
            <h1>WE ARE TRANSPOT SERVICE PROVIDER</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  About Us
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="about-three" data-aos="fade-up">
    <div class="container">
      <div class="row" style="justify-content: center;">
      <div class="col-md-12">
          <h2>About</h2>
          <p class="dummy-design">J-ARK will quickly respond to customer needs with grit and passion and become a global logistics company.</p>
        </div>
        <div class="col-lg-6">
          <div class="box">
            <div class="row">
              <div class="col-md-2 pt-2">
                <img src="{{asset('assets/img/New/about-us/Mission.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-10" style="cursor: pointer;">
                <div class="box-content">
                  <h4>OUR VALUES AND STRENGTH </h4>
                  <p class="article">Since its establishment in 2008, the J-Ark Group has continued to grow, drawing its strength from its family dimension, from a long-term strategic vision and from the expertise of its teams driven by a common passion.
                  In keeping with our history and with our culture, we are driven by the values that unite us. Today, we are reaffirming these values to continue our development and achieve our ambitions.</p>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box">
            <div class="row">
              <div class="col-md-2 pt-2">
                <img src="{{asset('assets/img/New/about-us/Vision.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <div class="box-content">
                  <h4>EXCELLENCE </h4>
                  <p>To be a leader in our industry, we owe it to ourselves to engage in a perpetual quest for excellence at every level of our organization. One that ranges from operational excellence all the way to achieving excellence in interactions with our customers, our suppliers and our staff members. It sets a standard for everyone and is an objective for our Group and all its employees must lead by example. That means upholding the highest standards in their daily tasks as well as in the strategic decisions they make.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box">
            <div class="row">
              <div class="col-md-2 pt-2">
                <img src="{{asset('assets/img/New/about-us/Vision.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <div class="box-content">
                  <h4>BOLDNESS  </h4>
                  <p>Boldness has been one of the Group’s core values. It is inherent to our entrepreneurial mindset and to our passion for development. Boldness, which enables us to reach beyond our limits, never settle and always overcome every obstacle, plays a fundamental role in our ongoing development.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="dummy">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>CEO Greeting</h2>
          <p class="dummy-design">J-ARK will quickly respond to customer needs with grit and passion and become a global logistics company.</p>
        </div>

        <div class="col-md-8">
          <p>Greetings ! This is Chairman, Jung Yong Hwang</p>

          <p>Since the establishment of the comapny in 2008, it has grwon remarkably every year. As an integrated logistics company in India, we have been working on lgistics by responding to various needs of customers.</p>

          <p>Since it foundation, all the company members in J-ARK have the grit of not giving up and handled the logistics accurately and quickly with enthusiasm despite all the difficulties.</p>

          <p>The passion has built an unrivaled area that only J-ARK can do and the basis of this passion is the respect and love for people.</p>

          <p>J-ARK will not grow the company, but also grow with our employees who work fro the company.</p>

          <p>Thank You.</p>
        </div>

        <div class="col-md-4 dummy-image">
          <img src="{{asset('assets/img/New/ceo.png')}}" alt="" class="img-fluid">
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
                <img src="{{asset('assets/img/New/about-us/unnamed (3).png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <h4>24/7 SUPPORT</h4>
                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit
                  voluptat.</p>
              </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
              <div class="col-md-2">
                <img src="{{asset('assets/img/New/about-us/unnamed (4).png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-10">
                <h4>ON TIME DELIVERY</h4>
                <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit
                  voluptat.</p>
              </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
              <div class="col-md-2">
                <img src="{{asset('assets/img/New/about-us/unnamed (5).png')}}" alt="" class="img-fluid">
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
  <section class="services-two">
    <div class="container">
      <div class="col-md-6">
        <h2>OUR BRANCHES </h2>
        <!-- <h2>WHAT WE PROVIDE</h2> -->
      </div>

      <div class="row row-testicont">
        <div class="col-md-12">
          <div id="developerCarousel" data-ride="carousel" class="carousel slide carousel-fade">
            <div class="carousel-inner">

              <div class="carousel-item ">
                <div class="row rowFix">
                  <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                    <div class="single-service wow fadeInRight">
                      <div class="img-wrapper">
                        <img src="{{asset('assets/img/New/Services/service_1.jpg')}}" alt="" class="img-fluid">
                      </div>
                      <div class="service-txt">
                        <h4 class="service-title">Mumbai</h4>
                        <p class="service-para">
                          SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                          solutions.... </p>
                        <!-- <a href="#" class="readmore">
                          READ MORE
                        </a> -->
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                    <div class="single-service wow fadeInRight">
                      <div class="img-wrapper">
                        <img src="{{asset('assets/img/New/Services/service_4.jpg')}}" alt="" class="img-fluid">
                      </div>
                      <div class="service-txt">
                        <h4 class="service-title">Bangalore</h4>
                        <p class="service-para">
                          SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                          solutions.... </p>
                        <!-- <a href="#" class="readmore">
                          READ MORE
                        </a> -->
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                    <div class="single-service wow fadeInRight">
                      <div class="img-wrapper">
                        <img src="{{asset('assets/img/New/Services/service_2.jpg')}}" alt="" class="img-fluid">
                      </div>
                      <div class="service-txt">
                        <h4 class="service-title">Delhi</h4>
                        <p class="service-para">
                          SECURE AND SAFE AIR Freight We offers a host of logistic management services and supply chain
                          solutions.... </p>
                        <!-- <a href="#" class="readmore">
                          READ MORE
                        </a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item active">
                <div class="row rowFix">
                  <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                    <div class="single-service wow fadeInRight">
                      <div class="img-wrapper">
                        <img src="{{asset('assets/img/New/Services/service_6.jpg')}}" alt="" class="img-fluid">
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

                  <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
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

                  <div class="col-lg-4 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
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
                  </div>
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

  <section class="services-two">
    <div class="container">
      <div class="row row-testicont">
        <div class="col-md-12">
          <div id="developerCarousel" data-ride="carousel" class="carousel slide carousel-fade">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row rowFix">
                    <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-1.png')}}" alt="" class="img-fluid">
                  </div>

                  <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-2.png')}}" alt="" class="img-fluid">
                  </div>

                  <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-3.png')}}" alt="" class="img-fluid">
                  </div>

                  <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-4.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
              </div>


              <div class="carousel-item">
                <div class="row rowFix">
                    <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-4.png')}}" alt="" class="img-fluid">
                    </div>

                  <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-3.png')}}" alt="" class="img-fluid">
                  </div>

                  <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-2.png')}}" alt="" class="img-fluid">
                  </div>

                  <div class="col-lg-3 col-md-6 mt-3 aos-init aos-animate" data-aos="fade-left">
                        <img src="{{ asset('assets/img/New/partner-1.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
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
