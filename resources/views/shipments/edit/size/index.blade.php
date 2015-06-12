{!! Form::open(['route' => ['shipments.size.select', $shipment]]) !!}
@include('components.shipment.sizepicker', ['name' => 'size', 'selected' => $shipment->size])
{!! Form::submit('Größe wählen', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}