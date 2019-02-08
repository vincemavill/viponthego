<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Project name</a> -->
      <img src="{{ asset('/')}}img/navlogo.png" class="img-responsive web-logo" alt="Mindfox">
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class=" rale-f fw-600"><a id="about" href="/testing/home" class="navlink">ABOUT US</a></li>
        <li class=" rale-f fw-600"><a id="services" href="/testing/corporate_services" class="navlink">CORPORATE SERVICES</a></li>
        <li class=" rale-f fw-600"><a id="packages" href="/testing/packages" class="navlink">PACKAGES</a></li>
        <li class=" rale-f fw-600"><a id="contact" onclick="click_scroll('#contact_row')" class="navlink">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>