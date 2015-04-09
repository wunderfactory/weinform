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
  background-color: #70aaab;
  margin-top: 20px;
  text-align: center;
  padding: 20px;
  position: relative;
  margin-bottom: 20px;
}
.btn-white{
  color: white;
  border-color: white;
}
</style>

<div class="container dashboard">
    <div class="row">
        <div class="col-md-3">
            <div id="profile_container">
                @if($user->facebookUser)
                    <img class="avatar" src="https://graph.facebook.com/{{ $user->facebookUser->id }}/picture?type=large" alt="...">
                @else
                    <img class="avatar" src="{{ asset('gsd/img/faces/face-1.jpg') }}" alt="...">
                @endif
                <div>
                  <h3>{{ $user->first_name }}</h3>
                </div>
                <div>
                    <a href="{{ url('/user/'.Auth::user()->username) }}"><p class="rose">Profil ansehen</p></a>
                    <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/') }}"><p class="rose">Profil bearbeiten</p></a>
                </div>
            </div>
            <div id="left_news_container">
                <i class="fa fa-car white icon_large"></i>
                <h4>Fahrer werden!</h4>
                <p>Werde Fahrer und verdiene schnell eingene Euronen! Es ist herrlich, für wundership zu fahren! Du wirst es so genießen!</p><br>
                <button href="#" class="btn btn-block btn-lg btn-fill btn-warning">Ja, Ich will!</button>
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