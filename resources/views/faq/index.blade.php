@extends('app')
@section('content')

    <form method="GET" action="{{ url("faq") }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="search">
        <button type="submit">Suchen</button>
    </form>
@foreach($questions as $question)
    {{ var_dump($question) }}
    Question: {{ $question->question }}
    Count: {{ $question->searchScore }}
@endforeach
@endsection