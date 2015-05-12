@extends('app')

@section('content')

<div class="auth_area">

    <div id="choose_register" class="container">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3">
                <div class="warningbox">
                    <div class="header">
                        <div class="col-md-1"><i class="pe-7s-gleam"></i></div>
                        <div class="col-md-10"><p><strong>Hi! Schön, dass Du Dich registrieren möchtest!</strong></p></div> 
                    </div>
                    <div class="content choose_container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Registriere Dich mit Facebook</h4>
                                <a id="facebook_login" class="facebook" href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook fa-fw"></i></a>
                                <p class="info_text">Dauert nur eine Minute und wir werden <strong>niemals</strong> etwas ohne Deine Zustimmung <strong>posten</strong>.</p>
                            </div>
                        </div>
                        <hr class="info_text">
                        <div class="row">
                            <p class="info_text">Registriere Dich mit Deiner <strong><a href="{{ url('auth/register') }}">E-Mail-Adresse</a></strong></p>
                        </div>
                    </div> 
                </div>          
    		</div>
    	</div>
    </div>

</div>

@endsection
