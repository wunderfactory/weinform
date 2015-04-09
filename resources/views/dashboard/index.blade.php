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
#profile_container{
  background-color: white;
  max-width: 202px;
  text-align: center;
  padding-bottom: 30px;
  border: 1px solid #ababab;
}
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
  background-color: #ffa200;
  margin-top: 20px;
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

.avatar {
    width: 100%;
}
#overlay{
  width: 200px;
  height: 200px;
  margin-top: 0px;
  position: absolute;
  background-color: #ea555c;
  opacity: 0.9;
  display: none;
  padding-top: 50px;
}
.camera_icon{
  font-size: 70px;
}
#profile_container:hover #overlay{
  display: block;
}
.white{
  color: white !important;
}
</style>

<div class="container dashboard">
    <div class="row">
        <div class="col-md-3">
            <div id="profile_container">
                @if(Auth::user()->id == $user->id)
                <div id="overlay">
                  <a class="white" href="{{ action('SettingsProfileController@getProfilePicture', [Auth::user()->username]) }}"><p><i class="pe-7s-camera camera_icon"></i><br>
                  Profilbild ändern</p></a>
                </div>
                @endif
                <img class="avatar" src="{{ action('UsersController@getPicture', [$user->username]) }}" alt="Profile Picture">
                <div>
                  <h3>{{ $user->first_name }}</h3>
                </div>
                <div>
                    <a href="{{ url('/user/'.Auth::user()->username) }}"><p class="rose">Profil ansehen</p></a>
                    <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/') }}"><p class="rose">Profil bearbeiten</p></a>
                </div>
            </div>



            <div id="left_news_container">
                <i class="pe-7s-car large_icon help_icon"></i>
                <h4>Fahrer werden!</h4>
                <p>Werde Fahrer und verdiene schnell eingene Euronen! Es ist herrlich, für wundership zu fahren! Du wirst es so genießen!</p><br>
                <a href="#"><p class="dark_grey"><strong>Ja, ich will!</strong></p></a>
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
                    <p class="grey"><strong>Hinweis!</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div> 
            </div>

            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Hinweis!</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div> 
            </div>

<!-- MESSAGES -->

          <div class="infobox">
            <div class="infobox_header">
                <p class="grey"><strong>Nachrichten</strong></p>
            </div>
            <div class="infobox_content">
                <p class="rose">Messages</p>
            </div> 
          </div>


<style type="text/css">
  .question{
    font-size: 20px;
  }
  .verification_button{
    margin-top: -6px;
  }
  .check_container{
    float: left;
    padding-top: 6px;
  }
  .text_container{
    float: left;
    margin-left: 17px;
  }
  .check{
    color: #2fd155;
  }
</style>


<!-- VERIFICATIONS -->

          <div class="infobox">
            <div class="infobox_header">
                <p class="grey"><strong>Verifizierungen</strong>
                <button type="button" class="btn btn-default pull-right verification_button" data-toggle="popover" data-placement="left" title="" data-content="Mit einem verifiziertem Profil erscheinst du für andere Nutzer vertrauenswürdiger. So nehmen Fahrer deine Sendungen gern an und das wundership-team wählt dich gern als Fahrer aus." data-html="true" data-original-title="Verifizierungen">Was ist das?</button>
            </div>
            <div class="infobox_content">
              <div class="row">
                  <div class="col-md-4">
                    <div class="check_container"><i class="fa fa-check fa-2x check"></i></div>
                    <div class="text_container"><p>E-Mail-Adresse<br>Bestätigt</p></div>
                  </div>
                  @if($user->phoneNumbers->first()->verified)                   
                  <div class="col-md-4">
                    <div class="check_container"><i class="fa fa-check fa-2x check"></i></div>
                    <div class="text_container"><p>Handynummer<br>Bestätigt</p></div>
                  </div>
                  @else
                  @endif
                  @if($user->facebookUser)
                  <div class="col-md-4">
                    <div class="check_container"><i class="fa fa-check fa-2x check"></i></div>
                    <div class="text_container"><p>Facebook-Freunde<br>{{ $user->facebookUser->friends }} Freunde</p></div>
                  </div>
                  @else
                  @endif
              </div>
              <div>
              <br>
              <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/verifications') }}"><p class="rose"><strong>Verifizierungen hinzufügen</strong></p></a>
              </div>
            </div> 
          </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection