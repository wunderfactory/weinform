@extends('app')

@section('userbar')
    <style type="text/css">
        .navbar_container{
            max-width: 980px !important;
        }
        .active_topbar {
            color: #ea555c !important;
        }
    </style>
    @if($shipment->is_complete)
        <nav class="navbar navbar-default">
            <div class="container navbar_container">
                <a class="btn btn-sm btn-default navbar-right navbar-btn">Jetzt Fahrer finden</a>
                <p class="navbar-text">Deine Sendung ist komplett. Überprüfe alle Daten oder veröffentliche sie, um einen Fahrer zu finden.</p>
            </div>
        </nav>
    @else
        <nav class="navbar navbar-default">
            <div class="container navbar_container">
                <p class="navbar-text">Die Sendung ist noch nicht komplett. Gib alle Daten an um sie zu veröffentlichen</p>
            </div>
        </nav>
    @endif
@endsection

@section('content')
    <div class="container" style="padding-bottom: 40px;">
        <h1>Sendung bearbeiten</h1>
        <h2>Details</h2>
        <h3>Strecke</h3>
        <div class="col-sm-6">
            <h4>Abholung</h4>
            @if($shipment->origin_id)
                <address>
                    <strong>{{ $shipment->origin->title }}</strong><br>
                    {{ $shipment->origin->street }}<br>
                    {{ $shipment->origin->zip }} {{ $shipment->origin->city }}
                </address>
                {!! link_to_route('shipments.origin.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
            @else
                {!! link_to_route('shipments.origin.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
            @endif
        </div>
        <div class="col-sm-6">
        <h4>Lieferung</h4>
            @if($shipment->destination_id)
                <address>
                    <strong>{{ $shipment->destination->title }}</strong><br>
                    {{ $shipment->destination->street }}<br>
                    {{ $shipment->destination->zip }} {{ $shipment->destination->city }}
                </address>
                {!! link_to_route('shipments.destination.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
            @else
                {!! link_to_route('shipments.destination.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
            @endif
        </div>
        <h3>Größe</h3>
        @if($shipment->size_id)
            <p>{{ $shipment->size->name }} <small>{{ $shipment->size->description }}</small></p>
            {!! link_to_route('shipments.size.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
        @else
            {!! link_to_route('shipments.size.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
        @endif
        <h3>Specs</h3>
        @if(count($shipment->specs))
            @foreach($shipment->specs as $spec)
                <span class="label label-info"><strong>{{ $spec->name }}</strong> {{ $spec->description }}</span>
            @endforeach
            {!! link_to_route('shipments.specs.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
        @else
            {!! link_to_route('shipments.specs.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
        @endif
        <h2>Typ</h2>
        @if($shipment->typeable_id && $shipment->typeable_type)
            @if($shipment->typeable instanceof Wundership\Auction)
            @elseif($shipment->typeable instanceof Wundership\Immediate)
                @include('shipments.edit.type.immediate.show', ['immediate' => $shipment->typeable])
            @endif
        @else
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                {!! link_to_route('shipments.auction.create', 'Auction', ['shipment' => $shipment], ['class' => 'btn btn-primary']) !!}
                {!! link_to_route('shipments.immediate.create', 'Immediate', ['shipment' => $shipment], ['class' => 'btn btn-primary']) !!}
            </div>
        @endif
    </div>
@endsection