@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.profile{
  max-width: 980px !important;
}
</style>

<div id="background">

@include('dashboard.navbar')



<div class="container profile">
    <div class="row">
        @include('dashboard.profile.side-navbar')

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>Profilfoto ändern</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="box_rose">HIER die Bewertungen des users</p>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection