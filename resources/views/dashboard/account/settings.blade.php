@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.settings{
  max-width: 980px !important;
}
</style>

<div id="background">

@include('dashboard.navbar')

<div class="container settings">
    <div class="row">
        @include('dashboard.account.side-navbar')

<!-- INFOBOXES -->

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