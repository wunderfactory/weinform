@extends('app')

@section('content')
    <div class="container">
        <h1>Typ wählen</h1>
        {!! Form::open(['route' => ['shipments.immediate.store', $shipment]]) !!}
        {!! Form::input() !!}
        {!! Form::submit('Typ wählen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection