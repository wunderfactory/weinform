@extends('app')

@section('content')


<style type="text/css">
.question_container{
	padding: 30px;
}
</style>


<div class="container">

	<div class="question_container">
		<form>
		  <h3>Hi! Wie können wir Dir helfen? Gib unten einfach eine Frage ein...</h3><br>
		  <input class="form-control" type="search" name="faq" placeholder="Deine Frage...">
		</form>
	</div>


@foreach($questions as $question)

	<div class="warningbox">
        <div class="header">
            <div><p><strong>{{$question->question}}</strong></p></div>
        </div>
        <div class="content">
            <p>{{$question->answer}}</p>
        </div>
    </div>

@endforeach



</div>

@endsection