@extends('app')

@section('content')

<style type="text/css">
#background{
    background-color: #f0f0f0;
}
.register{
    padding-top: 30px;
    position: relative; 
}
.choose_container{
    text-align: center;
}
.facebook{
  -webkit-font-smoothing: antialiased;
background-color: rgb(69, 92, 168);
border-bottom-left-radius: 100px;
border-bottom-right-radius: 100px;
border-top-left-radius: 100px;
border-top-right-radius: 100px;
box-sizing: border-box;
color: rgb(255, 255, 255);
display: inline-block;
fill: none;
font-family: 'Helvetica Neue', 'Open Sans', Arial, sans-serif;
font-size: 14px;
font-weight: 300;
height: 50px;
line-height: 20px;
margin-bottom: 8px;
margin-left: 6px;
margin-right: 17px;
margin-top: 0px;
opacity: 1;
padding-bottom: 15px;
padding-left: 15px;
padding-right: 15px;
padding-top: 15px;
stroke: #ffffff;
stroke-dasharray: 121px;
stroke-dashoffset: 121px;
stroke-linecap: round;
stroke-width: 4px;
text-align: center;
text-decoration: none;
}
.facebook:hover{
  color: white !important;
}
</style>

<div id="background">

        <div class="container register">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3">
                    <div class="warningbox">
                        <div class="warningbox_header">
                            <div class="col-md-1"><i class="pe-7s-gleam box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p class="box_white"><strong>Hi! Schön, dass Du Dich registrieren möchtest!</strong></p></div> 
                        </div>
                        <div class="warningbox_content choose_container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Registriere Dich mit Facebook</h4>
                                    <a id="facebook_login" class="facebook" href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook fa-fw"></i></a>
                                    <p class="box_grey">Dauert nur eine Minute und wir werden <strong>niemals</strong> etwas ohne Deine Zustimmung <strong>posten</strong>.</p>
                                </div>
                            </div>
                            <hr class="box_grey">
                            <div class="row">
                                <p class="box_grey">Registriere Dich mit Deiner <strong><a href="{{ url('auth/register') }}">E-Mail-Adresse</a></strong></p>
                            </div>
                        </div> 
                    </div>          
        		</div>
        	</div>
        </div>

</div>

@endsection
