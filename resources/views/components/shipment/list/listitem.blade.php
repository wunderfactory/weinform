<a href="{{ route('shipments.show', ['shipment' => $shipment]) }}" class="list-group-item">
    Sendung #{{ $shipment->id }}
    @if($shipment->size)
        <p>Größe: {{ $shipment->size->name }}</p>
    @endif
    @if(count($shipment->specs))
        <ul>
            @foreach($shipment->specs as $spec)
                <li>{{ $spec->name }}</li>
            @endforeach
        </ul>
    @endif
    @if($shipment->origin && $shipment->destination)
        <p>Strecke: {{ $shipment->origin->city }} - {{ $shipment->destination->city }}</p>
    @endif
    @if($shipment->typeable_id && $shipment->typeable_type)
        @include('components.shipment.list.type', ['type' => $shipment->typeable])
    @endif
</a>