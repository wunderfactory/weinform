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
                    <p>Überprüfe alle Daten oder veröffentliche sie, um einen Fahrer zu finden. <a href="{{ route('shipments.publish', $shipment) }}" class="btn btn-sm btn-behance navbar-right navbar-btn">Jetzt Fahrer finden</a></p>
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
                    @if(!$shipment->validateIsComplete()[0])
                        @if(isset($shipment->validateIsComplete()[1]))
                            @foreach ($shipment->validateIsComplete()[1]->getMessages() as $message)
                                <p>{{ $message[0] }}</p>
                            @endforeach
                        @else
                            <p>Gib alle Daten an, um sie zu veröffentlichen.</p>
                        @endif
                    @endif
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
            <div class="col-md-12">
                <div id="map-canvas"></div>
            </div>
            <div class="col-md-6">
                <div class="infobox">
                    <div class="header">
                        <p><strong>Sendung bearbeiten</strong></p>
                    </div>
                    <div class="content">
                        <section class="shipment-edit">
                            <div class="form-group">
                                @if($shipment->origin_id)
                                    @include('shipments.edit.origin.show', ['origin' => $shipment->origin])
                                @else
                                    <a id="origin-popover-btn" data-placement="bottom" data-html="true" type="button" class="btn btn-block btn-danger" data-template='<div class="popover" style="width: 300px;" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="max-height: 350px; overflow: scroll;"></div></div>' data-toggle="popover" title="Deine Adressen" data-content='
<p class="text-center"><i class="fa fa-refresh fa-spin"></i></p>'>Bearbeiten</a>
                                @endif
                            </div>

                            @if($shipment->destination_id)
                                @include('shipments.edit.destination.show', ['destination' => $shipment->destination])
                            @else
                                <a id="destination-popover-btn" data-placement="bottom" data-html="true" type="button" class="btn btn-block btn-danger" data-template='<div class="popover" style="width: 300px;" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="max-height: 350px; overflow: scroll;"></div></div>' data-toggle="popover" title="Deine Adressen" data-content='<p class="text-center"><i class="fa fa-refresh fa-spin"></i></p>'>Bearbeiten</a>
                            @endif
                        </section>
                        <section class="shipment-edit">
                            @include('shipments.edit.details', ['shipment' => $shipment])
                        </section>
                        <section>
                            @if($shipment->size_id)
                                <div class="form-group">
                                    <label for="size-fake-input">Größe</label>
                                    <div class="input-group">
                                        <input id="size-fake-input" value="{{ $shipment->size->name }}" class="form-control" type="text" placeholder="{{ $shipment->size->name }}" readonly>
                                        <span class="input-group-btn">
                                            <a id="origin-popover-btn" href="#" type="button" class="btn btn-behance" data-html="true" data-toggle="popover" title="{{ $shipment->size->name }}" data-placement="bottom" data-content="<p>{{ $shipment->size->description }}</p>"><i class="fa fa-info"></i></a>
                                        </span>
                                        <span class="input-group-btn">
                                            <a id="size-popover-btn" data-placement="bottom" data-html="true" type="button" class="btn btn-behance" data-template='<div class="popover" style="width: 300px;" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="max-height: 350px; overflow: scroll;"></div></div>' data-toggle="popover" title="Sendungsgröße wählen" data-content='
<p class="text-center"><i class="fa fa-refresh fa-spin"></i></p>'><i class="fa fa-pencil"></i></a>
                                        </span>
                                    </div>
                                </div>
                            @else
                                <a id="size-popover-btn" data-placement="bottom" data-html="true" type="button" class="btn btn-block btn-behance" data-template='<div class="popover" style="width: 300px;" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="max-height: 350px; overflow: scroll;"></div></div>' data-toggle="popover" title="Sendungsgröße wählen" data-content='
<p class="text-center"><i class="fa fa-refresh fa-spin"></i></p>'>Bearbeiten</a>
                            @endif
                        </section>
                        <section>
                            @if(count($shipment->specs))
                            <div class="form-group">
                                <label for="size-fake-input">Spezifikationen</label>
                                @foreach($shipment->specs as $spec)
                                    <div class="input-group" style="margin-bottom: 3px;">
                                        <input id="size-fake-input" value="{{ $spec->name }}" class="form-control" type="text" placeholder="{{ $spec->name }}" readonly>
                                        <span class="input-group-btn">
                                            <a id="origin-popover-btn" href="#" type="button" class="btn btn-behance" data-html="true" data-toggle="popover" title="{{ $spec->name }}" data-placement="bottom" data-content="<p>{{ $spec->description }}</p>"><i class="fa fa-info"></i></a>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                            <div class="form-group">
                                <a id="specs-popover-btn" data-placement="bottom" data-html="true" type="button" class="btn btn-block btn-danger" data-template='<div class="popover" style="width: 300px;" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="max-height: 350px; overflow: scroll;"></div></div>' data-toggle="popover" title="Sonderattribute auswählen" data-content='
<p class="text-center"><i class="fa fa-refresh fa-spin"></i></p>'>Bearbeiten</a>
                            </div>
                        </section>
                        <section>
                            <div class="form-group">
                                <label for="size-fake-input">Typ</label>
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
                            </div>
                        </section>
                    </div> 
                </div><!-- / infobox -->
            </div> <!-- /.col-md-6 -->
        </div><!-- / row -->
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{url('js/wundershipgooglemaps.js')}}"></script>
    <script>
        $('#origin-popover-btn').on('shown.bs.popover', function () {
            $('#' + $('#origin-popover-btn').attr('aria-describedby') + ' .popover-content').load('http://wundership.app/shipments/{{ $shipment->id }}/origin');
        });
        $('#destination-popover-btn').on('shown.bs.popover', function () {
            $('#' + $('#destination-popover-btn').attr('aria-describedby') + ' .popover-content').load('http://wundership.app/shipments/{{ $shipment->id }}/destination');
        });
        $('#size-popover-btn').on('shown.bs.popover', function () {
            $('#' + $('#size-popover-btn').attr('aria-describedby') + ' .popover-content').load('{{ route('shipments.size.index', $shipment)}}');
        });
        $('#specs-popover-btn').on('shown.bs.popover', function () {
            $('#' + $('#specs-popover-btn').attr('aria-describedby') + ' .popover-content').load('{{ route('shipments.specs.index', $shipment)}}');
        });
    </script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(-34.397, 150.644)
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
            var bounds = new google.maps.LatLngBounds();
            @if($shipment->origin)
                var originMarker = new google.maps.Marker({
                    position: new google.maps.LatLng({{ $shipment->origin->latitude }},{{ $shipment->origin->longitude }}),
                    map: map,
                    icon: icons["origin"]
                });
                bounds.extend(originMarker.position);
            @endif
            @if($shipment->destination)
                var destinationMarker = new google.maps.Marker({
                    position: new google.maps.LatLng({{ $shipment->destination->latitude }},{{ $shipment->destination->longitude }}),
                    map: map,
                    icon: icons["destination"]
                });
                bounds.extend(destinationMarker.position);
            @endif

        map.fitBounds(bounds);
        }

        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAgVPwymp7ooqSA3dt-vKQmhFuQjyN99_Y' +
            '&callback=initialize';
            document.body.appendChild(script);
        }
        window.onload = loadScript;
    </script>
@endsection

@section('header')
    <style type="text/css">
        #map-canvas {
            height: 300px;
        }
    </style>
@endsection