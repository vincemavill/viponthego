<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>VIP ONTHEGO</title>

    <link rel="icon" href="{{ asset('/') }}img/vipicon.png">
    <!-- Bootstrap -->
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/thecss.css" rel="stylesheet">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800,800i|Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="{{ asset('/') }}css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
    <div class="mycontainer">
        @include('navfoo/navigation')
        <div class="a-row paralax-c" data-stellar-background-ratio="0.4">
            <div class="vertical-center a-vh">
                <div class="container">
                    
                </div>
            </div>
        </div>
        <div class="b-row">
            <div class="vertical-center b-vh">
                <div class="container row-pad">
                    <div class="row-tit">
                        <div class="col-lg-12">
                            <h2 class="dark-c rale-f text-center">EXPERIENCES AND TRAVELS</h2>
                            <div class="border-tit center-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-8 col-lg-offset-2">
                            <p class="open-f text-center make-justify"> At VIP on the GO we can create you the best  package experience ever. With our worldwide partners we work hard to find you the best unique ideas for your corporate or personal events.  Want to eat a  romantic supper on a yacht in Dubai, Italy even in Europe no problem we got you covered. Air balloon ride for two in France after a nice lunch at the tour Eiffel we can help you to realize that dream.</p>

                            <p class="open-f text-center make-justify"> For People that wants a rush why not a test drive of a beautiful  lamborghini aventador .We have several location for you to try this V12 motor. Miami , Dubai Las Vegas  also Montreal and plenty more locations to come.</p>

                            <p class="open-f text-center make-justify"> Just tell us your dream and our team will create the package for you. Need a little inspiration no problem we have a couple ideas waiting for you .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-row gray-bg">
            <div class="vertical-center b-vh">
                <div class="container row-pad">
                    <div class="col-lg-12">
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/packages/p1.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="goldm-bg">
                                <h4 class="open-f fw-600 text-center price-pac">SAFARI TRIP</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/packages/p2.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="goldm-bg">
                                <h4 class="open-f fw-600 text-center price-pac">DINNER ON THE YATCH</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/packages/p3.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="goldm-bg">
                                <h4 class="open-f fw-600 text-center price-pac">HOT AIR BALLOON RIDE</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/packages/p4.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="goldm-bg">
                                <h4 class="open-f fw-600 text-center price-pac">AIR PLAIN TICKETS</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/packages/p5.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="goldm-bg">
                                <h4 class="open-f fw-600 text-center price-pac">TRAVEL & TOUR</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/packages/p6.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="goldm-bg">
                                <h4 class="open-f fw-600 text-center price-pac">SPORT CARS</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('contact')
        @include('navfoo/footer')


    </div>
  </body>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>

        <!-- PARALLAX -->
    <script src="{{ asset('/') }}js/jquery.stellar.js"></script>

    <!-- ANIMATE SCROLL -->
    <script src="{{ asset('/') }}js/animatescroll.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            $("#packages").addClass('navactive');
        });
                    
        $(function(){
          $.stellar({
            horizontalScrolling: false,
            verticalOffset: 20
          });
        });


    function click_scroll($link){
        $($link).animatescroll({scrollSpeed:2500,easing:'easeOutSine'});
        $(".navbar-collapse").collapse('hide');
        // $(".navlink").removeClass('navactive');
        // $("#contact").addClass('navactive');
    }





    $("#vip_inquiry").submit(function(stay){

      // $("#btn_contact").attr("disabled", true);

        $.ajax({
            type: 'POST',
            url: "{{ url('/') }}/testing/send_inquiry",
            data: $(this).serialize(),
            // beforeSend: function() {
            // $('.loader').show();
            // },
            success: function (data) {
              // $('.loader').hide();
              // $(".success-alert").fadeIn();
              $("#vip_inquiry")[0].reset();
              alert(data);
              console.log(data);
            },
        });
        stay.preventDefault(); 

    });





    </script>
</html>