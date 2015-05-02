@if(count($shipments))
    <div class="list-group">
        @foreach($shipments as $shipment)
            @include('components.shipment.list.listitem', ['shipment' => $shipment])
        @endforeach
    </div>
@else
    <p>None</p>
@endif