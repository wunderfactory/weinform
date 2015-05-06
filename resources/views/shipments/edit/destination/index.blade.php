@extends('app')

@section('content')
    <div class="container">
        <h1>Deine Adressen</h1>
        <a class="btn btn-default" href="{{ route('shipments.destination.create') }}">Neue Adresse</a>
        {!! Form::open(['route' => ['shipments.destination.select', $shipment]]) !!}
        @include('components.shipment.addresspicker', ['addresses' => $addresses, 'name' => 'address'])
        {!! Form::submit('Adresse wählen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection