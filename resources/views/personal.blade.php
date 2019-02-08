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
              <h2 class="text-center page-title fw-700">Personal Tracker</h2>
              <div class="undeline-title mx-auto"></div>
            </div>
          </div>
          <div class="col-12 py-4" >
            <div class="col-12 no-gutter">

              <?php $i = 0; ?>
              @foreach ($personals_list as  $title => $value) 
                <?php $number = $i++; ?>

                <div class="row">
  
                  <div class="col-md-6 no-gutter">
                    <img src="{{ asset('/') }}images/products/{{ $personal_pic[$number]->type }}/{{ $personal_pic[$number]->picture_id }}.jpg" class="img-fluid mx-auto d-block"alt="trackmate">
                  </div>
                  <div class="col-md-6 no-gutter pt-5">
                      <h4 class="text-d1 fw-700">{{ $title }}</h4>


                      @if($personal_pic[$number]->prod_price > "0.00")
                        <h3 class="prize-text fw-700 ml-4"><span>&#8369;</span> {{ $personal_pic[$number]->prod_price }}</h3>
                      @else 
                        <h3 class="prize-text fw-700 ml-4">NOT AVAILABLE</h3>
                      @endif

                      <p class="text-d1 fw-400">Features:</p>
                      <ul class="">
                      @foreach ($value as $final_value) 
                        
                          <li class=" prod-desc">{{ $final_value->content }}</li>
                      @endforeach
                      </ul>


                      @if($personal_pic[$number]->install_price > "0.00")

                        <p class="text-d1 fw-400">Installation Fee:</p>
                        <ul class="">
                            <li class=" prod-desc">{{ $personal_pic[$number]->loc_content }} - {{ $personal_pic[$number]->install_price }}</li>
                            <li class=" prod-desc">
                              For nearby provinces – please contact us
                            </li>
                        </ul>

                      @endif


                  </div>
             
                </div>

              @endforeach
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
            $("#products").addClass("nav-active");
          });


 new WOW().init();

</script>

</html>