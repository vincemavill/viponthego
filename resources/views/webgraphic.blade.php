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
                            <img src="{{ asset('/')}}img/services/h2.jpg" class="img-responsive center-block border-gold" alt="Mindfox">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="col-md-12">
                            <div class="row-tit">
                                <h2 class="dark-c rale-f">WEB & GRAPHIC DESIGN</h2>
                                <div class="border-tit"></div>
                                <br>
                            </div>
                            
                            
                                <p class="open-f text-left make-justify">We can help you with your website needs.We have Graphic & Web designer at your services.</p>
                                <p class="open-f text-left make-justify">With VIP on the GO are Graphic and web designer can do everything  From shape to color, and logos to brochures, we do it all and we do it well. We keep your brand identity in mind while we help you stand out from the rest.</p>
                                <p class="open-f text-left make-justify">There’s a lot to know about website development these days, and things change fast. Our web developer at VIP on the Go are  up-to-date on all the trends, so we’ve got you covered.</p>
                                <br>
                                <p class="open-f text-left make-justify"><strong>For more information please contact us below.</strong></p>
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