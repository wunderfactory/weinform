@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.dashboard{
  max-width: 980px !important;
}
</style>

<div id="background">

@include('dashboard.navbar')

<style type="text/css">
.rose{
  color: #ea555c;
}
.white{
  color: white;
}
.icon_large{
  font-size: 20px;
}
#left_news_container{
  max-width: 200px;
  background-color: #00B3FF;
  text-align: center;
  padding: 20px;
  position: relative;
  margin-bottom: 20px;
  border: 1px solid #ababab;
}
.btn-white{
  color: white;
  border-color: white;
}
</style>

<div class="container dashboard">
    <div class="row">
        <div class="col-md-3">

            @include('notybox.sidebar_tall_actionbox_deliverer')

            @include('notybox.sidebar_helpbox')

        </div><!-- /.col-md-3->

<!--------------------------- -->

<style type="text/css">
.infopart{
  padding-top: 2px;
}
</style>

        <div class="col-md-8">

                <div>
                    <h4>Aktive Sendungen</h4>
                    @include('components.shipment.list.list', ['shipments' => $shipping])
                </div>
                <div>
                    <hr>
                    <h4>Vorlagen von Sendungen</h4>
                    <p>Du hast hier noch nicht alle Daten angegeben, um die Sendung zu veröffentlichen.</p>
                    @include('components.shipment.list.list', ['shipments' => $stubs])
                </div>
                <div>
                    <hr>
                    <h4>Abgeschlossene Sendungen</h4>
                    @include('components.shipment.list.list', ['shipments' => $shipped])
                </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection