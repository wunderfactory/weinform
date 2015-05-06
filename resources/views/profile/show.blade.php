@extends('app')

@section('content')

<div class="background_dashboard_area">

<style type="text/css">
.from_top{
  margin-top: 30px;
  position: relative;
}
#profile_container{
  background-color: white;
  max-width: 202px;
  text-align: center;
  border-top: 1px solid #ababab;
  border-left: 1px solid #ababab;
  border-right: 1px solid #ababab;
}
.avatar {
    width: 100%;
    background-image: url('{{ action('UsersController@getPicture', [$user->username]) }}');
}
#overlay{
  width: 200px;
  height: 200px;
  margin-top: 0px;
  position: absolute;
  background-color: #ea555c;
  display: none;
  opacity: 0.9;
  padding-top: 50px;
  z-index: 10000;
}
.camera_icon{
  font-size: 70px;
}
#profile_container:hover #overlay{
  display: block;
}
</style>

<div class="container dashboard">
    <div class="row from_top">
        <div class="col-md-3">
            <div id="profile_container">
                @if(Auth::user()->id == $user->id)
                <a class="white" href="{{ action('SettingsProfileController@getProfilePicture', [Auth::user()->username]) }}">
                  <div id="overlay">
                    <p><i class="pe-7s-camera camera_icon"></i><br>
                    Profilbild ändern</p>
                  </div>
                </a>
                @endif
                <div class="avatar"></div>
                <img class="avatar" src="{{ action('UsersController@getPicture', [$user->username]) }}" alt="Profile Picture">
            </div>
            <div class="user_infobox">
                <div>
                  <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                  <p>{{ $user->username }}</p>
                </div>
                <div>
                  @if(Auth::user()->id == $user->id)
                      <a href="{{ action('SettingsProfileController@getIndex',[$user->username]) }}">Profil bearbeiten</a>
                  @endif
                </div>
            </div>
            
            <div class="tall_actionbox">
                <i class="pe-7s-car"></i>
                <h4>{{ $user->first_name}} ist Fahrer!</h4>
                <p>Mit einem verfizierten Profil und ein paar Klicks finanziert {{ $user->first_name }} jetzt mit <strong>wundership</strong> seine Autofahrten oder Zugreisen!<br> Hört sich gut an?</p>
                <a href=""><p class="dark_grey"><strong>Fahrer werden!</strong></p></a>
            </div>

            <hr>

            <div class="actionbox">
                <i class="pe-7s-attention"></i>
                <p>Gab es ein Problem mit {{ $user->first_name }}?</p>
                <a href=""><p class="dark_grey"><strong>{{ $user->first_name }} melden.</strong></p></a>
            </div>

        </div>


<style type="text/css">
.grey{
  color: #828282;
}
.right_container{
  margin-left: 10px;
  margin-top: 11px;
}
.large_icon{
  font-size: 40px;
}
.map_icon{
  margin-left: 10px;
}
.way_icon{
  margin-left: 12px;
}
.culture_icon{
  margin-left: 8px;
}
.lock_icon{
  margin-left: 8px;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Hi! Ich bin {{ $user->first_name }}!</strong></p>
                </div>
                <div class="infobox_content">
                    @if($user->profile->hometown && $user->settings->hidden_hometown)
                    <div class="row">
                        <div class="col-md-1">

                            <i class="pe-7s-map-2 large_icon map_icon"></i>

                        </div>
                        <div class="col-md-8 right_container">
                            {{ $user->profile->hometown }}
                        </div>
                    </div>
                    @else
                    @endif
                    @if($user->profile->job && $user->settings->hidden_job)
                    <hr>
                    <div class="row">
                        <div class="col-md-1">

                            <i class="pe-7s-culture large_icon culture_icon"></i>

                        </div>
                        <div class="col-md-8 right_container">
                            {{ $user->profile->job }}
                        </div>
                    </div>
                    @else
                    @endif
                    @if($user->profile->languages && $user->settings->hidden_languages)
                    <hr>
                    <div class="row">
                        <div class="col-md-1">

                            <i class="pe-7s-way large_icon way_icon"></i>

                        </div>
                        <div class="col-md-8 right_container">
                            Sprachen, die {{ $user->first_name }} spricht: {{ $user->profile->languages }}
                        </div>
                    </div>
                    @else
                    @endif
                    @if(!$user->profile->languages && !$user->profile->job && !$user->profile->hometown || !$user->settings->hidden_languages && !$user->settings->hidden_job && !$user->settings->hidden_hometown)
                    <div class="row">
                        <div class="col-md-1">

                            <i class="pe-7s-door-lock large_icon lock_icon"></i>

                        </div>
                        <div class="col-md-8 right_container">
                            {{ $user->first_name }} hat noch keine Profilinfos freigegeben.
                        </div>
                    </div>
                    @else
                    @endif
                </div> 
            </div>



            @if($user->profile->bio && $user->settings->hidden_bio)
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Über mich</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="grey">{{ $user->profile->bio }}</p>
                </div> 
            </div>
            @else
            @endif

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
  margin-left: 13px;
}
.check{
  color: #2fd155;
}
.not_verified_icon{
  font-size: 55px;
  color: #2fd155;
}
.id_icon{
  margin-left: 6px;
}
.right_container{
  margin-left: 20px;
  margin-top: 16px;
}
.button_help{
  border: none;
}
.identity_button{
  margin-top: -10px;
}
</style>


<!-- VERIFICATIONS -->

          <div class="infobox">
            <div class="infobox_header">
                <p class="grey"><strong>Verifizierungen</strong>
                <button type="button" class="btn btn-default pull-right verification_button button_help" data-toggle="popover" data-placement="left" title="" data-content="Ein verifiziertes Profil signalisiert anderen Nutzern Vertrauenswürdigkeit. So nehmen Kuriere die Sendungen von verifizierten Nutzern gern an und das wundership-team wählt verifizierte Nutzer gern als Fahrer aus." data-html="true" data-original-title="Verifizierungen"><strong>?</strong></button>
            </div>
            <div class="infobox_content">
              @if($user->verification && $user->verification->verified)
              <div class="row">
                  <div class="col-md-1">
                       <i class="pe-7s-id not_verified_icon id_icon"></i>
                  </div>
                  <div class="col-md-8 right_container">
                      <p class="grey"><strong>{{ $user->first_name }} hat seine Identität verifiziert.</strong></p>
                  </div>
                  <div class="right_container"><button type="button" class="btn btn-default identity_button" data-toggle="popover" data-placement="left" title="" data-content="Wir haben Patricks Identität anhand eines Fotos eines offiziellen Ausweises (Führerschein, Personalausweis oder Reisepass) bestätigt." data-html="true" data-original-title="Verifizierte Identität">Was ist das?</button></div>
                    
              </div>
              <hr>
              @endif
              <div class="row">
                  <div class="col-md-4">
                    <div class="check_container"><i class="pe-7s-check box_icon_large check"></i></div>
                    <div class="text_container"><p>E-Mail-Adresse<br>Bestätigt</p></div>
                  </div>
                  @if($user->phoneNumbers->first()->verified)                   
                  <div class="col-md-4">
                    <div class="check_container"><i class="pe-7s-check box_icon_large check"></i></div>
                    <div class="text_container"><p>Handynummer<br>Bestätigt</p></div>
                  </div>
                  @else
                  @endif
                  @if($user->facebookUser)
                  <div class="col-md-4">
                    <div class="check_container"><i class="pe-7s-check box_icon_large check"></i></div>
                    <div class="text_container"><p>Facebook-Freunde<br>{{ $user->facebookUser->friends }} Freunde</p></div>
                  </div>
                  @else
                  @endif
              </div>
            </div> 
          </div><!-- /infobox -->


          <div class="infobox">
            <div class="infobox_header">
                <p class="grey"><strong>Bewertungen</strong></p>
            </div>
            <div class="infobox_content">
                <p class="rose">{{ $user->first_name }} hat noch keine <strong>Bewertungen</strong> erhalten.</p>
            </div> 
          </div><!-- /infobox -->

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection