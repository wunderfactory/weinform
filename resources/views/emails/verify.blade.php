<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body class="email_activate">
	<style type="text/css">
	.email_activate{
		background-color: #ffe2b6;
	}
	#body_wrapper{
		width: 100%;
		position: relative;
	}
	#wrapper{
		min-width: 400px;
		max-width: 700px;
		margin-left: auto;
		margin-right: auto;
		position: relative;
		min-height: 700px;
		height: 100%;
	}
	#title{
		margin-left: 20px;
	}
		#title p{
			font-size: 37px;
			font-family: Helvetica;
			color: #525252;
		}
	#activate_wrapper{
		width: 600px;
		height: 300px;
		margin-left: 20px;
	}
		#activate_wrapper p{
		font-family: Helvetica;
		color: #525252;
		}
	#logo{
		margin-top: 50px;
		margin-left: 20px;
	}
	.btn-orange {
	  color: #ffffff !important;
	  background-color: #f39200 !important;
	  border-color: #f39200 !important;
	}
	.btn-orange:hover,
	.btn-orange:focus,
	.btn-orange:active,
	.btn-orange.active,
	.open .dropdown-toggle.btn-oranged {
	  color: #ffffff !important;
	  background-color: #eea436 !important;
	  border-color: #eea436 !important;
	}
	.btn {
	  display: inline-block;
	  padding: 6px 12px;
	  margin-bottom: 0;
	  font-size: 14px;
	  font-weight: normal;
	  line-height: 1.428571429;
	  text-align: center;
	  white-space: nowrap;
	  vertical-align: middle;
	  cursor: pointer;
	  background-image: none;
	  border: 1px solid transparent;
	  border-radius: 4px;
	  -webkit-user-select: none;
	     -moz-user-select: none;
	      -ms-user-select: none;
	       -o-user-select: none;
	          user-select: none;
	}

	.btn:focus {
	  outline: thin dotted;
	  outline: 5px auto -webkit-focus-ring-color;
	  outline-offset: -2px;
	}

	.btn:hover,
	.btn:focus {
	  color: #333333;
	  text-decoration: none;
	}

	.btn:active,
	.btn.active {
	  background-image: none;
	  outline: 0;
	  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
	          box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
	}

	.btn.disabled,
	.btn[disabled],
	fieldset[disabled] .btn {
	  pointer-events: none;
	  cursor: not-allowed;
	  opacity: 0.65;
	  filter: alpha(opacity=65);
	  -webkit-box-shadow: none;
	          box-shadow: none;
	}
	.float_left{
		float: left;
		margin-right: 10px;
		font-size: 13px;
	}
	</style>

	<div id="body_wrapper">

		<div id="wrapper">

			<a href="http://esento.de"><div id="logo"><img src="{{ url('resources/aaarriba/logo_small.png') }}"></div></a>

			<div id="title"><p></p></div>

			<div id="activate_wrapper">

				{{ url('auth/email/'.$token) }}

				<hr>
				<p class="float_left">© 2015 Esento UG (haftungsbeschränkt)</p>
				<a href="{{url('/')}}"><p class="float_left">Esento.de</p></a>
				<a href="{{url('/terms')}}"><p class="float_left">AGB</p></a>
				<a href="{{url('/contact')}}"><p class="float_left">Kontakt</p></a>
				<a href="{{url('/impress')}}"><p class="float_left">Impressum</p></a>


			</div>

		</div>

	</div>

</body>
</html>