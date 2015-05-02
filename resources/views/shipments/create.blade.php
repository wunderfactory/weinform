@extends('app')

@section('content')
    <div class="container">
        <h1>Paket aufgeben</h1>
        {!! Form::open(['route' => 'shipments.store']) !!}
        {!! Form::submit('Neue Sendung anlegen', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
        <p>Bla bla bla</p>
    </div>
@endsection