<!-- Harish Header New Codes -->

<div class="header-area">
    <div class="info-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-8">
            <ul class="social-links">
            <li><a href="#"><img src=" {{ asset('assets/img/New/Header/fb.png') }}" alt=""></a></li>
              <li><a href="#"><img src=" {{ asset('assets/img/New/Header/twitter.png') }}" alt=""></li>
              <li><a href="#"><img src=" {{ asset('assets/img/New/Header/linkdin.png') }}" alt=""></a></li>
              <li><a href="#"><img src="  {{ asset('assets/img/New/Header/google.png') }}" alt=""></a></li>
            </ul>
          </div>
          <div class="col-lg-8 col-4">
            <div class="right-content">
              <span class="working-time">Opening Hours : Monday - Saturday 9 am to 5 pm</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="support-nav-area" style="background-color: #1f415f;" id = "header">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="logo-wrapper mt-4">
              <div class="logo-wrapper-inner">
                <a href="{{ route('index') }}">
                  <img src="{{ asset('assets/img/New/Logo.png') }}" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-6 position-lg-relative position-static">
            <div class="support-bar">
              <div class="row">
                <div class="offset-xl-4 col-xl-8 offset-2 col-10">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="support-info">

                        <div class="left-content"><img src=" {{ asset('assets/img/New/Header/call.png') }}" alt=""></div>
                        <div class="right-content">
                          <div class="right-content-inner">
                            <h5>Free Call</h5>
                            <p>+ 00 12 123 456</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="support-info">
                        <div class="left-content"><img src="{{ asset('assets/img/New/Header/message.png') }}" alt=""></div>
                        <div class="right-content">
                          <h5>Mail us</h5>
                          <p>Support@mail.com </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <a href="#" class="boxed-btn"><span>Get a quote</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="navbar-area">
              <div class="row justify-content-end">
                <div class="col-lg-9 d-lg-block d-none">
                  <nav class="main-menu" id="mainMenu">
                    <ul class=" ">
                      <li id="menu-item-172"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-172">
                        <a title="HOME" href="{{ route('index') }}">HOME</a>
                      </li>

                      <li id="menu-item-193"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a
                          title="ABOUT US" href="{{ route('about') }}">ABOUT US</a>
                      </li>

                      <li id="menu-item-194"
                        class="dropdown-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-194 dropdown dropdown-submenus">
                        <a title="SERVICES" href="{{route('services')}}">SERVICES</a>
                        <ul role="menu" class="submenu">
                        @foreach (\App\Models\Servicemaster::all() as $key => $service)
                          <li id="menu-item-195"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195"><a
                              title="{{$service->name}}" href="{{ url('service-details/'.$service->id) }}" aria-haspopup="true"
                              aria-expanded="false">{{$service->name}}</a></li>
                              @endforeach
                        </ul>
                      </li>

                      <li id="menu-item-209"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a
                          title="CONTACT" href="#">CONTACT</a>
                        </li>

                    </ul>
                    <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Harish Header End Codes -->
