@extends('app')

@section('layout')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @yield('title')
                </div>

                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection