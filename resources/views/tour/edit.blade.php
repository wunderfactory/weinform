@extends('layouts.paneled')

@section('title')
    Edit Tour #{{ $tour->id }}
@endsection

@section('content')

    {!! link_to_route('tour.show', 'Discard changes', [$tour], ['class' => 'btn btn-default btn-sm btn-block']) !!}
@endsection