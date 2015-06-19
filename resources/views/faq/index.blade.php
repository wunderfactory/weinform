@extends('app')

@section('content')

<div class="static_area">

	<div id="faq" class="container">

		<div class="question_container">
			<h3>Hallo! Wie können wir Dir helfen? Gib Deine Frage einfach unten ein und klick auf suchen...</h3>
			<div clas="row">
				<div class="col-md-6">
					<form method="GET" action="{{ url("faq") }}">
			        <input type="hidden" name="_token" value="{{ csrf_token() }}">
			        <input class="form-control" name="search">
			        </form>
		    	</div>
		    	<div class="col-md-6">
		    		<button class="form-control btn btn-primary" type="submit">Suchen</button>
		    		
		    	</div>
	    	</div>
	    </div>
    	<div class="row questions_list">
			@foreach($questions as $question)

				<div class="warningbox">
			        <div class="header">
			            <div><p><strong>{{$question->question}}</strong></p></div>
			        </div>
			        <div class="content">
			            <p>{{ $question->answer }}</p>
			        </div>
			    </div>

			@endforeach
    	</div>
	</div>

</div>
@endsection