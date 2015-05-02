@extends('app')

@section('userbar')
    <div class="alert alert-warning">
        <p>Die Sendung ist noch nicht komplett. Gib alle Daten an um sie zu veröffentlichen</p>
    </div>
    <div class="alert alert-info">
        <p>Deine Sendung ist komplett. Überprüfe alle Daten oder veröffentliche sie, um einen Fahrer zu finden. <a class="btn btn-primary btn-sm pull-right">Jetzt Fahrer finden</a></p>
    </div>
@endsection

@section('content')
    <div class="container">
        <h1>Sendung bearbeiten</h1>
        <h2>Details</h2>
        <h3>Strecke</h3>
        <h4>Abholung</h4>
        @if($shipment->origin_id)
            <?php print_r($shipment->origin) ?>
            {!! link_to_route('shipments.origin.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn btn-default']) !!}
        @else
            {!! link_to_route('shipments.origin.index', 'Select', ['shipment' => $shipment], ['class' => 'btn btn-default']) !!}
        @endif
        <h4>Lieferung</h4>
        @if($shipment->destination_id)
            <?php print_r($shipment->destination) ?>
            {!! link_to_route('shipments.destination.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn btn-default']) !!}
        @else
            {!! link_to_route('shipments.destination.index', 'Select', ['shipment' => $shipment], ['class' => 'btn btn-default']) !!}
        @endif
        <h3>Größe</h3>
        @include('components.shipment.sizepicker', ['name' => 'size', 'selected' => $shipment->size])
        <h3>Specs</h3>
        @include('components.shipment.specpicker', ['name' => 'specs', 'selected' => $shipment->specs])
        <h2>Typ</h2>
    </div>
@endsection