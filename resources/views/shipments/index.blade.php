@extends('app')

@section('content')
    <div class="container">
        @include('shipments.index.menu', ['filter' => $filter, 'sizes' => $sizes, 'specs' => $specs])
    </div>
    <div class="container">
        @include('components.shipment.list.list', ['shipments' => $shipments])
    </div>
    <pre>
        <?php print_r($qlog); ?>
    </pre>
@endsection