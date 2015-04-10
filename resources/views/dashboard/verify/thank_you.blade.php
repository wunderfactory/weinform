@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.start{
  max-width: 980px !important;
}
.rose{
  color: #ea555c;
}
#right_navbar_container{
  padding: 20px;
}
.nav_text{
  color: #797979;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  /* ...and now for the proper property */
  transition:.5s;
}
/*.nav_text:hover{
  color: #404040;
}*/
.active{
  color: #ea555c !important;
}
</style>

<div id="background">

@include('dashboard.navbar')



<div class="container start">
    <div class="row">
        <div class="col-md-3">
          <div id="right_navbar_container">
              <p class="nav_text"><strong>Danke, dass Du deine Identität verifizierst.</strong></p>
          </div>
        </div>


<style type="text/css">

</style>

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
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Fertig!</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">Wir haben Deinen Upload erhalten. <strong>Vielen Dank!</strong> Ein Mitarbeiter unseres wundership Teams wird sich jetzt dein Bild ansehen und mit deinem Account abgleichen. Wir informieren Dich per E-Mail, wenn deine Identität verifiziert wurde.</p>
                    <hr>
                    <p class="grey">Tagsüber dauert Dieser Vorgang nur <strong>einige Minuten</strong>, wenn Du Dich also als wundership Kurier beworben hast, könnte Dein Zugang gleich freigeschaltet sein und Du kannst Deine erste Sendung mitnehmen!</p>
                    <hr>
                    <a href="{{action('UsersController@getDashboard', [Auth::user()->username])}}">
                        <button type="submit"  class="btn btn-block btn-default">
                            Zum Dashboard
                        </button>
                    </a>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection