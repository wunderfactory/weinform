<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <link href="{{ asset('/css/bernstrap.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/bern.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/bernimate.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/wundership-icon-font.css') }}" rel="stylesheet"/>
    </head>
    <body>
        
        @yield('content')

        <script src="{{ asset('/js/landing.js') }}" type="text/javascript"></script>
    </body>
</html>