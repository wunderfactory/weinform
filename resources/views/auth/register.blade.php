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
label{
	margin-top: 5px;
}
.card{
	margin-top: 30px;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>{{ Lang::get('auth/register.whoops') }}</strong>{{ Lang::get('auth/register.problem') }}<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}" enctype="multipart/form-data">
                    
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <label class="control-label">{{ Lang::get('auth/register.username') }}</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            <label class="control-label">{{ Lang::get('auth/register.gender') }}</label>
                            <select class="form-control" name="gender">
                            <option></option>
                                <option value="female" {{(old('gender') == 'female') ? 'selected=selected':''}}>{{ Lang::get('auth/register.female') }}</option>
                                <option value="male" {{(old('gender') == 'male') ? 'selected=selected':''}}>{{ Lang::get('auth/register.male') }}</option>
                                <option value="other" {{(old('gender') == 'other') ? 'selected=selected:':''}}>{{ Lang::get('auth/register.other') }}</option>
                            </select>

                            <label class="control-label">{{ Lang::get('auth/register.first_name') }}</label>
                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name')}}">

                            <label class="control-label">{{ Lang::get('auth/register.last_name') }}</label>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name')}}">

                            <label class="control-label">{{ Lang::get('auth/register.birth_date') }} (dd.mm.yyyy)</label>
                            <input type="text" class="form-control" name="birth_date" value="{{ old('birth_date')}}">

                            <label class="control-label">{{ Lang::get('auth/register.email') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            <label class="control-label">{{ Lang::get('auth/register.phone') }}</label>
                            {!! Form::select('phonefield_country', App\ExtendedCountries::all()->lists('phone','iso_3166_2'), 'DE', array('class' =>'form-control')) !!}
                            <input type="text" class="form-control" name="phonefield" style="margin-top: 5px;" value="{{ old('phonefield') }}">


                            <label class="control-label">{{ Lang::get('auth/register.password') }}</label>
                            <input type="password" class="form-control" name="password">

                            <label class="control-label">{{ Lang::get('auth/register.confirm_password') }}</label>
                            <input type="password" class="form-control" name="password_confirmation">

                            <br>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ Lang::get('auth/register.register_button') }}
                                    </button>
                                </div>
                            </div>
						</form>

		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript">


$(document).ready(function(){

    // Prepare the preview for profile picture
    $("#profile_picture_input").change(function(){
    	console.log('adsasd');
        readURL(this);
    });

	 //Function to show image before upload

	function readURL(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#profile_picture').attr('src', e.target.result).fadeIn('slow');
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}
});
</script>
@endsection
