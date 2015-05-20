@extends('app')

@section('content')
    <div class="container">
        <h1>Adresse anlegen</h1>
        <a class="btn btn-default" href="{{ route('shipments.destination.index', $shipment) }}">Zurück</a>
        {!! Form::open(['route' => ['shipments.destination.store', $shipment], 'method' => 'post']) !!}

        <div class="form-group">
            <label for="titleInput">Bezeichnung</label>
            <input type="text" class="form-control" id="titleInput" name="title" placeholder="Bezeichnung">
        </div>
        <div class="form-group">
            <label for="addressInput">Adresse</label>
            <input type="text" class="form-control" id="addressInput" name="street" placeholder="Straße Nr.">
        </div>
        <div class="form-group">
            <label for="cityInput">Ort</label>
            <input type="text" class="form-control" id="cityInput" name="city" placeholder="Ort">
        </div>
        <div class="form-group">
            <label for="zipInput">Postleitzahl</label>
            <input type="text" class="form-control" id="zipInput" name="zip" placeholder="Postleitzahl">
        </div>

        {!! Form::submit('Adresse anlegen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection