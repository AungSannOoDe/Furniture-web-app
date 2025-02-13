<!doctype html>
<html lang="en">
  <head>
    <title> furniture</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href= {{asset("css/style.css")}}>

    </head>
    <body>
    <section class="ftco-section">
        <div class="container">
           @yield('Content')
                </div>
            </div>
        </div>
    </section>

    <script src={{asset("js/jquery.min.js")}} ></script>
  <script src={{asset("js/popper.js")}}></script>
  <script src= {{asset("js/bootstrap.min.js")}}></script>
  <script src= {{asset("js/main.js")}}></script>

    </body>
</html>
