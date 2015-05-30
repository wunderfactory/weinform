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
                <p class="navbar-text">Das ist deine Sendung. <a href="{{ route('shipments.edit', [$shipment]) }}" class="navbar-link">Du kannst hier Änderungen vornehmen.</a></p>
            </div>
        </nav>
    @endif
@endsection

@section('content')
    <div class="container">
        <p>Shipment Details</p>
        @if($shipment->is_bookable)
            {!! link_to_route('shipments.immediate.book', 'Mitnehmen', $shipment, ['class' => 'btn btn-primary btn-block']) !!}
        @endif
    </div>
@endsection