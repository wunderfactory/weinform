<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}"/ >

{!! Form::open(['route' => ['shipments.update', $shipment], 'method' => 'put']) !!}
<div class="form-group">
    <label for="shipment-title">Titel</label>
    <div class="input-group">
        <input id="shipment-title" value="{{ $shipment->title }}" name="title" type="text" class="form-control" placeholder="Titel">
        <span class="input-group-btn"><button type="submit" class="btn btn-behance"><i class="fa fa-pencil"></i></button></span>
    </div>
</div>
<div class="form-group">
    <label for="datetimepicker_collect">Abholung von</label>
    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input id="datetimepicker_collect" value="{{ $shipment->collect_after ? $shipment->collect_after->format('d.m.Y H:i') : '' }}" name="collect_after" type="text" class="form-control input-block" placeholder="01.01.1970 12:00">
        <span class="input-group-btn"><button type="submit" class="btn btn-behance"><i class="fa fa-pencil"></i></button></span>
    </div>
</div>
@if($shipment->collect_before)
<div class="form-group">
    <label for="datetimepicker_collect">bis</label>
    <input id="origin-fake-input" value="{{ $shipment->collect_before->format('d.m.Y H:i') }}" placeholder="{{ $shipment->collect_before->format('d.m.Y H:i') }}" class="form-control" type="text" readonly />
</div>
@endif
<div class="form-group">
    <label for="datetimepicker_deliver">Lieferung</label>
    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input id="datetimepicker_deliver" value="{{ $shipment->deliver_after ? $shipment->deliver_after->format('d.m.Y H:i') : '' }}" name="deliver_after" type="text" class="form-control input-block" placeholder="01.01.1970 12:00">
        <span class="input-group-btn"><button type="submit" class="btn btn-behance"><i class="fa fa-pencil"></i></button></span>
    </div>
</div>
@if($shipment->deliver_before)
    <div class="form-group">
        <label for="datetimepicker_collect">bis</label>
        <input id="origin-fake-input" value="{{ $shipment->deliver_before->format('d.m.Y H:i') }}" placeholder="{{ $shipment->deliver_before->format('d.m.Y H:i') }}" class="form-control" type="text" readonly />
    </div>
@endif
{!! Form::close() !!}