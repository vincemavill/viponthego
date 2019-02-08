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
              <h2 class="text-center page-title fw-700">Contact Us</h2>
              <div class="undeline-title mx-auto"></div>
            </div>
          </div>
          <div class="col-12 py-5" >
            <div class="py-3">

                <div class="row">
<!--                   <div class="col-12 mb-5">
                    <div id="map"></div>
                  </div> -->
                  <div class="col-lg-5">
                    <div class="pt-4 pb-5">
                      <div class="row">
                        <div class="col-3">
                          <i class="fa fa-mobile footer-icon fa-3x pull-right" aria-hidden="true"></i>
                        </div>  
                        <div class="col-9">
                          <h5 class="fw-600 contact-text pr-0">SMS/Viber<br>0917-866-8442</h5>
                        </div>  
                      </div>    
                      <div class="row">
                        <div class="col-3">
                          <i class="fa fa-envelope footer-icon fa-2x pull-right pt-3" aria-hidden="true"></i>
                        </div>  
                        <div class="col-9">
                          <h5 class="fw-600 contact-text pt-4 pr-0">info@trackmate.ph</h5>
                        </div>  
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                     <!--  <h4 class="text-d1 fw-700">dfgdfg</h4> -->
                   
                    <h3 class="contact-title">SEND US A MESSAGE</h3>

                    <form id="message_form">
                      <div id="html_element">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                          <input type="text" class="form-control rounded-0 custom-input" name="the_name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                          <input type="Email" class="form-control rounded-0 custom-input" name="the_email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control rounded-0 custom-input" name="the_contact" placeholder="Contact No." required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control rounded-0 custom-input" name="the_subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control rounded-0 custom-input" name="the_message" placeholder="Message" rows="3" required=""></textarea>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LdRdDkUAAAAAOVIW_AJjKjsJ9QJnPxrgcxOE9Qp"></div>
                      </div>
                      <br>

                      <button type="submit" class="btn btn-primary rounded-0 custom-btn fw-600 message_me_btn">SEND</button>
                    </form>

                  </div>
                </div>

               

            </div>
          </div>
        </div>
      </div>

    </div>

<div class="alert alert-primary alert-dismissible fade show contact_alert position-fixed " role="alert">
  <strong>Your message has been sent. &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <div class="loader position-fixed"></div>

  @include ('navifooter/contact_footer')
  @include ('navifooter/footer')

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->




  </body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      @include ('jscript')

    <script src='https://www.google.com/recaptcha/api.js'></script>





      <script type="text/javascript">


          $(document).ready(function(){
            $("#contact_us").addClass("nav-active");
            
         });



          // function initMap() {
          //   var uluru = {lat: 14.579241, lng: 121.059575};
          //   var map = new google.maps.Map(document.getElementById('map'), {
          //     zoom: 15,
          //     center: uluru
          //   });
          //   var marker = new google.maps.Marker({
          //     position: uluru,
          //     map: map
          //   });
          //    var infowindow = new google.maps.InfoWindow({content:"The Pearl Place, Pearl Dr<br>Ortigas Center."});

          //       infowindow.open(map,marker);
          //       google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});

          // }







         new WOW().init();


         $("#message_form").submit(function(stay){

            var v = grecaptcha.getResponse();
            if(v.length == 0)
            {
  

                alert("Captcha is empty.");
            }
            else
            {
                // document.getElementById('captcha').innerHTML="Captcha completed";
            
                $('.message_me_btn').prop('disabled', true);

                $.ajax({
                    type: 'POST',
                    url: "{{ url('/') }}/send_mail",
                    data: $(this).serialize(),
                    beforeSend: function() {
                       $('.loader').show();
                    },
                    success: function (data) {
                      $('.loader').hide();
                      $(".contact_alert").fadeIn();
                      $("#message_form")[0].reset();
                      $(".message_me_btn").removeAttr("disabled");
                      grecaptcha.reset();
                      // alert(data);
                      // console.log(data);
                    },
                });

            }

            stay.preventDefault(); 
         });

      </script>

<!-- <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzOhhSpmPb5Om8XFjde2xSWKLxBRU2Bnc&callback=initMap">
</script> -->

</html>