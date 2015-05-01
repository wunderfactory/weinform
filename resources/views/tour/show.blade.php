@extends('layouts.paneled')

@section('title')
Tour am {{ $tour->start->formatLocalized('%A den %d. %B %Y') }} von {{ $tour->from->city }} nach {{ $tour->to->city }}
    @if(!$tour->is_published)
        <span class="label label-default">unpublished</span>
    @endif
@endsection

@section('content')
    <div class="well well-sm">
        €{{ $tour->km_price }}/km
    Start um {{ $tour->start->formatLocalized('%R') }}
    </div>
    @foreach($tour->segments as $segment)
        <p>{{ $segment->from->city }} - {{ $segment->to->city }}</p>
    @endforeach

    @if(!$tour->is_published)
        {!! link_to_route('tour.edit', 'Edit', [$tour], ['class' => 'btn btn-default btn-sm btn-block']) !!}
        {!! link_to_route('tour.publish', 'Veröffentlichen', [$tour], ['class' => 'btn btn-default btn-sm btn-block']) !!}
    @endif
@endsection