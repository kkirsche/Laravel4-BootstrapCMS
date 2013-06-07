<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BootstrapCMS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/flat-ui.css') }}">
        <style>
            body {
                padding-top: 80px;
            }
        </style>
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-responsive.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

        <script src="{{ URL::asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/?locale=en">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">BootstrapCMS</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        @if (Auth::guest())
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        @endif
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        @yield('bodyContent')

        <div class="bottom-menu bottom-menu-large">
      <div class="container">
        <div class="row">
          <div class="span2 brand">
            <a href="#fakelink" class="fui-flat"></a>
          </div>

          <div class="span2">
            <h5 class="title">About Us</h5>
            <ul class="bottom-links">
              <li><a href="#fakelink">Dashboard</a></li>
              <li><a href="#fakelink">Feed</a></li>
              <li><a href="#fakelink">Forums</a></li>
              <li><a href="#fakelink">Radio</a></li>
              <li><a href="#fakelink">Journal</a></li>
              <li><a href="#fakelink">Reader</a></li>
              <li><a href="#fakelink">Store</a></li>
            </ul>
          </div>

          <div class="span2">
            <h5 class="title">Categories</h5>
            <ul class="bottom-links">
              <li><a href="#fakelink">Design</a></li>
              <li><a href="#fakelink">Freebies</a></li>
              <li><a href="#fakelink">Tutorials</a></li>
              <li><a href="#fakelink">Coding</a></li>
              <li><a href="#fakelink">Inspiration</a></li>
              <li><a href="#fakelink">WordPress</a></li>
              <li><a href="#fakelink">Resources</a></li>
            </ul>
          </div>

          <div class="span2">
            <h5 class="title">Networks</h5>
            <ul class="bottom-links">
              <li><a href="#fakelink">Insight</a></li>
              <li><a href="#fakelink">Promotion</a></li>
              <li><a href="#fakelink">Production</a></li>
              <li><a href="#fakelink">Planning</a></li>
              <li><a href="#fakelink">Journal</a></li>
              <li><a href="#fakelink">Reader</a></li>
              <li><a href="#fakelink">Store</a></li>
            </ul>
          </div>

          <div class="span2">
            <h5 class="title">Mainframe</h5>
            <ul class="bottom-links">
              <li><a href="#fakelink">Register / Login</a></li>
              <li class="active"><a href="#fakelink">Jobs</a></li>
              <li><a href="#fakelink">Contacts</a></li>
              <li><a href="#fakelink">Privacy</a></li>
              <li><a href="#fakelink">Terms of Use</a></li>
            </ul>
          </div>

          <div class="span2">
            <h5 class="title">Follow Us</h5>
            <ul class="bottom-links">
              <li><a href="#fakelink">Facebook</a></li>
              <li><a href="#fakelink">Twitter</a></li>
              <li><a href="#fakelink">Youtube</a></li>
              <li><a href="#fakelink">Vimeo</a></li>
              <li><a href="#fakelink">Instagram</a></li>
              <li><a href="#fakelink">Vine <span class="label label-small label-primary">New</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::asset('js/vendor/jquery-1.9.1.min.js') }}"><\/script>')</script>

        <script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ URL::asset('js/plugins.js') }}"></script>
        <script src="{{ URL::asset('js/main.js') }}"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
