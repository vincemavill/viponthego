<!doctype html>
<html lang="en">
  <head>
    <title>TrackMate</title>
    <link rel="icon" href="{{ asset('/') }}images/icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      @include ('styles')

  </head>
  <body>


<div class="container-fluid d-flex h-100 comsoon">
    <div class="col-lg-12 align-self-center">
        <div>
            <img src="{{ asset('/') }}images/nav_logo.png" class="img-fluid mx-auto d-block" width="400" alt="trackmate">

                <div class="row mt-3">
                    <form class="mx-auto d-block">
                        <h3 class="contact-title text-center">Admin</h3>
                        <div class="form-group">
                            <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right rounded-0 custom-btn fw-600">Login</button>
                        </div>
                    </form>
                </div>
           
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->




  </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      @include ('jscript')

    <script type="text/javascript">
      
       new WOW().init();

    </script>

</html>