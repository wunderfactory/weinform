@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

<div id="payout" class="container">
    <div class="row">
        @include('dashboard.account.side-navbar')


<style type="text/css">

</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>Auszahlungsdaten bereitstellen</strong></p>
                </div>
                <div class="infobox_content">
                  <p class="box_rose">Um Dich für Deine ausgelieferten Sendungen bezahlen zu können, benötigen wir von Dir einen Auszahlungsaccount.</p>
                    <div class="row">
                        <div class="col-md-2">

                            <i class="pe-7s-cash large_icon cash_icon"></i>

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