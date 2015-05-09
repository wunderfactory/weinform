@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

<div id="payment" class="container">
    <div class="row">
        @include('dashboard.account.side-navbar')

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Zahlungsdaten</strong></p>
                </div>
                <div class="infobox_content">
                  <p class="rose">Um Sendungen einstellen zu können, benötigst du einen validierten Zahlungsaccount.</p>
                    <div class="row">
                        <div class="col-md-2">

                            <i class="pe-7s-note2 large_icon note_icon"></i>

                        </div>
                        <div class="col-md-5 middle_container">
                            
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection