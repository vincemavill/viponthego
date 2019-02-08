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
              <h2 class="text-center page-title fw-700">FAQ</h2>
              <div class="undeline-title mx-auto"></div>
            </div>
          </div>
          <div class="col-12 no-gutter" >
   

              
<div id="accordion" role="tablist">

  @foreach ($faq_list as $faq_row)
    <div class="card rounded-0 my-4">
      <div class="card-header py-4" role="tab" id="headingOne" data-toggle="collapse" href="#faq{{ $faq_row->question_id }}">
        <h5 class="mb-0 faq-text fw-700 mx-2">
          
          {{ $faq_row->question }}
          <span class="float-right"><i class="fa fa-plus faq-icon-plus" aria-hidden="true"></i></span>

        </h5>

      </div>

      <div id="faq{{ $faq_row->question_id }}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <p class="text-p fw-400 mb-0 mx-3 my-4 text-justify">
            {{ $faq_row->answer }}
          </p>
        </div>
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
            $("#faq").addClass("nav-active");
            $(this).find('.faq-icon-minus').hide();
            
        });




 new WOW().init();

      </script>
</html>