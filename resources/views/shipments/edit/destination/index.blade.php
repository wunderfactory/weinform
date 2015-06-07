<a class="btn btn-default btn-block" href="{{ route('shipments.destination.create', $shipment) }}">Neue Adresse</a>
{!! Form::open(['route' => ['shipments.destination.select', $shipment]]) !!}
@include('components.shipment.addresspicker', ['addresses' => $addresses, 'name' => 'address'])
{!! Form::submit('Adresse wählen', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}