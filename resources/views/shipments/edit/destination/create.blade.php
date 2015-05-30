@extends('app')

@section('content')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <div class="container">
        <h1>Adresse anlegen</h1>
        <a class="btn btn-default" href="{{ route('shipments.destination.index', $shipment) }}">Zurück</a>
        {!! Form::open(['route' => ['shipments.destination.store', $shipment], 'method' => 'post']) !!}
        <div class="col-sm-6">
            <div class="form-group">
                <label for="titleInput">Bezeichnung</label>
                <input type="text" class="form-control" id="titleInput" name="title" placeholder="Bezeichnung">
            </div>
            <div class="form-group">
                <label for="addressSuggestInput">Adresse</label>
                <input onFocus="geolocate()" type="text" class="form-control" id="addressSuggestInput" placeholder="Adresse">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group col-sm-12">
                <label for="addressInput">Adresse</label>
                <input type="text" class="form-control" id="addressInput" name="street" placeholder="Straße Nr." readonly>
            </div>
            <div class="form-group col-sm-5">
                <label for="cityInput">Ort</label>
                <input type="text" class="form-control" id="cityInput" name="city" placeholder="Ort" readonly>
            </div>
            <div class="form-group col-sm-7">
                <label for="zipInput">Postleitzahl</label>
                <input type="text" class="form-control" id="zipInput" name="zip" placeholder="Postleitzahl" readonly>
            </div>
        </div>

        {!! Form::submit('Adresse anlegen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        var placeSearch, autocomplete;
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

        function initialize() {
            console.log('Mo was here.');
            // Create the autocomplete object, restricting the search
            // to geographical location types.
            autocomplete = new google.maps.places.Autocomplete(
                    /** @type {HTMLInputElement} */(document.getElementById('addressSuggestInput')),
                    { types: ['geocode'] });
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

            for (var component in componentForm) {
                console.log("Component: " + component);
                console.log("Mapped id: " + componentMap[component]);
                var inputElement = document.getElementById(componentMap[component]);
                inputElement.value = '';
                inputElement.disabled = false;
            }

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

    </script>
    <script>
        initialize();
    </script>
@endsection