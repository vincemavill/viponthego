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
                            <img src="{{ asset('/')}}img/services/h3.jpg" class="img-responsive center-block border-gold" alt="Mindfox">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="col-md-12">
                            <div class="row-tit">
                                <h2 class="dark-c rale-f">OFFICE FINDER SERVICE</h2>
                                <div class="border-tit"></div>
                                <br>
                            </div>
                            
                            
                                <p class="open-f text-left make-justify">We can find you a temporary office worldwide.</p>
                                <p class="open-f text-left make-justify">VIP on the GO finds flexible workspaces for your businesses needs worldwide,from smaller businesses to big enterprise.</p>
                                <p class="open-f text-left make-justify">With Partners in more than 100 countries all over the world, we can find you the space you want  long or short term.</p>
                                <br>
                                <!-- <h3 class="open-f">Research price starting at</h3> -->

                                <div class="gold-bg col-lg-12" >
                                    <h4 class="open-f  text-center price-pac white-c">Research price starting at $99.95</h4>
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