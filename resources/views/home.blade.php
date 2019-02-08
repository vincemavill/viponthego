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
        <div class="a-row paralax-a" data-stellar-background-ratio="0.7">
            <div class="vertical-center a-vh">
                <div class="container">
                    <h2 class="white-c rale-f text-center fw-700 para-f1">WELCOME TO</h2>
                    <h2 class="white-c rale-f text-center fw-700 para-f2">VIP On The Go!</h2>
                </div>
            </div>
        </div>
        <div class="b-row">
            <div class="vertical-center b-vh">
                <div class="container row-pad">
                    <div class="row-tit">
                        <div class="col-lg-12">
                            <h2 class="dark-c rale-f text-center">ABOUT US</h2>
                            <div class="border-tit center-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-8 col-lg-offset-2">
                            <p class="open-f text-center make-justify">VIP on the go is a concierge services, we are there to help busy people with their everyday needs. Need a luxury car, a private jet, a nice villa on the beach, plan a business trip or just a romantic diner on a yacht we can help you with that.  VIP on the GO is the one you need to sought out when a task needs to be professional and fast.</p>
                            <p class="open-f text-center make-justify">VIP on the GO has been managing the lives of important people. Our clients include CEO, Lawyers, Doctors as well as international clientele.We have  affiliate partners throughout the world to take care of your corporate and personal demands and also to help you managing your busy lifestyle.</p>
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
                                <img src="{{ asset('/')}}img/home/h1.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="white-bg" >
                                <div class="cat-pad">
                                    <h4 class="rale-f fw-600 text-center">LUXURY CARS RENTALS</h4>
                                    <p class="text-center open-f cat-p"> From Exotic to limousine we have you covered for all your occasions.</p>
                                    <div>
                                        <!-- <a href="#" class="gold-f text-center"><h4>READ MORE</h4></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/home/h2.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="white-bg" >
                                <div class="cat-pad">
                                    <h4 class="rale-f fw-600 text-center">LUXURY VILLA RENTALS</h4>
                                    <p class="text-center open-f cat-p">We will find you the best place to stay away from home.</p>
                                    <div>
                                        <!-- <a href="#" class="gold-f text-center"><h4>READ MORE</h4></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 column-pad">
                            <div>
                                <img src="{{ asset('/')}}img/home/h3.jpg" class="img-responsive center-block" alt="Mindfox">
                            </div>
                            <div class="white-bg" >
                                <div class="cat-pad">
                                    <h4 class="rale-f fw-600 text-center">YACHT CHARTER RENTAL</h4>
                                    <p class="text-center open-f cat-p">We have different seizes for 2 to 100 guests.Have the lifestyle you deserve</p>
                                    <div>
                                        <!-- <a href="#" class="gold-f text-center"><h4>READ MORE</h4></a> -->
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
            $("#about").addClass('navactive');
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

        $.ajax({
            type: 'POST',
            url: "{{ url('/') }}/testing/send_inquiry",
            data: $(this).serialize(),
            beforeSend: function() {
               $('.loader').show();
            },
            success: function (data) {
                $('.loader').hide();
              $("#vip_inquiry")[0].reset();
              alert(data);
              console.log(data);
            },
        });
        stay.preventDefault(); 

    });

    </script>
</html>