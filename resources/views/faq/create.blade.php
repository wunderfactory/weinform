@extends('app')
@section('content')

    <form action="{{ url('faq') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Question:<input type="text" name="question">
        Answer:<input type="text" name="answer" value="{{ol}}">
        keywords (separate by ","):<input type="text" name="keywords">
        <input type="submit">
    </form>
@endsection