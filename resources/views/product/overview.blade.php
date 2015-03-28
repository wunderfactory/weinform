@extends('app')

@section('content')

<style type="text/css">
.bg
{
  width: 100%;
  z-index: 0;
}
</style>

<div class="wrapper">
    
    <img class="bg" src="{{ asset('images/backgrounds/sf.png') }}" />

    @if(Auth::guest())
    @else
    	<h1>Hi {{ Auth::user()->firstname }}</h1>
    @endif

    <div class="row">

    </div>  


    
</div> <!-- wrapper --> 

@endsection