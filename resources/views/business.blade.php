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
        <div class="b-row">
            <div class="vertical-center b-vh">
                <div class="container row-pad">
                    <div class="col-lg-6 col-lg-push-6">
                        <div class="col-md-12">
                            <img src="{{ asset('/')}}img/services/h1.jpg" class="img-responsive center-block border-gold" alt="Mindfox">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="col-md-12">
                            <div class="row-tit">
                                <h2 class="dark-c rale-f">BUSINESS</h2>
                                <div class="border-tit"></div>
                                <br>
                                <p class="open-f text-left make-justify">A virtual assistant to help you with your task.</p>
                            </div>
                            
                            
                                <p class="open-f text-left make-justify">VIP on the GO  provide corporate services to CEO, managers, even small business   who do not have the time,  space  or no desire to hire a staff person full-time. Our services include administrative , web, graphic design, social media marketing, search engine optimization , content development,  , Web Design and plenty more. For more information please contact us.</p>
                                <p class="open-f text-left make-justify">Our goal is to be  proactive with our clients.  Clients work with our Virtual Assistant team to cut costs, create high-performance businesses and free themselves from the frustration of trying to figure it out or do it all. With VIP on the GO we can take care of your projects and administration needs , it will give you more time to grow your business. Contact us now for the our corporate price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-row gray-bg">
            <div class="vertical-center b-vh">
                <div class="container row-pad">
                    <div class="col-lg-12 ">
                        <div class="col-lg-3 col-md-3  column-pad">

                            <div class="gold-bg col-lg-12" >
                                <h4 class="rale-f  text-center price-pac white-c">DIRECTOR PLAN</h4>
                            </div>
                            <div class="smwhite-bg col-lg-12" >
                                <h2 class="open-f text-center hour-s fw-700">5</h2>
                                <h3 class="open-f text-center hour-b fw-600">HOURS</h3>
                            </div>
                            <div class="dargray-bg col-lg-12" >
                                <h4 class="open-f  text-center price-pac dark-c fw-600">$79.95 /month</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3   column-pad">
                            <div class="gold-bg col-lg-12" >
                                <h4 class="rale-f  text-center price-pac white-c">VIP PLAN</h4>
                            </div>
                            <div class="smwhite-bg col-lg-12" >
                                <h2 class="open-f text-center hour-s fw-700">10</h2>
                                <img src="{{ asset('/')}}img/services/popular.png" width="70" class="img-responsive position-ab" alt="Mindfox">
                                <h3 class="open-f text-center hour-b fw-600">HOURS</h3>

                            </div>
                            <div class="dargray-bg col-lg-12" >
                                <h4 class="open-f  text-center price-pac dark-c fw-600">$139.95 /month</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3   column-pad">
                            <div class="gold-bg col-lg-12" >
                                <h4 class="rale-f  text-center price-pac white-c">EXECUTIVE PLAN</h4>
                            </div>
                            <div class="smwhite-bg col-lg-12" >
                                <h2 class="open-f text-center hour-s fw-700">20</h2>
                                <h3 class="open-f text-center hour-b fw-600">HOURS</h3>
                            </div>
                            <div class="dargray-bg col-lg-12" >
                                <h4 class="open-f  text-center price-pac dark-c fw-600">$259.95 /month</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  column-pad">
                            <div class="gold-bg col-lg-12" >
                                <h4 class="rale-f  text-center price-pac white-c">PRESIDENT PLAN</h4>
                            </div>
                            <div class="smwhite-bg col-lg-12" >
                                <h2 class="open-f text-center hour-s fw-700">40</h2>
                                <h3 class="open-f text-center hour-b fw-600">HOURS</h3>
                            </div>
                            <div class="dargray-bg col-lg-12" >
                                <h4 class="open-f  text-center price-pac dark-c fw-600">$399.95 /month</h4>
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
            $("#services").addClass('navactive');
        });
                    
        $(function(){
          $.stellar({
            horizontalScrolling: false,
            verticalOffset: 20
          });
        });

    function click_scroll($link){
        $($link).animatescroll({scrollSpeed:2000,easing:'easeOutSine'});
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