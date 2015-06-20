@extends('app')

@section('content')

<div class="product_area">

    <div id="shipments_origin_create" class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Adresse anlegen</h4>
                <hr>
                {!! Form::open(['route' => ['shipments.origin.store', $shipment], 'method' => 'post']) !!}
                <div class="form-group col-sm-12" id="map-canvas">

                </div>
            </div><!-- /col-md-4 -->


    <!-------------------------------------------- -->


        <div class="col-md-4 input_container">
            <div class="form-group">
                <label for="titleInput">Bezeichnung</label>
                <input type="text" class="form-control" id="titleInput" name="title" placeholder="Bezeichnung">
            </div>
            <div class="form-group">
                <label for="addressSuggestInput">Adresse</label>
                <input onFocus="geolocate()" type="text" class="form-control" id="addressSuggestInput" placeholder="Adresse">
            </div>
            <input type="hidden" class="form-control" id="addressInput" name="street" placeholder="Straße Nr." readonly>
            <input type="hidden" class="form-control" id="cityInput" name="city" placeholder="Ort" readonly>
            <input type="hidden" class="form-control" id="zipInput" name="zip" placeholder="Postleitzahl" readonly>
            <input type="hidden" id="lat" name="latitude">
            <input type="hidden" id="lng" name="longitude">
            {!! Form::submit('Speichern und weiter', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            <br>
            <a class="btn btn-default" href="{{ route('shipments.origin.index', $shipment) }}">Zurück</a>
        </div><!-- /col-md-4 -->
      </div><!-- /row -->
    </div><!-- /container -->


</div>

@endsection

@section("header")
    <style type="text/css">
        #map-canvas {
            height: 400px;
        }
    </style>
@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        var placeSearch, autocomplete, map, marker;
        var componentForm = {
            route: 'long_name',
            street_number: 'long_name',
            locality: 'long_name',
            postal_code: 'long_name'
        };
        var componentMap = {
            route: 'addressInput',
            street_number: 'addressInput',
            locality: 'cityInput',
            postal_code: 'zipInput'
        };
        var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(-34.397, 150.644)
        };

        function initialize() {
            console.log('Mo was here.');
            // Create the autocomplete object, restricting the search
            // to geographical location types.
            autocomplete = new google.maps.places.Autocomplete(
                    /** @type {HTMLInputElement} */(document.getElementById('addressSuggestInput')),
                    { types: ['geocode'] });
            //Create a new GoogleMaps Map
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
            // When the user selects an address from the dropdown,
            // populate the address fields in the form.
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                fillInAddress();
            });
        }

        // [START region_fillform]
        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();
            if (marker != null) marker.setMap(null);
            for (var component in componentForm) {
                console.log("Component: " + component);
                console.log("Mapped id: " + componentMap[component]);
                var inputElement = document.getElementById(componentMap[component]);
                inputElement.value = '';
                inputElement.disabled = false;
            }

            //Set a marker for the new Postion
            marker = new google.maps.Marker({
                map: map
            });
            marker.setPosition(place.geometry.location);
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);  // Why 17? Because it looks good.
            }
            console.log(place.geometry.location);
            document.getElementById("lat").value = place.geometry.location.A;
            document.getElementById("lng").value = place.geometry.location.F;
            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    if (addressType == 'route') {
                        document.getElementById(componentMap[addressType]).value = val + " " + document.getElementById(componentMap[addressType]).value;
                    }
                    else {
                        document.getElementById(componentMap[addressType]).value = val;
                    }
                }
            }
        }
        // [END region_fillform]

        // [START region_geolocation]
        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = new google.maps.LatLng(
                            position.coords.latitude, position.coords.longitude);
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
        // [END region_geolocation]
        window.onload = initialize;
    </script>
@endsection