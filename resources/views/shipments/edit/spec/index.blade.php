{!! Form::open(['route' => ['shipments.specs.select', $shipment]]) !!}
@include('components.shipment.specpicker', ['name' => 'specs', 'selected' => $shipment->specs])
{!! Form::submit('Spezifikationen wählen', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}