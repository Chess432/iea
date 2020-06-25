<!--================ Start of Navigation Menu =================-->
<header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light" >
      <div class="container-fluid">
        <a class="navbar-brand logo_h" href="/iea/public" class="img-fluid"><img src="{{ asset('images/IEA-LOGO.png') }}" alt="Interactive E-Learning Africa"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          {{-- <ul class="navbar-nav mr-auto"> --}}
            <ul class="nav navbar-nav menu_nav justify-content-end mr-auto">
            <li class="nav-item active"><a class="nav-link" href="/iea/public/">Home</a></li>  
            <li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Software Development</a>
              <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/web-and-app-development">Web design and App development</a></li>
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/custom-software">Custom Software Development</a></li>                  
              </ul>
            </li>
            <li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">eLearning Services</a>
              <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/services/mobile-learning">Mobile Learning</a></li>
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/flash-to-html5">Flash to HTML5 conversion</a></li>
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/rapid-development">Rapid eLearning Development Solutions</a></li>
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/blended-learning">Blended Learning Solutions</a></li>
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/localization-and-translation">Localization and Translation</a></li>                  
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/gamification">Gamification</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="/services/learning-management-system">Learning Management System</a></li> 
                  <li class="nav-item"><a class="nav-link" href="/services/legacy-content-conversion">Legacy content conversion</a></li> -->
                  <li class="nav-item"><a class="nav-link" href="/iea/public/services/custom-content-development">Custom eLearning Content Development</a></li>                                 
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/iea/public/services/animation">Animation</a></li>
            <li class="nav-item"><a class="nav-link" href="/iea/public/about">Our Approach</a></li>
            <li class="nav-item"><a class="nav-link" href="/iea/public/contact">Contact us</a></li>
            @auth
            <li class="nav-item"><a class="nav-link btn btn-secondary text-white" href="/iea/public/license">Admin</a></li>
            @endauth
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </div> 
      </div>
    </nav>
  </div>
</header>
<!--================ End of navigation Menu =================-->


{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand logo_h" href="/" class="img-fluid"><img src="{{ asset('images/IEA-LOGO.png') }}" alt="Interactive E-Learning Africa"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>  
            <li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Software Development</a>
              <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/services/web-and-app-development">Web design and App development</a></li>
                  <li class="nav-item"><a class="nav-link" href="/services/custom-software">Custom Software Development</a></li>                  
              </ul>
            </li>
            <li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">eLearning Services</a>
              <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/services/mobile-learning">Mobile Learning</a></li>
                  <li class="nav-item"><a class="nav-link" href="/services/flash-to-html5">Flash to HTML5 conversion</a></li>
                  <li class="nav-item"><a class="nav-link" href="/services/rapid-development">Rapid eLearning Development Solutions</a></li>
                  <li class="nav-item"><a class="nav-link" href="/services/blended-learning">Blended Learning Solutions</a></li>
                  <li class="nav-item"><a class="nav-link" href="/services/localization-and-translation">Localization and Translation</a></li>                  
                  <li class="nav-item"><a class="nav-link" href="/services/gamification">Gamification</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="/services/learning-management-system">Learning Management System</a></li> 
                  <li class="nav-item"><a class="nav-link" href="/services/legacy-content-conversion">Legacy content conversion</a></li> -->
                  <li class="nav-item"><a class="nav-link" href="/services/custom-content-development">Custom eLearning Content Development</a></li>                                 
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/services/animation">Animation</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">Our Approach</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact us</a></li>

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav> --}}