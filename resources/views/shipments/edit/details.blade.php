<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}"/ >

{!! Form::open(['route' => ['shipments.update', $shipment], 'method' => 'put']) !!}
<h4>Abholung</h4>
<input id="datetimepicker_collect" name="collect_after" type="text" class="form-control input-block">
<h4>Lieferung</h4>
<input id="datetimepicker_deliver" name="deliver_after" type="text" class="form-control input-block">
{!! Form::submit('Edit', ['class' => 'btn-block btn btn-success']) !!}
{!! Form::close() !!}