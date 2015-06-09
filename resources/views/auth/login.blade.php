@extends('app')

@section('content')

<div class="auth_area">

	@include('flash::message')

        <div id="login" class="container">
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
                        <div class="header">
                            <div class="col-md-1"><i class="pe-7s-gleam"></i></div>
                            <div class="col-md-10"><p><strong>Hi!</strong>Schön, Dich wiederzusehen.</p></div> 
                        </div>
                        <div class="content choose_container">
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
			                        <input id="password_input" class="form-control" type="password" placeholder="{{ Lang::get('auth/login.password') }}" name="password">
			                        <br>
			                        <input class="btn btn-default btn-login" type="submit" value="Login">
			                        </form>
			                    </div>
			                    <div class="col-md-6">
			                        <p>{{ Lang::get('auth/login.looking_to') }} <a href="{{url('auth/choose')}}">{{ Lang::get('auth/login.create_account') }}</a></p>
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