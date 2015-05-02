@extends('app')

@section('content')
    <div class="container">
        <h1>Spezifikationen wählen</h1>
        {!! Form::open(['route' => ['shipments.specs.select', $shipment]]) !!}
        @include('components.shipment.specpicker', ['name' => 'specs', 'selected' => $shipment->specs])
        {!! Form::submit('Spezifikationen wählen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection