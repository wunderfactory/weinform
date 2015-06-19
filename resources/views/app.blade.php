<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>wundership</title>

    
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- / -->
	<link href="{{ asset('gsd/css/gsdk.css') }}" rel="stylesheet"/>
    <link href="{{ asset('gsd/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('gsd/css/chartist.min.css') }}" rel="stylesheet" />
    <!-- LOGIN REGISTER CREATIVE TIM -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('bootstrap_dropdowns_enhancement/dist/css/dropdowns-enhancement.min.css') }}">


	<!-- Custom style sheets LESS LESS LESS -->
	<link href="{{ asset('/css/wundership.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/patstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/dashboard_area.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/product_area.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/profile_area.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/views/auth_area.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/views/static_area.css') }}" rel="stylesheet">

    <!-- BUTTONS -->
    <link href="{{ asset('/css/buttons.css') }}" rel="stylesheet">

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

	<script src="{{URL::asset('js/bootstrap.js')}}" type="text/javascript"></script>

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

    <!-- Moment -->
    <script src="{{ asset('js/moment-with-locales.js') }}"></script>

    <!-- Datetimepicker -->
    <script src="{{ asset('datetimepicker/jquery.datetimepicker.js') }}"></script>

    <!-- Bootstrap Dropdown Enhancement -->
    <script src="{{ asset('bootstrap_dropdowns_enhancement/dist/js/dropdowns-enhancement.js') }}"></script>

    @yield('script')

    <script>
        Date.parseDate = function( input, format ){
            return moment(input,format).toDate();
        };
        Date.prototype.dateFormat = function( format ){
            return moment(this).format(format);
        };
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
                        "So", "Mo", "Di", "Mi",
                        "Do", "Fr", "Sa"
                    ]
                }
            },
            timepicker:true,
            format:'DD.MM.YYYY HH:mm',
            formatTime:'HH:mm',
            formatDate:'DD.MM.YYYY',
            inline: false,
            minDate: moment(),
            defaultDate: moment(),
            defaultTime: moment()
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
                        "So", "Mo", "Di", "Mi",
                        "Do", "Fr", "Sa"
                    ]
                }
            },
            timepicker:true,
            format:'DD.MM.YYYY HH:mm',
            formatTime:'HH:mm',
            formatDate:'DD.MM.YYYY',
            inline: false,
            minDate: moment(),
            defaultDate: moment(),
            defaultTime: moment()
        });
        jQuery('#day-filter').datetimepicker({
            lang: 'de',
            i18n: {
                de: {
                    months: [
                        'Januar','Februar','März','April',
                        'Mai','Juni','Juli','August',
                        'September','Oktober','November','Dezember'
                    ],
                    dayOfWeek: [
                        "So", "Mo", "Di", "Mi",
                        "Do", "Fr", "Sa"
                    ]
                }
            },
            timepicker: false,
            format: 'DD.MM.YYYY',
            formatDate: 'DD.MM.YYYY',
            inline: false,
            minDate: moment(),
            defaultDate: moment()
        });
    </script>

</body>
</html>
