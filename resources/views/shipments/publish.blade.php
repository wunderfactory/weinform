@extends('app')

@section('content')
    <p>Sind alle Daten korrekt?</p>
    <pre>
        <?php print_r($shipment->toArray()); ?>
    </pre>
    {!! link_to_route('shipments.edit', 'Nein', $shipment, ['class' => 'btn btn-default']) !!}

    {!! Form::open(['route' => ['shipments.dopublish', $shipment], 'method' => 'post']) !!}
    <div class="checkbox">
        <label>
            {!! Form::checkbox('agb', 'true', false, ['data-toggle' => 'checkbox']) !!} Einverstanden mit den agb diesdas
        </label>
    </div>
    {!! Form::submit('Ja', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection