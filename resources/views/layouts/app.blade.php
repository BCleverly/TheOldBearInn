<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Old Bear Inn - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="9ZGi2g81zznXob9CqRdYBhH4c8wcUs8_WLeW3_VHyxg" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" href="/assets/css/style.css">
    {{--
     <script async>
         var _gaq=[['_setAccount','UA-10001812-7'],['_trackPageview']];
         (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
             g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
             s.parentNode.insertBefore(g,s)}(document,'script'));
     </script>

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-10001812-7','auto');ga('send','pageview');
    </script>--}}
</head>
<body onload="">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">The Old Bear Inn</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li {{ Request::is('/') ? 'class=active' : '' }}><a href="{{ route('home') }}">Home</a></li>
                {{--<li {{ Request::is('drinks') ? 'class=active' : '' }}><a href="{{ route('drinks') }}">Drinks</a></li>--}}
                {{--<li {{ Request::is('entertainment') ? 'class=active' : '' }}><a href="{{ route('entertainment') }}">Entertainment</a></li>--}}
                <li {{ Request::is('accommodation') ? 'class=active' : '' }}><a href="{{ route('accommodation') }}">Accommodation</a></li>
                <li {{ Request::is('contact') ? 'class=active' : '' }}><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="http://securebooking.eviivo.com/mywebsite/BearSN66AP.home" target="_blank">Book a Room</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row">
<div class="col">
<h1>Following government guidelines, we'll be opening on the 4th of July.</h1>
</div>
</div>
</div>
@yield('body')
<footer id="footerContainer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <address>
                    <span><strong>The Old Bear Inn</strong>, Cricklade, Swindon, Wilthsire, SN6 6AA,</span> <abbr title="Telephone">t:</abbr> 01793 750005
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="http://www.arkells.com/" target="_blank"><img src="/assets/images/arkells.png" width="150" height="153" alt="Arkells"></a>
            </div>
        </div>
        <div class="row" id="copyright">
            <div class="col-md-12 text-center">
                &copy; 2015-{{date('Y')}} - The Old Bear Inn - Developed by <a href="http://www.bencleverly.me" target="_blank">Ben Cleverly</a>
            </div>
        </div>
    </div>
</footer>
<script src="/assets/js/libs.js"></script>
<script src="/assets/js/app.js"></script>
@yield('after-scripts')
</body>
</html>
