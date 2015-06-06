@extends('app')

@section('content')
<style type="text/css">
#publish{
    padding: 20px;
}


</style>
    <div id="publish" class="container">
        <div class="warningbox">
            <div class="header">
                <div class="col-md-1"><i class="pe-7s-gleam"></i></div>
                <div class="col-md-8"><p><strong>Das ist Deine Sendung. Sind alle Daten korrekt?</strong></p></div>
               
            </div>
            <div class="content">
                <h3>{{$shipment->title}}</h3>

                <pre>
                    <?php print_r($shipment->toArray()); ?>
                </pre>
                {!! link_to_route('shipments.edit', 'Nein', $shipment, ['class' => 'btn btn-default']) !!}

                {!! Form::open(['route' => ['shipments.dopublish', $shipment], 'method' => 'post']) !!}
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('agb', 'true', false, ['data-toggle' => 'checkbox']) !!} Ich bin mit den AGB einverstanden.
                    </label>
                </div>
                {!! Form::submit('Ja', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div> 
        </div>
        <p></p>
        
    </div>
@endsection