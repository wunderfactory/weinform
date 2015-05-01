@extends('layouts.paneled')

@section('title')
    Create new tour
@endsection

@section('content')
    {!! Form::open(['url' => route('tour.store')]) !!}

    <div class="form-group{{ $errors->has('address_from') ? ' has-error' : '' }}">
        {!! Form::label('address_from', 'Von') !!}
        {!! Form::select('address_from', $beacons, false, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group{{ $errors->has('address_to') ? ' has-error' : '' }}">
        {!! Form::label('address_to', 'Nach') !!}
        {!! Form::select('address_to', $beacons, false, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group{{ $errors->has('km_price') ? ' has-error' : '' }}">
        {!! Form::label('km_price', 'Kilometerpreis') !!}
        <div class="input-group">
            <span class="input-group-addon">€ 0,0</span>
            {!! Form::selectRange('km_price', 4, 9, false, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
        <div class="col-sm-12">
            {!! Form::label('start.date', 'Wann fährst du los?') !!}
        </div>
        <div class="col-sm-7">
            @include('components.datepicker', ['name' => 'start.date'])
        </div>
        <div class="col-sm-5">
            {!! Form::label('start.date', 'Uhrzeit') !!}
        </div>
        <div class="col-sm-2">
            {!! Form::selectRange('start.hour', 0, 23, 12, ['class' => 'form-control']) !!}
        </div>
        <div class="col-sm-1">
            :
        </div>
        <div class="col-sm-2">
            {!! Form::select('start.minute', ['00' => '00', 15 => 15, 30 => 30, 45 => 45], 15, ['class' => 'form-control']) !!}
        </div>
    </div>

    {!! Form::submit('Create', ['class' => 'btn btn-primary btn-lg btn-block']) !!}

    {!! Form::close() !!}
@endsection