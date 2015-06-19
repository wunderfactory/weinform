@extends('app')

@section('userbar')
    @if((Auth::user() && $shipment->user->id == Auth::user()->id) || !$shipment->is_published)
        <style type="text/css">
            .navbar_container{
                max-width: 980px !important;
            }
            .active_topbar {
                color: #ea555c !important;
            }
        </style>
        <nav class="navbar navbar-default">
            <div class="container navbar_container">
                <p class="navbar-text"><strong>Das ist deine Sendung.</strong> <a href="{{ route('shipments.edit', [$shipment]) }}" class="navbar-link">Du kannst hier Änderungen vornehmen.</a></p>
            </div>
        </nav> 
    @endif
@endsection

@section('content')
    <div id="show_shipment_details" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="infobox">
                    <div class="header">
                        <p><strong>Sendungsinfos</strong></p>
                    </div>
                    <div class="content">
                       
                    </div> 
                </div><!-- / infobox -->
            </div> <!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="infobox">
                    <div class="header">
                        <p><strong>Karte</strong></p>
                    </div>
                    <div class="content">
                       <div id="map-canvas">

                       </div>
                    </div> 
                </div><!-- / infobox -->
            </div> <!-- /.col-md-6 -->
        </div><!-- / row -->

        @if($shipment->is_bookable)
            {!! link_to_route('shipments.immediate.book', 'Mitnehmen', $shipment, ['class' => 'btn btn-primary btn-block']) !!}
        @endif
    </div>
@endsection

@section('script')
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(-34.397, 150.644)
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
            var bounds = new google.maps.LatLngBounds();
            var originMarker = new google.maps.Marker({
                position: new google.maps.LatLng({{ $shipment->origin-> }}}}, locations[i][2]),
                map: map
            });
            var destinationMarker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });
            bounds.extend(originMarker.position);
            bounds.extend(destinationMarker.position);
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
        height:500px;
        min-height:500px;
        width: 100%;
    }
</style>
@endsection