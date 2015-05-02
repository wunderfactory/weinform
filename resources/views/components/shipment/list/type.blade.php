@if($type instanceof Wundership\Auction)
    @include('components.shipment.list.type.auction', ['auction' => $type])
@elseif($type instanceof Wundership\Immediate)
    @include('components.shipment.list.type.immediate', ['immediate' => $type])
@endif