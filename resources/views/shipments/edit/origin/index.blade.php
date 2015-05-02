@extends('app')

@section('content')
    @include('components.address.list', ['addresses' => $addresses])
@endsection