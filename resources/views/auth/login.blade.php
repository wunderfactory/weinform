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
</style>

<div class="wrapper">
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
{{-- 						<div class="panel-heading">Login</div> --}}
						<div class="panel-body">
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

							<div class="login">
							    <div class="modal-dialog login">
							        <div class="modal-content">
							           <div class="modal-header" style="text-align:center;">
							              <h4 class="modal-title">{{ Lang::get('auth/login.login') }}</h4>
							          </div>
							          <div class="modal-body">  
							              <div class="box">
							                   <div class="content">
							                      <div class="social">
							                          <a id="facebook_login" class="circle facebook" href="{{ url('/auth/facebook') }}">
							                              <i class="fa fa-facebook fa-fw"></i>
							                          </a>
							                      </div>
							                      <div class="division">
							                          <div class="line l"></div>
							                            <span>{{ Lang::get('auth/login.or') }}</span>
							                          <div class="line r"></div>
							                      </div>
							                      <div class="form loginBox">
							                          <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
							                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
							                          <input id="email" class="form-control" type="text" placeholder="{{ Lang::get('auth/login.email') }}" name="username">
							                          <input id="password" class="form-control" type="password" placeholder="{{ Lang::get('auth/login.password') }}" name="password">
							                          <input class="btn btn-default btn-login" type="submit" value="Login">
							                          </form>
							                      </div>
							                   </div>
							              </div>
							          </div>    
							        </div>
							        <br>
							        <p>{{ Lang::get('auth/login.looking_to') }} <a href="{{url('auth/register')}}">{{ Lang::get('auth/login.create_account') }}</a></p>
							    </div>
							</div>
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<a class="btn btn-link" href="{{ url('/password/email') }}">{{ Lang::get('auth/login.forgot_password') }}</a>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
