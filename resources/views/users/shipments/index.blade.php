@extends('app')

@section('content')
    <div class="container">
        <div>
            Waiting for shipment
            @include('components.shipment.list.list', ['shipments' => $shipping])
        </div>
        <div>
            Stubs
            @include('components.shipment.list.list', ['shipments' => $stubs])
        </div>
        <div>
            Shipped
            @include('components.shipment.list.list', ['shipments' => $shipping])
        </div>
    </div>
@endsection