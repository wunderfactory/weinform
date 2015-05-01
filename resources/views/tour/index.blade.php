@extends('layouts.container')

@section('title')
    <form id="filter-form" class="form-inline">
        Show tours from
        {!! Form::select('filter[from]', $from_cities->lists('city', 'city'), $filter['from'], ['class' => 'form-control input-lg', 'onchange' => 'this.form.submit()']) !!}
        to
        {!! Form::select('filter[to]', $to_cities->lists('city', 'city'), $filter['to'], ['class' => 'form-control input-lg', 'onchange' => 'this.form.submit()']) !!}
        .
    </form>
@endsection

@section('content')

    @foreach($tours as $tour)
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>{{ $tour->from->city }}</strong>
                <button type="button" class="btn btn-link text-muted btn-xs pull-right" data-target="#tour-{{ $tour->id }}-stops" data-toggle="collapse" aria-expanded="false" aria-controls="tour-{{ $tour->id }}-stops">
                    Zwischenstopps ein-/ausblenden
                </button>
            </div>

            <ul id="tour-{{ $tour->id }}-stops" class="list-group collapse">
                <?php
                    $address = $tour->from;
                    while($address != $tour->to)
                    {
                        $segment = $tour->segments()->where('address_from', $address->id)->first();
                ?>
                <li class="list-group-item">
                    {{ $segment->from->city }} - {{ $segment->to->city }}
                    @if($segment->allow_address_delivery)
                        <span class="label label-info"><i class="fa fa-bullseye"></i> {{ $segment->address_delivery_range }}km</span>
                    @endif
                </li>
                <?php
                        $address = $segment->to;
                    }
                ?>
            </ul>

            <div class="panel-footer">
                <strong>{{ $tour->to->city }}</strong>
            </div>

            <div class="panel-footer">
                <p>
                    <a href="{{ route('user.show', $tour) }}" class="btn btn-link btn-sm">
                        <img class="img-rounded" height="34px" src="http://graph.facebook.com/moritzew/picture?type=square" />
                        {{ $tour->user->name }}
                    </a>
                    @include('components.rating', ['user' => $tour->user])
                    <span class="well well-sm">
                        <span class="text-muted">0,07€ / km</span>
                        <span class="text-muted">{{ $tour->start->diffForHumans() }}</span>
                    </span>
                    {!! link_to_route('tour.booking.create', 'Jetzt buchen', [$tour], ['class' => 'btn btn-primary pull-right']) !!}
                </p>
            </div>
        </div>
    @endforeach
@endsection