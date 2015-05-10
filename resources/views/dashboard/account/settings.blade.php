@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

<div id="settings" class="container">
    <div class="row">
        @include('dashboard.account.side-navbar')

            <div class="col-md-8">
                <div class="infobox">
                    <div class="header">
                        <p><strong>Account löschen</strong></p>
                    </div>
                    <div class="content">
                        <button href="#" class="btn btn-fill btn-danger">Account löschen</button>
                    </div> 
                </div>

          </div><!-- /col-md-8 -->
      </div><!-- /row -->
    </div><!-- /container -->

</div>

@endsection