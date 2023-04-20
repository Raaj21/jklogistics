<!-- Harish Header New Codes -->

<div class="header-area">
    <!-- <div class="info-bar">
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
    </div> -->
    <div class="support-nav-area" style="background-color: #1f415f;" id = "header">
      <div class="container">
        <div class="row">
          <div class="col-lg-1 col-6">
            <div class="logo-wrapper mt-4">
              <div class="logo-wrapper-inner">
                <a href="{{ route('index') }}">
                  <img src="{{ asset('assets/img/New/Logo.png') }}" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-11 col-6 position-lg-relative position-static">
            <!-- <div class="support-bar">
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
                      <a href="{{ route('quote') }}" class="boxed-btn"><span>Get a quote</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="navbar-area">
              <div class="row justify-content-end">
                <div class="col-lg-12 d-lg-block d-none">
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

                      <li id="menu-item-194" class="dropdown-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-194 dropdown dropdown-submenus">
                        <a title="SERVICES" href="http://localhost/jklogistics/public/services">BRANCHES</a>

                        <ul role="menu" class="submenu">
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">SOUTH REGION</a>
                                </li>
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">NORTH REGION</a>
                                </li>
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">WEST REGION</a>
                                </li>
                          </ul>

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

                      <li id="menu-item-193"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a
                          title="TRACK AND RACE" href="{{ route('track') }}">TRACK & RACE</a>
                      </li>

                      <li id="menu-item-209"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a
                          title="GET A QUOTE" href="{{ route('quote') }}">GET A QUOTE</a>
                      </li>

                      <li id="menu-item-209"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a
                          title="CONTACT" href="{{route('contact')}}">CONTACT</a>
                        </li>

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
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










  <div class="container-fluid second-header" id = "header">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1f415f;">
  <a href="{{ route('index') }}">
                  <img src="{{ asset('assets/img/New/Logo.png') }}" alt="">
                </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto ">
                      <li id="menu-item-172"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-172">
                        <a title="HOME" href="{{ route('index') }}"> <i class="fa fa-home"></i> HOME</a>
                      </li>

                      <li id="menu-item-193"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a
                          title="ABOUT US" href="{{ route('about') }}"> <i class="fa fa-info"></i> ABOUT US</a>
                      </li>

                      <li id="menu-item-194" class="dropdown-toggle menu-item menu-item-type-custom d-flex menu-item-object-custom menu-item-has-children menu-item-194 dropdown dropdown-submenus">
                        <a title="SERVICES" href="http://localhost/jklogistics/public/services">BRANCHES</a>

                        <ul role="menu" class="submenu">
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">SOUTH REGION</a>
                                </li>
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">NORTH REGION</a>
                                </li>
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">WEST REGION</a>
                                </li>
                          </ul>

                      </li>

                      <!-- <li id="menu-item-194" class="dropdown-toggle menu-item menu-item-type-custom d-flex menu-item-object-custom menu-item-has-children menu-item-194 dropdown dropdown-submenus">
                        <a title="SERVICES" href="http://localhost/jklogistics/public/services">BRANCHES</a>

                        <ul role="menu" class="submenu dropdown-toggle t menu-item menu-item-type-custom d-flex menu-item-object-custom menu-item-has-children menu-item-194 dropdown dropdown-submenus">
                            <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195">
                              <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">SOUTHERN</a>

                              <ul role="menu" class="submenu subb-menu">
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">CHENNAI</a>
                                </li>
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">BANGLORE</a>
                                </li>
                                <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page">
                                  <a title="SOUTHERN" href="http://localhost/jklogistics/public/service-details/5" aria-haspopup="true" aria-expanded="false">COCHIN</a>
                                </li>
                              </ul>
                            </li>
                        </ul>
                        
                      </li> -->

                      <li id="menu-item-194"
                        class="dropdown-toggle ser menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-194 dropdown dropdown-submenus">
                        <a title="SERVICES" href="{{route('services')}}"><i class="fa fa-wrench"></i> SERVICES</a>
                        <ul role="menu" class="submenu">
                        @foreach (\App\Models\Servicemaster::all() as $key => $service)
                          <li id="menu-item-195"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195"><a
                              title="{{$service->name}}" href="{{ url('service-details/'.$service->id) }}" aria-haspopup="true"
                              aria-expanded="false">{{$service->name}}</a></li>
                              @endforeach
                        </ul>
                      </li>

                      <li id="menu-item-193"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a
                          title="TRACK AND RACE" href="{{ route('track') }}"><i class="fa fa-truck"></i> TRACK & RACE</a>
                      </li>

                      <li id="menu-item-209"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a
                          title="GET A QUOTE" href="{{ route('quote') }}"><i class="fa fa-quote-left"></i> GET A QUOTE</a>
                      </li>

                      <li id="menu-item-209"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a
                          title="CONTACT" href="#"><i class="fa fa-address-book"></i> CONTACT</a>
                      </li>

                    </ul>
  </div>
</nav>
</div>










<!-- <div class="header-area">
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
                <nav class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
    </ul>
</nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
