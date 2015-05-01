@extends('app')

@section('layout')
    <div class="container">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
@endsection