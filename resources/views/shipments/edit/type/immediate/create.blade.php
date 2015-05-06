@extends('app')

@section('content')
    <div class="container">
        <h1>Immediate Shipment</h1>
        {!! Form::open(['route' => ['shipments.immediate.store', $shipment]]) !!}
        <div class="form-group">
            <label for="inputPrice">Gib ein, was du zu zahlen bereit bist</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-eur"></i></div>
                {!! Form::text('price', null, ['id' => 'inputPrice', 'class' => 'form-control', '0.00']) !!}
            </div>
        </div>
        {!! Form::submit('Immediate shipping wählen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection