<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <link href="{{ asset('/css/bernstrap.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/bern.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/bernimate.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/wundership-icon-font.css') }}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('/fonts/fontawesome/css/font-awesome.min.css') }}">
        <!--[if gt IE 7]>
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/ie.css') }}" />
        <![endif]-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-64179693-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>

        @yield('content')
    
</html>