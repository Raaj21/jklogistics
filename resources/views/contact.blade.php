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
              <p>143 castle road 517</p>
              <p>district, kiyev port south Canada</p>
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
              <p>info@yourmail.com</p>
              <p>transpix@yourmail2.com</p>
              <p>ship@yourmail3.com</p>
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
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55130.5692649948!2d90.38700538220155!3d23.799024958362683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2zxJDhuq9jLWNhLCBCxINuZy1sYS3EkcOpdA!5e0!3m2!1svi!2s!4v1574389376653!5m2!1svi!2s"
              frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
