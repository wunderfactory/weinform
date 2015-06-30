@extends('app')

@section('content')

<div class="static_area">

	<div id="faq" class="container">

		<div class="question_container">
			<h3>Hallo! Wie können wir Dir helfen? Gib Deine <strong>Frage</strong> oder ein <strong>Stichwort</strong> einfach unten ein...</h3>
			<div clas="row">
				<div class="col-md-12">
					<form method="GET" action="{{ url("faq") }}">
			        <input type="hidden" name="_token" value="{{ csrf_token() }}">
			        <input class="form-control" name="search">
			        </form>
		    	</div>
	    	</div>
	    </div>
    	<div class="row questions_list">
    		@if($questions->count() == 0)
    			<div class="not_found_container"><h5>Zu dieser Eingabe konnten wir nichts finden. Probier noch einmal etwas anderes oder <a href="{{url('contact')}}">kontaktiere</a> uns.</h5></div>
    		@endif
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
        <div class="row">
            <div class="col-md-offset-3 col-md-6 paginate-container">
                {!! $questions->render() !!}
            </div>
        </div>
	</div>

</div>
@endsection

@section('header')
    <style type="text/css">
        .paginate-container {
            text-align: center;
        }
    </style>
@endsection