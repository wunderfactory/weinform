@extends('app')

@section('content')
<style type="text/css">
.reset_password{
	margin-top: 90px;
}
.label_email{
	margin-bottom: 20px !important;
}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default reset_password">
				<div class="panel-body">
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<p>{{ Lang::get('auth/password.text') }}</p>
							<br>
							<div class="col-md-6">
								<label class="control-label label_email">{{ Lang::get('auth/password.email') }}</label>
								<br>
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<button type="submit" class="btn btn-primary">
									{{ Lang::get('auth/password.reset_button') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
