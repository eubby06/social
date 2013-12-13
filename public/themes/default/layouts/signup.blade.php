<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Social Media Package</title>

    <link href="{{ social_theme_asset('css/frontend.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">@include('social.theme::default.__partials.topmenu')</div>
    </div>

    <div class="container">
    @include('social.theme::default.__partials.errors')
    @yield('content')
    </div>

      <hr>

      <footer>
        <div class="container">
        <p class="pull-right text-muted">&copy; FlashBook 2013</p>
        </div>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{ social_theme_asset('vendor/js/bootstrap.min.js') }}"></script>
    <script src="{{ social_theme_asset('vendor/js/handlebars.js') }}"></script>
    <script src="{{ social_theme_asset('js/wall.js') }}"></script>
  </body>
</html>
