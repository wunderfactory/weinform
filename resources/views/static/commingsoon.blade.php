@extends('v1_app')

@section('content')

<body class="comingsoonbody">

	<section class="commingsoon">
		<span class="icon-logo"></span>
		<h1>Comming soon</h1>
		<h2>wundership startet bald...</h2>
		<a href="{{url('/')}}" class="bt bt-second-fill">Zurück zur Startseite</a>
		<a href="{{url('/impressum')}}"><p class="impressum">Impressum</p></a>
	</section>

</body>

@stop