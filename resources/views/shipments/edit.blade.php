@extends('app')

@section('userbar')
    <style type="text/css">
        .navbar_container{
            max-width: 980px !important;
        }
    </style>
    @if($shipment->is_complete)
        <div class="container">
            <div class="orangebox">
                <div class="header">
                    <p><strong>Deine Sendung ist komplett.</strong></p>
                </div>
                <div class="content">
                    <p>Überprüfe alle Daten oder veröffentliche sie, um einen Fahrer zu finden.</p>
                    <a class="btn btn-sm btn-default navbar-right navbar-btn">Jetzt Fahrer finden</a>
                </div> 
            </div>
        </div>
    @else
        <div class="container">
            <div class="orangebox">
                <div class="header">
                    <p><strong>Die Sendung ist noch nicht komplett.</strong></p>
                </div>
                <div class="content">
                    <p>Gib alle Daten an, um sie zu veröffentlichen.</p>
                </div> 
            </div>
        </div>
    @endif
@endsection

@section('content')
    <style>
        section.shipment-edit section {
            background-color: lightcyan;
            border-radius: 7px;
            padding: 3px;
            margin-bottom: 10px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="infobox">
                    <div class="header">
                        <p><strong>Sendung bearbeiten</strong></p>
                    </div>
                    <div class="content">
                        <section class="shipment-edit">
                        <section>
                            <h3>Strecke</h3>
                            <h4>Abholung</h4>
                            @if($shipment->origin_id)
                                @include('shipments.edit.origin.show', ['origin' => $shipment->origin])
                                {!! link_to_route('shipments.origin.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
                            @else
                                {!! link_to_route('shipments.origin.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
                            @endif
                            <h4>Lieferung</h4>
                            @if($shipment->destination_id)
                                @include('shipments.edit.destination.show', ['destination' => $shipment->destination])
                                {!! link_to_route('shipments.destination.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
                            @else
                                {!! link_to_route('shipments.destination.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
                            @endif
                        </section>
                        <section>
                            <h3>Zeit</h3>
                            @include('shipments.edit.details', ['shipment' => $shipment])
                        </section>
                        <section>
                            <h3>Größe</h3>
                            @if($shipment->size_id)
                                <p>{{ $shipment->size->name }} <small>{{ $shipment->size->description }}</small></p>
                                {!! link_to_route('shipments.size.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
                            @else
                                {!! link_to_route('shipments.size.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
                            @endif
                        </section>
                        <section>
                        <h3>Specs</h3>
                            @if(count($shipment->specs))
                                @foreach($shipment->specs as $spec)
                                    <span class="label label-info"><strong>{{ $spec->name }}</strong> {{ $spec->description }}</span>
                                @endforeach
                                {!! link_to_route('shipments.specs.index', 'Edit', ['shipment' => $shipment], ['class' => 'btn-block btn btn-warning']) !!}
                            @else
                                {!! link_to_route('shipments.specs.index', 'Select', ['shipment' => $shipment], ['class' => 'btn-block btn btn-primary']) !!}
                            @endif
                        </section>
                        </section>
                        <section class="shipment-edit">
                        <h2>Typ</h2>
                        <section>
                            @if($shipment->typeable_id && $shipment->typeable_type)
                                @if($shipment->typeable instanceof Wundership\Auction)
                                    @include('shipments.edit.type.auction.show', ['shipment' => $shipment, 'auction' => $shipment->typeable])
                                @elseif($shipment->typeable instanceof Wundership\Immediate)
                                    @include('shipments.edit.type.immediate.show', ['shipment' => $shipment, 'immediate' => $shipment->typeable])
                                @endif
                            @else
                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                    {!! link_to_route('shipments.auction.create', 'Auction', ['shipment' => $shipment], ['class' => 'btn btn-primary']) !!}
                                    {!! link_to_route('shipments.immediate.create', 'Immediate', ['shipment' => $shipment], ['class' => 'btn btn-primary']) !!}
                                </div>
                            @endif
                        </section>
                        </section>
                    </div> 
                </div><!-- / infobox -->
            </div> <!-- /.col-md-6 -->
        </div><!-- / row -->
    </div>
@endsection