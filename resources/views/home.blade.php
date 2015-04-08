@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<form action="test" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="file" name="file" id="fileToUpload">
                        <input type="submit" id="fileToUpload">
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
