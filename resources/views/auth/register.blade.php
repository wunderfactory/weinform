@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
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


<style type="text/css">
label{
	margin-top: 5px;
}
.card{
	margin-top: 70px;
}
</style>

					<div class="row" id="profile-cards card">
	                     <div class="col-md-5 col-md-offset-4">
	                        <div class="card card-user">
	                            <div class="image">
	                                 <img src="{{ asset('images/backgrounds/sf.png') }}" alt="">
	                            </div>
	                            <div class="content">
	                                <div class="author">
	                                     <a href="#">
	                                    <img class="avatar" src="{{old('id') ? 'https://graph.facebook.com/'.old('id').'/picture?type=large' : asset('gsd/img/faces/face-1.jpg') }}" alt="...">
	                                   
	                                      <h4 class="title"> <br>
	                                         <small>Designer</small>
	                                      </h4> 
	                                    </a>
	                                </div>

	                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <label class="control-label">Username</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                        <label class="control-label">Gender</label>
                                        <select class="form-control" name="gender">
                                        <option></option>
                                            <option value="female" {{(old('gender') == 'female') ? 'selected=selected':''}}>female</option>
                                            <option value="male" {{(old('gender') == 'male') ? 'selected=selected':''}}>male</option>
                                            <option value="other" {{(old('gender') == 'other') ? 'selected=selected:':''}}>other</option>
                                        </select>

                                        <label class="control-label">First name</label>
                                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name')}}">

                                        <label class="control-label">Last name</label>
                                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name')}}">

                                        <label class="control-label">Birth date (dd.mm.yyyy)</label>
                                        <input type="text" class="form-control" name="birth_date" value="{{ old('birth_date')}}">

                                        <label class="control-label">E-Mail Address</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        <label class="control-label">Phone</label>
                                        {!! Form::select('phonefield_country', App\ExtendedCountries::all()->lists('phone','iso_3166_2'), null, array('class' =>'form-control')) !!}
                                        <input type="text" class="form-control" name="phonefield" value="{{ old('phonefield') }}">


                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password">

                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation">

                                        <br>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
									</form>

	                            </div>
	                            <hr>
	                        </div> <!-- end card -->
	                     </div>
	                </div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
