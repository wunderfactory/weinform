@extends('app')

@section('content')

<style type="text/css">
::-webkit-input-placeholder { /* WebKit browsers */
    color:    #434343 !important;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #434343 !important;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #434343 !important;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
   color:    #434343 !important;
}
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

	@include('flash::message')

        <div class="container register">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>{{ Lang::get('auth/login.whoops') }}</strong>{{ Lang::get('auth/login.problem') }}<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                    <div class="warningbox">
                        <div class="warningbox_header">
                            <div class="col-md-1"><i class="pe-7s-gleam box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p class="box_white"><strong>Hi!</strong></p></div> 
                        </div>
                        <div class="warningbox_content choose_container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Login mit Facebook</h4>
                                    <a id="facebook_login" class="facebook" href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook fa-fw"></i></a>
                                    
                                </div>
                            </div>
                            <hr class="box_grey">
                            <div class="row">
                                <div class="col-md-12">
			                        <div class="line l"></div>
			                            <span><strong>{{ Lang::get('auth/login.or') }}</strong></span>
			                            <br><br>
			                        <div class="line r"></div>
			                    </div>
			                </div>
			                <div class="row">
			                    <div class="col-md-6">
			                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
			                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
			                        <input id="email" class="form-control" type="text" placeholder="{{ Lang::get('auth/login.email') }}" name="username">
			                        <input id="password" class="form-control" type="password" placeholder="{{ Lang::get('auth/login.password') }}" name="password">
			                        <br>
			                        <input class="btn btn-default btn-login" type="submit" value="Login">
			                        </form>
			                    </div>
			                    <div class="col-md-6">
			                        <p>{{ Lang::get('auth/login.looking_to') }} <a href="{{url('auth/register')}}">{{ Lang::get('auth/login.create_account') }}</a></p>
									<a class="btn btn-default btn-login" href="{{ url('/password/email') }}">{{ Lang::get('auth/login.forgot_password') }}</a>
								</div>
                            </div>
                        </div> 
                    </div>          
        		</div>
        	</div>
        </div>
</div>

@endsection