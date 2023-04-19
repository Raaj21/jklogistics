<section class="footer">
    <div class="container">
      <div class="top-footer">
        <div class="row">
          <div class="col-md-4">
            <div class="logo-wrapper">
              <a href="#"><img src="assets/img/J-Ark/Logo.png" alt="" class="img-fluid"></a>
            </div>
            <p>Transgo shipping offers a host of logistic management services and supply chain & provide innovative
              solutions with the best.</p>
          </div>
          <div class="offset-xl-1 col-md-2">
            <div class="text-widget">
              <h4>USEFUL LINKS</h4>
              <ul class="useful-links">
                <li><a href="{{ route('index') }}">HOME</a></li>
                <li><a href="{{ route('about') }}">ABOUT US</a></li>
                <li><a href="{{route('services')}}">SERVICE</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="text-widget">
              <h4>SERVICES</h4>

              <ul class="useful-links">
              @foreach (\App\Models\Servicemaster::all() as $key => $service)
                <li><a href="{{ url('service-details/'.$service->id) }}">{{$service->name}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="text-widget">
              <h4>CONTACT US</h4>
              <div class="footer-contact">
                <div class="contact-info">
                  <div class="icon-wrapper">
                    <i class="flaticon-placeholder"></i>
                  </div>
                  <p>143 castle road 517 district, kiyev port south Canada</p>
                </div>

                <div class="contact-info">
                  <div class="icon-wrapper">
                    <i class="flaticon-placeholder"></i>
                  </div>
                  <p>+00 12 123 4567</p>
                </div>

                <div class="contact-info">
                  <div class="icon-wrapper">
                    <i class="flaticon-placeholder"></i>
                  </div>
                  <p>Info@yourmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bottom-footer">
        <p class="text-center">© Copyrights 2023J-ARK. All rights reserved.</p>
      </div>
    </div>
  </section>
  <!-- End Contact-Us Codes -->
