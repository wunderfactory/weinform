<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}"/ >

{!! Form::open(['route' => ['shipments.update', $shipment], 'method' => 'put']) !!}
<section>
    <h4>Bezeichnung</h4>
    <div class="form-group">
        <label for="shipment-title">Titel</label>
        <input id="shipment-title" value="{{ $shipment->title }}" name="title" type="text" class="form-control input-block" placeholder="Titel">
    </div>
</section>
<section>
    <h4>Zeit</h4>
    <div class="form-group">
        <label for="datetimepicker_collect">Abholung</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <input id="datetimepicker_collect" value="{{ $shipment->collect_after ? $shipment->collect_after->format('d.m.Y H:i') : '' }}" name="collect_after" type="text" class="form-control input-block" placeholder="01.01.1970 12:00">
        </div>
    </div>
    <div class="form-group">
        <label for="datetimepicker_deliver">Lieferung</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <input id="datetimepicker_deliver" value="{{ $shipment->deliver_after ? $shipment->deliver_after->format('d.m.Y H:i') : '' }}" name="deliver_after" type="text" class="form-control input-block" placeholder="01.01.1970 12:00">
        </div>
    </div>
</section>
{!! Form::submit('Edit', ['class' => 'btn-block btn btn-success']) !!}
{!! Form::close() !!}