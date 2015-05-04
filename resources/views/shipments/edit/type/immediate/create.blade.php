@extends('app')

@section('content')
    <div class="container">
        <h1>Typ wählen</h1>
        {!! Form::open(['route' => ['shipments.immediate.store', $shipment]]) !!}
        <div class="form-group">
            <label for="inputPrice">Preis</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-eur"></i></div>
                {!! Form::text('price', null, ['id' => 'inputPrice', 'class' => 'form-control', '0.00']) !!}
            </div>
        </div>
        {!! Form::submit('Typ wählen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection