@extends('app')

@section('content')
    <div class="container">
        @include('shipments.index.menu')
    </div>
    <div class="container">
        @include('components.shipment.list.list', ['shipments' => $shipments])
    </div>
@endsection