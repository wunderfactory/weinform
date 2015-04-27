@extends('layouts.paneled')

@section('title')
    Publish Tour #{{ $tour->id }}
@endsection

@section('content')
    <div class="alert alert-warning">
        <h4>Are you sure?</h4>
        <p>Published tours cannot be edited.</p>
    </div>
    {!! Form::open(['url' => route('tour.publish', [$tour])]) !!}
    {!! Form::submit('Publish', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
    {!! Form::close() !!}
    {!! link_to_route('tour.show', 'Cancel', [$tour], ['class' => 'btn btn-block btn-default btn-sm']) !!}
@endsection