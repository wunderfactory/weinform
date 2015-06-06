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
                       
                    </div> 
                </div><!-- / infobox -->
            </div> <!-- /.col-md-6 -->
        </div><!-- / row -->

        @if($shipment->is_bookable)
            {!! link_to_route('shipments.immediate.book', 'Mitnehmen', $shipment, ['class' => 'btn btn-primary btn-block']) !!}
        @endif
    </div>
@endsection