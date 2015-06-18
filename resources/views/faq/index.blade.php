@extends('app')
@section('content')

    <form method="GET" action="{{ url("faq") }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="search">
        <button type="submit"> Suchen</button>
    </form>
{{ $questions }}
@endsection