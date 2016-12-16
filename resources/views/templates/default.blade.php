



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>StarPeek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{asset('css/flatui/dist/css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Loading Flat UI -->
    <link href="{{asset('css/flatui/dist/css/flat-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{asset('css/flatui/dist/js/vendor/html5shiv.js')}}"></script>
      <script src="{{asset('css/flatui/dist/js/vendor/respond.min.js')}}"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">StarPeek</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Auditions</a></li>
            <li><a href="#about">Artists</a></li>
          <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Join</a></li>
            <li>  <button type="submit" class="btn btn-success margin-top-6" style="margin-left:10px;">Sign in</button></li>
          </ul>



        </div><!--/.nav-collapse -->
      </div>
    </div>
@yield('content')
    <footer class="footer">
      <div class="container">
        <div class="row" style="text-align:center">

        <span class="text-muted col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <a href="#">
        Contact us
      </a>
        </span>
        <span class="text-muted col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <a href="#">
        About us
      </a>
        </span>
        <span class="text-muted col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <a href="#">
      Terms of use
      </a>
        </span>

        <div  class="sicon pull-right hidden-xs hidden-sm">

    <div  class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center" >
      <div class="icon-circle">
        <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
      </div>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
      <div class="icon-circle">
        <a href="#" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
      </div>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
      <div class="icon-circle">
        <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
      </div>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
      <div class="icon-circle">
        <a href="#" class="iLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>

  </div>
  <div  class="sicon hidden-md hidden-lg col-xs-offset-3 col-sm-offset-3 col-xs-6 col-sm-6">

<div  class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center" >
<div class="icon-circle">
  <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
</div>
</div>

<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
<div class="icon-circle">
  <a href="#" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
</div>
</div>

<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
<div class="icon-circle">
  <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
</div>
</div>



</div>
      </div>
      </div>
    </footer>

    <!-- /.container -->


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="{{asset('css/flatui/dist/js/vendor/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('css/flatui/dist/js/vendor/video.js')}}"></script>
    <script src="{{asset('css/flatui/dist/js/flat-ui.min.js')}}"></script>
  </body>
</html>
