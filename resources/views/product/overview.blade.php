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



<style type="text/css">
.infobox{
  width: 100%;
  background-color: white;
  border: 1px solid #ababab;
  margin-top: 20px;
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
      <div class="row">
        <div class="col-md-12">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey">Vervollständige dein <strong>Profil</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>

<style type="text/css">
.image_left{
  float: left;
  position: relative;
  width: 460px;
}
.image_right{
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
                <div class="image_left">
                  <div class="image_infobox_header">
                    <p class="grey"><strong>Lade deine Freunde ein!</strong></p>
                  </div>
                  <div class="infobox_content">
                    <p class="rose">Zusammen ist doch alles viel cooler! Lade ein paar Freunde von dir ein und erhalte Gutscheine für geführenfreie wundership-Sendungen!</p><br>
                    <a href="{{ url('friends') }}"><button class="btn btn-default">Jetzt Freunde einladen!</button></a>
                  </div>
                </div>
                <div class="image_right col-md-6">
                  <div class="image_container"></div>
                </div>  
            </div>

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