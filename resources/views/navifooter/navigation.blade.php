    <nav class="navbar navbar-expand-lg navbar-light navigation-bar">
      <div class="container">

        <a class="navbar-brand " href="{{ url('/') }}">
          <img src="{{ asset('/') }}images/nav_logo.png" id="nav_logo" class="img-fluid position-absolute nav-logo pr-5 wow bounceInLeft" width="370" alt="trackmate">
          <img src="{{ asset('/') }}images/nav_logo_m.png" id="nav_logo_m" class="img-fluid position-absolute nav-logo-m wow bounceInLeft" width="202" alt="trackmate">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-menu" id="home" href="{{ url('/home') }}">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-menu" id="products" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PRODUCTS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item nav-drd" href="{{ url('/vehicle') }}">Vehicle GPS Tracker</a>
                <a class="dropdown-item nav-drd" href="{{ url('/personal') }}">Personal GPS Tracker</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-menu" id="faq" href="{{ url('/f_a_q') }}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-menu" id="about_us" href="{{ url('/about') }}">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-menu" id="contact_us" href="{{ url('/contact') }}">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>