@extends('app')

@section('content')
    <div class="container">
        <h1>Größe wählen</h1>
        {!! Form::open(['route' => ['shipments.size.select', $shipment]]) !!}
        @include('components.shipment.sizepicker', ['name' => 'size', 'selected' => $shipment->size])
        {!! Form::submit('Größe wählen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection