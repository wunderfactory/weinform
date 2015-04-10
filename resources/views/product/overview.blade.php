@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.overview{
  max-width: 980px !important;
}
</style>

<div id="background">

<style type="text/css">
.rose{
  color: #ea555c;
}
.white{
  color: white;
}
.top_down{
  margin-top: 30px;
  position: relative;
}
#head_text_wrapper{
  width: 100%;
  text-align: center;
}
#pickup_container{
  height: 200px;
  background-color: #ffa200;
  padding: 20px;
  margin-top: 30px;
}
.icon_wrapper{
  float: left;
}
.large_icon{
  font-size: 100px;
  margin-top: 30px;
  margin-left: 20px;
}
.text_wrapper{
  float: left;
}
.product_text{
  margin-top: 45px;
  font-size: 40px;
}
#send_container{
  height: 200px;
  background-color: #00B3FF;
  padding: 20px;
  margin-top: 30px;
}

@-webkit-keyframes wiggle {
  0% {-webkit-transform:rotate(4deg);}
  50% {-webkit-transform:rotate(-4deg);}
  100% {-webkit-transform:rotate(4deg);}
}
 
/* firefox */
@-moz-keyframes wiggle {
  0% {-moz-transform:rotate(4deg);}
  50% {-moz-transform:rotate(-4deg);}
  100% {-moz-transform:rotate(4deg);}
}
 
/* anyone brave enough to implement the ideal method */
@keyframes wiggle {
  0% {transform:rotate(4deg);}
  50% {transform:rotate(-4deg);}
  100% {transform:rotate(4deg);}
}
 
.wiggle {
  -webkit-animation: wiggle 0.5s infinite;
  -moz-animation: wiggle 0.5s infinite;
  animation: wiggle 0.5s infinite;
}
</style>

<div class="container overview">
    <div class="row top_down">

      <div id="head_text_wrapper">
      <h2>Hi {{ $user->first_name }}!</h2>
      <p>Mitnehmen oder Versenden?</p>
      </div>

        <div class="col-md-6">
          <a href=""><div id="pickup_container">
            <div class="icon_wrapper col-md-5">
                <i id="car_icon" class="fa fa-car white large_icon"></i>
            </div>
            <div class="text_wrapper col-md-5">
              <p class="product_text white">Mitnehmen!</p>
            </div>
          </div></a>
        </div>

        <div class="col-md-6">
          <a href=""><div id="send_container">
            <div class="icon_wrapper col-md-5">
              <i id="parcel_icon" class="fa fa-archive white large_icon"></i>
            </div>
            <div class="text_wrapper col-md-5">
              <p class="product_text white">Versenden!</p>
            </div>
          </div></a>
        </div>
    </div><!-- /row -->


    <div class="row">
      <div class="col-md-12">

<style type="text/css">
#text_left{
  float: left;
  position: relative;
  width: 460px;
}
#image_right{
  float: left;
  position: relative;
}
.infobox_image{
  background-color: white;
  border: 1px solid #ababab;
  margin-top: 20px;
  height: 302px;
  margin-bottom: 20px;
}
.image_infobox_header{
  position: top;
  height: 60px;
  padding: 15px;
  width: 500px;
  background-color: #e8e8e8;
  /*border-bottom: 1px solid #ababab;*/
}
.image_container{
  width: 473px;
  background-color: red;
  height: 300px;
  background-image: url('{{ asset('images/stock/friends.jpg') }}');
  background-size: cover;
}
</style>

            <div class="infobox_image">
                <div id="text_left">
                  <div class="image_infobox_header">
                    <p class="grey"><strong>Lade deine Freunde ein!</strong></p>
                  </div>
                  <div class="infobox_content">
                    <p class="rose">Zusammen ist doch alles viel cooler! Lade ein paar Freunde von dir ein und erhalte Gutscheine für geführenfreie wundership-Sendungen!</p><br>
                    <a href="{{ url('friends') }}"><button class="btn btn-default">Jetzt Freunde einladen!</button></a>
                  </div>
                </div>
                <div id="image_right" class="col-md-6">
                  <div class="image_container"></div>
                </div>  
            </div>


<!------------------------------- -->


            <div class="warningbox">
                <div class="warningbox_header">
                    <div class="col-md-1"><i class="pe-7s-user box_icon_large"></i></div>
                    <div class="col-md-8 box_heading_container"><p class="box_white"><strong>Bitte vervollständige Dein Profil.</strong></p></div>
                   
                </div>
                <div class="warningbox_content">
                    <p class="box_rose">Bitte <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile') }}">vervollständige dein Profil</a>, damit es für andere Nutzer <strong>vertrauenswürdiger</strong> erscheint. Auch ein <strong><a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/profile-picture') }}">Profilbild</a></strong> von Dir hilft dabei.</p>
                </div> 
            </div>


<style type="text/css">
#text_right{
  float: left;
  position: relative;
  width: 460px;
}
#image_left{
  float: left;
  position: relative;
  z-index: 1;
}
.infobox_image{
  background-color: white;
  border: 1px solid #ababab;
  margin-top: 20px;
  height: 302px;
  margin-bottom: 20px;
}
#image_infobox_header_image_left{
  position: top;
  height: 60px;
  padding: 15px;
  width: 475px;
  margin-left: -2px;
  z-index: -1;
  background-color: #e8e8e8;
  /*border-bottom: 1px solid #ababab;*/
}
#image_container_left{
  width: 473px;
  background-color: red;
  height: 300px;
  background-image: url('{{ asset('images/presentation/shipments/ship1.jpg') }}');
  background-size: cover;
}
</style>

            <div class="infobox_image">
                <div id="text_right">
                    <div id="image_container_left"></div>
                </div>
                <div id="image_left" class="col-md-6">
                  <div id="image_infobox_header_image_left">
                      <p class="grey"><strong>Das Wunder des Tages!</strong></p>
                  </div>
                  <div class="infobox_content">
                      <p class="rose">Armin hat erfolgreich seinen Biolite Hightech-Grill von Hamburg nach Berlin versendet!</p><br>
                      <a href="#"><button class="btn btn-default">Mehr Wunder sehen!</button></a>
                  </div>
                </div>  
            </div>



<!------------------------------- -->

            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey">Wir suchen <strong>Praktikanten</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="box_grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>

<!------------------------------- -->

<!-- MESSAGES -->

          {{-- <div class="infobox">
            <div class="infobox_header">
                <p class="grey"><strong>Nachrichten</strong></p>
            </div>
            <div class="infobox_content">
                <p class="rose">Messages</p>
            </div> 
          </div> --}}


          </div><!-- /col-md-12 -->
      </div><!-- /row -->
</div><!-- /container -->



@endsection