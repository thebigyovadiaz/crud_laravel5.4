<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First CRUD | Laravel 5.4</title>

    <!-- Bootstrap -->
    <link href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ url('assets/bootstrap/js/html5shiv.min.js') }}"></script>
      <script src="{{ url('assets/bootstrap/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="jumbotron text-center">My First CRUD</h1>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    @include('products.fragment.info')
                    @include('products.fragment.error')
                </div>

                @yield('content')
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('assets/bootstrap/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>