@extends('app')

@section('content')

<div class="product_area">
    <div id="shipments" class="container">
        <div class="row">
            <div class="col-md-12">
            <h4>Wähle eine Sendung aus, die Du mitnehmen möchtest.</h4>
	    	<hr>
	        	@include('shipments.index.menu', ['filter' => $filter, 'sizes' => $sizes, 'specs' => $specs])
		    </div>
		</div><!-- /row -->
		<div class="row list_container">
			<div class="col-md-3">
                @include('notybox.sidebar_helpbox')
                @include('notybox.sidebar_faqbox')
            </div>
            <div class="col-md-8">
                @include('components.shipment.list.list', ['shipments' => $shipments])
          </div><!-- /col-md-8 -->
	    </div>
    </div><!-- /container -->
</div>

@endsection