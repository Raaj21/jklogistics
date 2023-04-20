@extends('layouts.frontend.app')
@section('content')
 <section class="contact-one">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-6">
          <div class="contact-txt">
            <span>Contact</span>
            <h1>keep in touch with us for help</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-two">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-4 pd">
          <div class="row justify-content-center">
            <div class="col-md-3 img">
              <img src="assets/img/New/Contact/unnamed (6).png" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 info-txt">
              <p>7th Floor, Kattima Isana Building,</p>
              <p> No. 497 & 498,
                Poonamallee High Road, Arumbakkam,
                Chennai – 600106. Tamil Nadu, India
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 pd">
          <div class="row justify-content-center">
            <div class="col-md-3 img">
              <img src="assets/img/New/Contact/unnamed (7).png" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 info-txt">
              <p>+3 123 456 789</p>
              <p>+1 222 345 342</p>
              <p>+2 123 433 324</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 pd">
          <div class="row justify-content-center">
            <div class="col-md-3 img">
              <img src="assets/img/New/Contact/unnamed (8).png" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 info-txt">
              <p> info@j-ark.in</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-three">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <span>CONTACT</span>
          <h2>KEEP IN TOUCH</h2>
          <form>
            <div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-element">
                    <input type="text" name="names" value="" size="40" class="wpcf7-form-control" aria-required="true"
                      aria-invalid="false" placeholder="Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-element">
                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control" aria-required="true"
                      aria-invalid="false" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-element">
                    <input type="text" name="phone" value="" size="40" class="wpcf7-form-control" aria-required="true"
                      aria-invalid="false" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-element">
                    <input type="text" name="subject" value="" size="40" class="wpcf7-form-control" aria-required="true"
                      aria-invalid="false" placeholder="Subject">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-element">
                    <textarea type="text" placeholder="Comments" id="comment" name="comment"></textarea>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <div class="form-element">
                    <button><a href="#">SUBMIT</a></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-6 col-12 text-center">
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.5878543911971!2d80.20817956960529!3d13.076900699203025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f449933f899%3A0xd2180b2573c9de90!2sTaewoong%20logistics!5e0!3m2!1sen!2sin!4v1681989883836!5m2!1sen!2sin"  frameborder="0" ></iframe>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
