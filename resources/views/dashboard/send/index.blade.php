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

            <div id="left_news_container">
                <i class="pe-7s-box2 large_icon help_icon"></i>
                <h4>Der Fernseher soll endlich mal zum Kumpel?</h4>
                <p>Stell jetzt kostenlos deine Sendung bei wundership ein und sie wird bei dir abgeholt werden.</p><br>
                <a href="#"><p class="dark_grey"><strong>Sendung einstellen.</strong></p></a>
            </div>



<style type="text/css">
#action_container{
  max-width: 200px;
  background-color: white;
  margin-top: 20px;
  padding: 20px;
  position: relative;
  margin-bottom: 20px;
  border: 1px solid #ababab;
}
.help_icon{
  margin-bottom: 10px;
}
.dark_grey{
  color: #2e2e2e;
}
.large_icon{
  font-size: 40px;
}
</style>


            <div id="action_container">
                <i class="pe-7s-help1 large_icon help_icon"></i>
                <p>Gab es ein Problem, {{ $user->first_name }}?</p>
                <a href="#"><p class="dark_grey"><strong>Kontaktiere das wundership team.</strong></p></a>
            </div>



        </div><!-- /.col-md-3->

<!--------------------------- -->

<style type="text/css">
.infopart{
  padding-top: 2px;
}
</style>

        <div class="col-md-8">
            
          <div class="bluebox">
            <div class="bluebox_header">
                <p class="box_white"><strong>Deine Sendung "Toller Grill" / 13.02.2015</strong></p>
            </div>
            <div class="bluebox_content">
              <div class="row">
                <div class="col-md-3 infopart"><p>Hamburg</p></div>
                <div class="col-md-1"><i class="pe-7s-angle-right box_icon_large"></i></div>
                <div class="col-md-3 infopart"><p>Berlin</p></div>
                <div class="col-md-3 pull-right infopart"><a href="#"><p>Sendung ansehen</p></a></div>
              </div>
            </div> 
          </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection