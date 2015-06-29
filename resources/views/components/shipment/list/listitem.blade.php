<div id="shipment_listitem" class="infobox">
    <div class="header">
        <p><strong>{{ $shipment->title }}</strong> / @if($shipment->origin && $shipment->destination)
                {{ $shipment->origin->city }} - {{ $shipment->destination->city }}
            @endif</p>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <img class="img-circle user_image" src="{{ action('UsersController@getPicture', [$shipment->user->username]) }}" alt="Profile Picture">
            </div>
            <div class="col-md-4">
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
            <p>Versender: <a href="{{ url('user/'.$shipment->user->username) }}">{{$shipment->user->first_name}} {{$shipment->user->last_name}}</a></p>
            
            </div>
            <div class="col-md-3">
                @if($shipment->typeable_id && $shipment->typeable_type)
                @include('components.shipment.list.type', ['type' => $shipment->typeable])
                @endif
               <a class="btn btn-blue" href="{{ route('shipments.show', ['shipment' => $shipment]) }}" class="list-group-item">
                Sendung ansehen
                </a>
            </div>
        </div>
    </div>  
</div>

