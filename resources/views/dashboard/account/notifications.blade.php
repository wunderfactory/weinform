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
.nav_text:hover{
  color: #c1c1c1;
}
.active{
  color: #404040 !important;
}
</style>

<div class="container notifications">
    <div class="row">
        <div class="col-md-3">
          <div id="right_navbar_container">
            <a href=""><p class="nav_text active"><strong>Benachrichtigungen</strong></p></a>
            <a href=""><p class="nav_text"><strong>Zahlungsarten</strong></p></a>
            <a href=""><p class="nav_text"><strong>Auszahlungen</strong></p></a>
            <a href=""><p class="nav_text"><strong>Privatsphäre</strong></p></a>
            <a href=""><p class="nav_text"><strong>Sicherheit</strong></p></a>
            <a href=""><p class="nav_text"><strong>Einstellungen</strong></p></a>
            <hr>
            <button href="#" class="btn btn-block btn-warning">Freunde einladen!</button>
          </div>      
        </div>


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
                    <p class="grey"><strong>E-Mail-Einstellungen</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection