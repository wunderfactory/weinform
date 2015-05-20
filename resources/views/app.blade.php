<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>wundership</title>
    <link href="{{ asset('gsd/bootstrap3/css/bootstrap.min.css') }}" rel="stylesheet" />

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- BUTTONS -->
	<link href="{{ asset('/css/buttons.css') }}" rel="stylesheet">
	<!-- / -->
	<link href="{{ asset('gsd/css/gsdk.css') }}" rel="stylesheet"/>
    <link href="{{ asset('gsd/css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('gsd/css/examples.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('gsd/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('gsd/css/chartist.min.css') }}" rel="stylesheet" />
    <!-- LOGIN REGISTER CREATIVE TIM -->
    <link href="{{ asset('creative_tim/login_register/login-register.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>


	<!-- Custom style sheets LESS LESS LESS -->
	<link href="{{ asset('/css/wundership.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/patstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/dashboard_area.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/product_area.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/profile_area.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/auth_area.css') }}" rel="stylesheet">

    @yield('style')

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>

	@include('structure.navbar')
    <div style="margin-top: 84px;">
        @yield('userbar')
        @foreach ($errors->all('<p class="alert alert-warning">:message</p>') as $error)
            {!! $error !!}
        @endforeach
	    @yield('content')
    </div>
	@include('structure.footer')
	<!-- Scripts -->

	<script src="{{ URL::asset('gsd/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('gsd/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

	<script src="{{URL::asset('gsd/bootstrap3/js/bootstrap.js')}}" type="text/javascript"></script>

	<script src="{{ asset('creative_tim/login_register/login-register.js') }}" type="text/javascript"></script>

	
	<!--  Plugins -->
	<script src="{{ URL::asset('gsd/js/gsdk-checkbox.js')}}"></script>
	<script src="{{URL::asset('gsd/js/gsdk-morphing.js')}}"></script>
	<script src="{{URL::asset('gsd/js/gsdk-radio.js')}}"></script>
	<script src="{{URL::asset('gsd/js/gsdk-bootstrapswitch.js')}}"></script>
	<script src="{{URL::asset('gsd/js/bootstrap-select.js')}}"></script>
	<script src="{{URL::asset('gsd/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::asset('gsd/js/chartist.min.js')}}"></script>
    <script src="{{URL::asset('gsd/js/jquery.tagsinput.js')}}"></script>
	
	<!-- GSDK Pro functions -->
	<script src="{{ URL::asset('gsd/js/get-shit-done.js') }}"></script>
    <script src="{{ URL::asset('gsd/js/demo.js') }}"></script>

    <!-- Datetimepicker -->
    <script src="{{ asset('datetimepicker/jquery.datetimepicker.js') }}"></script>

    @yield('script')

    <script>
        jQuery('#datetimepicker_collect').datetimepicker({
            lang:'de',
            i18n: {
                de: {
                    months: [
                        'Januar','Februar','März','April',
                        'Mai','Juni','Juli','August',
                        'September','Oktober','November','Dezember'
                    ],
                    dayOfWeek: [
                        "So.", "Mo", "Di", "Mi",
                        "Do", "Fr", "Sa."
                    ]
                }
            },
            timepicker:true,
            format:'d.m.Y H:i',
            minTime: '08:00',
            maxTime: '20:30',
            inline: true,
            mask: true,
            step: 30
        });
        jQuery('#datetimepicker_deliver').datetimepicker({
            lang:'de',
            i18n: {
                de: {
                    months: [
                        'Januar','Februar','März','April',
                        'Mai','Juni','Juli','August',
                        'September','Oktober','November','Dezember'
                    ],
                    dayOfWeek: [
                        "So.", "Mo", "Di", "Mi",
                        "Do", "Fr", "Sa."
                    ]
                }
            },
            timepicker:true,
            format:'d.m.Y H:i',
            minTime: '08:00',
            maxTime: '20:30',
            inline: true,
            mask: true,
            step: 30
        });
    </script>

</body>
</html>
