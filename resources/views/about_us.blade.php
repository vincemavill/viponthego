<!doctype html>
<html lang="en">
  <head>
    <title>TrackMate</title>
    <link rel="icon" href="{{ asset('/') }}images/icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      @include ('metatags')

      @include ('styles')

  </head>
  <body>


<div class="h-100">
  

  @include ('navifooter/navigation')
<h1 hidden>Trackmate</h1>
    <div class="container">
      <div class="col-12 pb-5 pt-3">
        <div class="row">
          <div class="col-12 ">
            <div  class="py-5">
              <h2 class="text-center page-title fw-700">Who We Are</h2>
              <div class="undeline-title mx-auto"></div>
            </div>
          </div>
          <div class="col-12 py-5 no-gutter" >
            <div class=" py-3">

                <div class="row">
                  <div class="col-lg-6 d-flex">
                    <img src="{{ asset('/') }}images/contact/contact.jpg" class="img-fluid mx-auto d-block align-self-center wow fadeIn" data-wow-delay="1.5s" alt="trackmate">
                  </div>
                  <div class="col-lg-6 py-5">
                     <!--  <h4 class="text-d1 fw-700">dfgdfg</h4> -->
                      <p class="text-p fw-400 text-justify">TrackMate is committed in offering reliable and affordable GPS Tracking solutions to SMEs and general public.</p>
                      <p class="text-p fw-400 text-justify">For security and efficiency reasons, GPS tracking is becoming a necessity not just for businesses but for individuals who wants to keep track of their vehicles and family members. </p>
                      <p class="text-p fw-400 text-justify">TrackMate provides users with convenient tracking platform accessible with SMS, mobile app and web platform. </p>
                      <p class="text-p fw-400 text-justify">Consumers are given the options to either self-install or have our technical team install the device on-site.</p>

                  </div>
                </div>

               

            </div>
          </div>
        </div>
      </div>

    </div>

  @include ('navifooter/cont_footer')
  @include ('navifooter/footer')

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->




  </body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      @include ('jscript')



      <script type="text/javascript">
          $(document).ready(function(){
            $("#about_us").addClass("nav-active");
            
         });

 new WOW().init();

      </script>
</html>