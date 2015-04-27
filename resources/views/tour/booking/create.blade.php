@extends('layouts.paneled')

@section('title')
    Create new booking
@endsection

@section('content')
    {!! Form::open(['url' => route('tour.booking.store', [$tour])]) !!}
    {!! Form::submit('Create', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
    {!! Form::close() !!}
@endsection