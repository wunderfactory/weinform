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

<style type="text/css">
.rose{
  color: #ea555c;
}
</style>

<div class="container notifications">
    <div class="row">
        @include('dashboard.account.side-navbar')


<style type="text/css">
.infobox{
  width: 100%;
  background-color: white;
  border: 1px solid #ababab;
  margin-bottom: 20px;
}
.infobox_header{
  width: 100%;
  position: top;
  height: 60px;
  padding: 15px;
  background-color: #e8e8e8;
  border-bottom: 1px solid #ababab;
  vertical-align: center;
}
.infobox_content{
  padding: 15px; 
}
.grey{
  color: #828282;
}
.middle_container{
  text-align: right;
  margin-top: 10px;
}
.very_small{
  font-size: 15px;
  margin-bottom: 21px;
}
.large_icon{
  font-size: 80px;
}
.cash_icon{
  margin-top: 24px;
  margin-left: 10px;
}
input{
  margin-top: 2px;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Auszahlungsdaten bereitstellen</strong></p>
                </div>
                <div class="infobox_content">
                  <p class="rose">Um Dich für Deine ausgelieferten Sendungen bezahlen zu können, benötigen wir von Dir einen Auszahlungsaccount.</p>
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