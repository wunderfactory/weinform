@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.security{
  max-width: 980px !important;
  padding-top: 30px;
}
</style>

<div id="background">

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
  color: #404040;
}
.active{
  color: #ea555c !important;
}
</style>

<div class="container security">
    <div class="row">
        <div class="col-md-3">
          <div id="right_navbar_container">
            <h3>Informationen</h3>
            <hr>

            <a href=""><p class="nav_text"><strong>Privatsphäre</strong></p></a>
            <a href=""><p class="nav_text"><strong>Sicherheit</strong></p></a>
            <a href=""><p class="nav_text"><strong>Verifikationen</strong></p></a>
            <a href=""><p class="nav_text"><strong>Versenden</strong></p></a>
            <a href=""><p class="nav_text"><strong>Mitnehmen</strong></p></a>

            <hr>
            <a href="{{ url('friends') }}"><button class="btn btn-block btn-warning">Freunde einladen!</button></a>
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
            <div id="privacy" class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Privatsphäre</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
{{--                     <div class="row">
                          <div class="col-md-1">
                               <i class="pe-7s-mail large_icon mail_icon"></i>
                          </div>
                          <div class="col-md-9 right_container">
                              <p class="rose">HIER DIE AUSWAHL.</p>   
                            </div>
                    </div> --}}
                </div>
            </div>
            <div id="security" class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Sicherheit</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>
            <div id="verification" class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Verifikation</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>
            <div id="send" class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Versenden</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>
            <div id="pickup" class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Mitnehmen</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection