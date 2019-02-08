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



  </head>
  <body>
    <div class="mycontainer black-bg">

        <div class="z-row">
            <div class="vertical-center z-vh">
                <div class="col-lg-12">
                    <div class="center-block">
                        <img src="{{ asset('/') }}img/viplogo.png" width="400" class="img-responsive center-block">
                        <h2 class="white-c text-center open-f">404 PAGE NOT FOUND</h2>
                        <br><br>
                        
                            <button type="button" onclick="redirect()" class="btn btn-primary btn-cust center-block open-f" id="send_btn">
                                www.viponthego.com
                            </button>

                    </div>
                </div>
            </div>
        </div>



    </div>
  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>

    <script type="text/javascript">
         function redirect() {
               window.location="{{ url('/') }}";
            }
    </script>
</html>