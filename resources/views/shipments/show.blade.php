@extends('app')

@section('userbar')
    @if($shipment->user->id == Auth::user()->id)
        <div class="alert alert-info">
            <p>Das ist Deine Sendung! Du kannst sie {!! link_to_route('shipments.edit', 'hier', ['shipment' => $shipment]) !!} ändern.</p>
        </div>
    @endif
@endsection

@section('content')
    <div class="container">
        <?php print_r($shipment) ?>
    </div>
@endsection