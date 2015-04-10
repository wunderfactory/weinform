@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.notifications{
  max-width: 980px !important;
}
</style>

<div id="background">

@include('dashboard.navbar')

<div class="container notifications">
    <div class="row">
        @include('dashboard.account.side-navbar')


<style type="text/css">
.mail_icon{
  margin-left: 6px;
}
.large_icon{
  font-size: 55px;
}
.right_container{
  margin-left: 17px;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>E-Mail-Einstellungen</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="box_grey">Wähle aus, zu welchen Ereignissen wir Dir eine E-Mail senden sollen.</p>
                    <hr>
                    <div class="row">
                          <div class="col-md-1">
                               <i class="pe-7s-mail box_large_icon mail_icon"></i>
                          </div>
                          <div class="col-md-9 right_container">
                              <p class="box_rose">HIER DIE AUSWAHL.</p>   
                            </div>
                      </div>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection