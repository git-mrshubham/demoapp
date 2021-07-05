<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Install Demo App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        html, body {
        height: 100%;
        }

        .bg-color {
            width: 100%;
            height: auto;
            min-height: 100% !important;
            background: #4e4376;
            background: -webkit-linear-gradient(to bottom, #2b5876, #4e4376);
            background: linear-gradient(to bottom, #2b5876, #4e4376);

        }
        body::after {
            content: "";
            background-image: url("assets/group.jpg");
            opacity: 0.1;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
            <div class="row justify-content-center align-self-center" style="margin-top: 50px">
                <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3 h-100">
                    <form method="post" name="install_form">
                        @csrf
                        <input type="hidden" name="app_url" id="app_url" value="{{ env('APP_URL') }}">
                        <div class="form-group">
                            <input class="form-control form-control-lg" name="shop" id="shop" placeholder="Enter Store Url" type="text">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-lg btn-block" type="button" id="submit_btn">Install</button>
                        </div>
                  </form>
              </div>
          </div>
      </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#submit_btn').on('click',function()
        {
            var shop    = $('#shop').val();
            var app_url = $('#app_url').val();

            var redirect_url = app_url+'?shop='+shop;
           $(location).attr('href', redirect_url);
        })
    });
</script>
