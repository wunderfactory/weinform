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
                    <p class="grey"><strong>Schritt 1</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">Bitte wähle aus, ob Du ein Bild von Deinem Ausweis <strong>hochladen</strong> möchtest oder eins mit deiner <strong>Webcam aufnehmen</strong> möchtest.<br> <strong>TIPP: </strong>Mit der Webcam aufnehmen dauert nur ein paar Sekunden.</p>
                    <hr>
                    <h1>HIER JETZT PHOTO SHNAPSHOT ODER UPLOAD</h1>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection