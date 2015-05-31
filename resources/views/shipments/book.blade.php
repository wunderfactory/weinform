@extends('app')

@section('content')
    <p>Bist du einverstanden mit den Konditionen dieser Sendung?</p>
    <pre>
        <?php print_r($shipment->toArray()); ?>
    </pre>
    {!! link_to_route('shipments.show', 'Nein', $shipment, ['class' => 'btn btn-default']) !!}

    {!! Form::open(['route' => ['shipments.immediate.dobook', $shipment], 'method' => 'post']) !!}
    <div class="checkbox">
        <label>
            {!! Form::checkbox('agb', 'true', false, ['data-toggle' => 'checkbox']) !!} Einverstanden mit den agb diesdas
        </label>
    </div>
    {!! Form::submit('Ja. Mitnehmen!', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection