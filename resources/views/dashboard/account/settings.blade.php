@extends('app')

@section('content')

<div class="background_dashboard_area">

    @include('dashboard.navbar')

    <div class="container dashboard_area_container">
        <div class="row">

            @include('dashboard.account.side-navbar')

            <div class="col-md-8">
                <div class="infobox">
                    <div class="infobox_header">
                        <p class="box_grey"><strong>Account löschen</strong></p>
                    </div>
                    <div class="infobox_content">
                        <button href="#" class="btn btn-fill btn-danger">Account löschen</button>
                    </div> 
                </div>

          </div><!-- /col-md-8 -->
      </div><!-- /row -->
    </div><!-- /container -->

</div>

@endsection