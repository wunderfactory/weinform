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
#email_input{
	margin-bottom: 10px;
}
</style>

<div id="background">

	@include('flash::message')

        <div class="container register">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                            <div class="col-md-10 box_heading_container"><p class="box_white"><strong>Passwort zurücksetzen</strong></p></div> 
                        </div>
                        <div class="warningbox_content choose_container">
                        	<p class="box_rose">{{ Lang::get('auth/password.text') }}</p>
                        	<hr class="box_grey">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label class="control-label label_email">{{ Lang::get('auth/password.email') }}</label>
                                    <br>
                                <input id="email_input" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                <button type="submit" class="btn btn-default">
                                    {{ Lang::get('auth/password.reset_button') }}
                                </button>
                            </form>
                        </div> 
                    </div>          
        		</div>
        	</div>
        </div>
</div>

@stop