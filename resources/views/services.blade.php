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
        <div class="a-row paralax-b" data-stellar-background-ratio="0.7">
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
                            <h2 class="dark-c rale-f text-center">CORPORATE SERVICES</h2>
                            <div class="border-tit center-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-8 col-lg-offset-2">
                            <p class="open-f text-left make-justify">VIP on the GO  provide corporate services to CEO, managers, even small business   who do not have the time,  space  or no desire to hire a staff person full-time. Our services include administrative , web, graphic design, social media marketing, search engine optimization , content development,  , Web Design and plenty more. For more information please contact us.</p>
                            <p class="open-f text-left make-justify">Our goal is to be  proactive with our clients.  Clients work with our Virtual Assistant team to cut costs, create high-performance businesses and free themselves from the frustration of trying to figure it out or do it all. With VIP on the GO we can take care of your projects and administration needs , it will give you more time to grow your business. Contact us now for the our corporate price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-row gray-bg">
            <div class="vertical-center b-vh">
                <div class="col-lg-10 col-lg-offset-1 row-pad">
                    <div class="col-lg-12">
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/services/h1.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="white-bg" >
                                <div class="cat-pad">
                                    <h4 class="rale-f fw-600 text-center">BUSINESS</h4>
                                    <p class="text-center open-f cat-p">A virtual assistant to help you with your task.</p>
                                    <div>
                                        <a href="{{ url('/') }}/business" class="gold-f text-center"><h4>READ MORE</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/services/h2.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="white-bg" >
                                <div class="cat-pad">
                                    <h4 class="rale-f fw-600 text-center">WEB & GRAPHIC DESIGN</h4>
                                    <p class="text-center open-f cat-p">We can help you with your website needs.We have Graphic & Web designer at your services.</p>
                                    <div>
                                        <a href="{{ url('/') }}/webgraphic" class="gold-f text-center"><h4>READ MORE</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/services/h3.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="white-bg" >
                                <div class="cat-pad">
                                    <h4 class="rale-f fw-600 text-center">OFFICE FINDER SERVICE</h4>
                                    <p class="text-center open-f cat-p">We can find you a temporary office worldwide.</p>
                                    <div>
                                        <a href="{{ url('/') }}/officefinder" class="gold-f text-center"><h4>READ MORE</h4></a>
                                    </div>
                                </div>
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