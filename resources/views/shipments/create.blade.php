@extends('app')

@section('content')

<div class="product_area">
    <div id="shipment_create" class="container">
        <div class="row">
            <div class="col-md-3">
                @include('notybox.sidebar_helpbox')
                @include('notybox.sidebar_faqbox')
            </div>
            <div class="col-md-8">
                 <h4>Paket aufgeben</h4>
                    <p>Du hast noch als Entwurf gespeicherte Sendungen. Möchtest du einen Entwurf bearbeiten oder einen neuen Auftrag eingeben?</p>
                    <div class="list-group">
                    @foreach($shipments as $shipment)
                        <a href="{{ route('shipments.edit', $shipment) }}" class="list-group-item">
                            <h4 class="list-group-item-heading">Sendung #{{ $shipment->id }}</h4>
                            <p class="list-group-item-text"></p>
                        </a>
                    @endforeach
                    </div>
                    {!! Form::open(['route' => 'shipments.store']) !!}
                    {!! Form::submit('Neue Sendung anlegen', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
          </div><!-- /col-md-8 -->
      </div><!-- /row -->
    </div><!-- /container -->
</div>

@endsection