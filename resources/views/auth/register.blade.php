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
.input_label{
  margin-top: 3px;
  margin-left: 3px;
}
.very_small{
  font-size: 15px;
  margin: 4px;
}
.control_style{
  margin-top: -12px;
  margin-bottom: 7px;
}
.grey_row{
    background-color: #f2f2f2;
    padding-top: 10px;
    padding-bottom: 10px;
}
.white_row{
    padding-top: 10px;
    padding-bottom: 10px;
}
#phone_number_input{
    margin-left: -20px;
}
</style>

<div id="background">

        <div class="container register">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3">
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

                    <div class="warningbox">
                        <div class="warningbox_header">
                            <div class="col-md-1"><i class="pe-7s-gleam box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p class="box_white"><strong>Gleich geschafft!</strong></p></div> 
                        </div>
                        <div class="warningbox_content">
                            <div class="row white_row">
                                <div class="col-md-6">
                                    <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.first_name') }}</p></label>
                                    <input type="text" class="form-control control_style" name="first_name" value="{{ old('first_name')}}">
                                </div>

                                <div class="col-md-6">
                                    <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.last_name') }}</p></label>
                                    <input type="text" class="form-control control_style" name="last_name" value="{{ old('last_name')}}">
                                </div>
                            </div>
                            <div class="row  grey_row">
                                <div class="col-md-6">
                                    <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.username') }}</p></label>
                                    <input type="text" class="form-control control_style" name="name" value="{{ old('name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.email') }}</p></label>
                                    <input type="email" class="form-control control_style" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="row white_row">
                                <div class="col-md-6">
                                    <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.birth_date') }}</p></label>
                                    <input type="text" class="form-control control_style" name="birth_date" value="{{ old('birth_date')}}">
                                </div>

                                <div class="col-md-6">
                                    <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.gender') }}</p></label>
                                    <select class="form-control control_style" name="gender">
                                    <option></option>
                                        <option value="female" {{(old('gender') == 'female') ? 'selected=selected':''}}>{{ Lang::get('auth/register.female') }}</option>
                                        <option value="male" {{(old('gender') == 'male') ? 'selected=selected':''}}>{{ Lang::get('auth/register.male') }}</option>
                                        <option value="other" {{(old('gender') == 'other') ? 'selected=selected:':''}}>{{ Lang::get('auth/register.other') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row grey_row">
                                <div class="col-md-12">
                                   <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.phone') }}</p></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            {!! Form::select('phonefield_country', Wundership\ExtendedCountries::all()->lists('phone','iso_3166_2'), 'DE', array('class' =>'form-control control_style')) !!}
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="phone_number_input" class="form-control control_style" name="phonefield" value="{{ old('phonefield') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row white_row">
                                <div class="col-md-6">
                                   <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.password') }}</p></label>
                                    <input type="password" class="form-control control_style" name="password">
                                </div>
                                <div class="col-md-6">
                                    <label class="input_label"><p class="box_rose">{{ Lang::get('auth/register.confirm_password') }}</p></label>
                                    <input type="password" class="form-control control_style" name="password_confirmation">
                                </div>
                            </div>
                            <div class="row white_row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-default btn-fill btn-block">
                                    {{ Lang::get('auth/register.register_button') }}
                                    </button>
                                </div>
                            </div>
                        </div> 
                    </div>
					</form>

        		</div>
        	</div>
        </div>

</div>

@endsection

@section('script')
<script type="text/javascript">


// $(document).ready(function(){

//     // Prepare the preview for profile picture
//     $("#profile_picture_input").change(function(){
//     	console.log('adsasd');
//         readURL(this);
//     });

// 	 //Function to show image before upload

// 	function readURL(input) {
// 	    if (input.files && input.files[0]) {
// 	        var reader = new FileReader();

// 	        reader.onload = function (e) {
// 	            $('#profile_picture').attr('src', e.target.result).fadeIn('slow');
// 	        }
// 	        reader.readAsDataURL(input.files[0]);
// 	    }
// 	}
// });
</script>
@endsection
