<div class="text-center">
    <h3><i class="fa fa-rocket"></i> FastTrack</h3>
    <p class="lead">€ {{ $immediate->price }}</p>
</div>
{!! Form::open(['action' => 'post', 'route' => ['shipments.immediate.destroy', $immediate->shipment, $immediate]]) !!}
{!! Form::submit('Ändern', ['class' => 'btn btn-warning btn-block']) !!}
{!! Form::open() !!}