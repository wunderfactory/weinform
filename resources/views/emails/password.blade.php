@extends('emails.app')

@section('content')

<style type="text/css">
#title p{
	font-size: 37px;
	font-family: Helvetica;
	color: #525252;
}
.bg{
	background-color: #f0f0f0;
}
.heading_container{
	margin-bottom: 30px;
}
.wrapper{
	padding-top: 30px;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-6 col col-md-offset-3 wrapper bg">
			<div class="heading_container"><h2 id="title" class="box_rose">WUNDERSHIP</h2></div>

			<div class="infobox">
			    <div class="infobox_header">
			        <p class="box_grey"><strong>Passwort zurücksetzen</strong></p>
			    </div>
			    <div class="infobox_content">
			    	<br>
			        <p class="box_rose"><strong>Hi! Setze nun Dein Passwort zurück.</strong><br>Mit einem Klick auf den Button unten kannst Du ganz einfach Dein Passwort zurücksetzen und ein neues vergeben.</p>
			        <br>
			        <a href="{{ url('password/reset/'.$token) }}">
                          <button type="submit"  class="btn btn-default">
								Passwort zurücksetzen
                          </button>
                    </a><br>
                    <br>
                    <p class="box_rose"><strong>Vielen Dank</strong><br>
                    Dein wundership-Team</p>
			    </div> 
			</div>
		</div>
	</div>
	@include('emails.structure.footer')
</div>

</body>

@stop