@extends('app')

@section('content')
		
	    <div class="container">
	    	<h3>Wähle eine Sendung aus, die Du mitnehmen möchtest.</h3>
	    	<hr>
	        @include('shipments.index.menu', ['filter' => $filter, 'sizes' => $sizes, 'specs' => $specs])
	    </div>
	    <hr>
	    <div class="container">
	        @include('components.shipment.list.list', ['shipments' => $shipments])
	    </div>
@endsection