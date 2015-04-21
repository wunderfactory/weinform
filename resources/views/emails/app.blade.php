<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="{{ asset('gsd/bootstrap3/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- BOX SYSTEM -->
	<link href="{{ asset('/css/box_system.css') }}" rel="stylesheet">
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
</head>

<style type="text/css">
#email_body{
	background-color: #f0f0f0;
}
.email_grey{
	color: #828282;
}
</style>

	<body id="email_body">
	@yield('content')
	</body>

</html>