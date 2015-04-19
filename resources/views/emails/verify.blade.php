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
	<body class="email_activate">
	<style type="text/css">
	.heading_container{
		margin-bottom: 30px;
	}
	.heading{
		color: #ea555c;
	}
	.email_activate{
		background-color: #f0f0f0;
	}
	#body_wrapper{
		width: 100%;
		position: relative;
	}
	.wrapper{
		padding-top: 30px;
	}
	</style>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col col-md-offset-3 wrapper">
				<div class="heading_container"><h2 class="heading">wundership Account</h2></div>

				<div class="infobox">
				    <div class="infobox_header">
				        <p class="box_grey"><strong>Jetzt E-Mail-Adresse bestätigen</strong></p>
				    </div>
				    <div class="infobox_content">
				    	<br>
				        <p class="box_rose"><strong>Hi! Schön, dass Du da bist.</strong><br>Bestätige jetzt Deine E-Mail-Adresse, um Dein Konto zu aktivieren.</p>
				        <br>
				        <a href="{{ url('auth/email/'.$token) }}">
	                          <button type="submit"  class="btn btn-default">
									E-Mail-Adresse bestätigen
	                          </button>
	                    </a><br>
	                    <br>
	                    <p class="box_rose"><strong>Vielen Dank</strong><br>
	                    Das wundership-Team</p>
				    </div> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col col-md-offset-3">
			<div class="row">
				<div class="col-md-3">
					<p class="box_grey">wundership.com</p>
				</div>
				<div class="col-md-2">
					<p class="box_grey">AGB</p>
				</div>
				<div class="col-md-2">
					<p class="box_grey">Kontakt</p>
				</div>
				<div class="col-md-2">
					<p class="box_grey">Impressum</p>
				</div>
			</div>
		</div>

	</div>

</body>
</html>