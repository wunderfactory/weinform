@extends('app')

@section('content')

<style type="text/css">
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

<div class="background_dashboard_area">

@include('dashboard.navbar')

    <div class="container dashboard_area_container">
        <div class="row">
            <div class="col-md-3">
                <div class="profile_container">
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
                      <h3>{{ $user->first_name }}</h3>
                    </div>
                    <div>
                        <a href="{{ url('/user/'.Auth::user()->username) }}"><p class="rose">Profil ansehen</p></a>
                        <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/') }}"><p class="rose">Profil bearbeiten</p></a>
                    </div>
                </div>

                <div class="tall_actionbox">
                    <i class="pe-7s-car"></i>
                    <h4>Fahrer werden!</h4>
                    <p>Werde Fahrer und verdiene schnell eingene Euronen! Es ist herrlich, für wundership zu fahren! Du wirst es so genießen!</p><br>
                    <a href="#"><p class="dark_grey"><strong>Ja, ich will!</strong></p></a>
                </div>

                <div class="actionbox">
                    <i class="pe-7s-help1"></i>
                    <p>Gab es ein Problem, {{ $user->first_name }}?</p>
                    <a href="#"><p class="dark_grey"><strong>Kontaktiere das wundership team.</strong></p></a>
                </div>

            </div><!-- /col-md-3 -->


    <!-------------------------------------------- -->


            <div class="col-md-8">
                @if(!$user->profile->languages && !$user->profile->hometown && !$user->profile->job && !$user->profile->bio)
                    <div class="warningbox">
                        <div class="warningbox_header">
                            <div class="col-md-1"><i class="pe-7s-camera box_icon_large"></i></div>
                            <div class="col-md-8 box_heading_container"><p class="box_white"><strong>Hi {{ $user->first_name }}! Bitte vervollständige Dein Profil.</strong></p></div>

                        </div>
                        <div class="warningbox_content">
                            <p class="box_rose">Bitte <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/') }}">vervollständige dein Profil</a>, damit es für andere Nutzer <strong>vertrauenswürdiger</strong> erscheint. Füge ein <strong>Profilbild</strong> hinzu.</p>
                        </div>
                    </div>
                @endif

                @if($user->profile->picture || $user->facebookUser)
                @else
                    <div class="orangebox">
                        <div class="orangebox_header">
                            <div class="col-md-1"><i class="pe-7s-camera box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p class="box_white"><strong>Heyho {{ $user->first_name }}! Bitte lade ein Profilbild von Dir hoch.</strong></p></div>
                           
                        </div>
                        <div class="orangebox_content">
                            <p class="box_grey"><strong>Wundership</strong> baut darauf, dass Du jedem anderen Nutzer <strong>vertrauen</strong> kannst und Ihm gern Deine Sendungen mitgibst. Ein Profilbild hilft dabei. Jetzt <a href="{{ action('SettingsProfileController@getProfilePicture', [Auth::user()->username]) }}">Profilbild hochladen</a>.</p>
                        </div> 
                    </div>
                @endif

                @if(!$user->verification)
                    <div class="warningbox">
                        <div class="warningbox_header">
                            <div class="col-md-1"><i class="pe-7s-id box_icon_large"></i></div>
                            <div class="col-md-8 box_heading_container"><p class="box_white"><strong>Hi {{ $user->first_name }}! Bitte verifiziere Deine Identität.</strong></p></div>

                        </div>
                        <div class="warningbox_content">
                            <p class="rose">Eine <strong>Verifikation deiner Identität</strong> ist der einfachste und schnellste Weg, in der wundership Community Vertrauen aufzubauen. Wir gleichen dazu Deine Profildaten mit deinem <strong>offiziellen Ausweis</strong> ab. Diese Verfizierung ist besonders vertrauenswürdig und sehr wichtig, wenn Du <strong>Sendungen mitnehmen</strong> möchtest.<br> Der Vorgang dauert nur etwa <strong>eine Minute.</strong></p>
                            <a href="{{ action('SettingsVerificationController@getIndex', [Auth::user()->username]) }}"><button class="btn btn-default"><strong>Verifikation meiner Identität starten</strong></button></a>
                        </div>
                    </div>
                @endif

                @if($user->verification && $user->verification->verified)
                    <div class="successbox">
                        <div class="successbox_header">
                            <div class="col-md-1"><i class="pe-7s-check box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p class="box_white"><strong>Deine Identität ist verifiziert.</strong></p></div>

                        </div>
                        <div class="successbox_content">
                            <p class="grey">Ab jetzt kannst Du Sendungen mitnehmen. Finanziere Deine Fahrten indem Du Sendungen mitnimmst. <strong>Jetzt loslegen.</strong></p>
                        </div>
                    </div>
                @endif

                @if($user->verification && !$user->verification->verified)
                    <div class="orangebox">
                        <div class="orangebox_header">
                            <div class="col-md-1"><i class="pe-7s-clock box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p class="box_white"><strong>Wir bearbeiten Deine Verifizierung.</strong></p></div>

                        </div>
                        <div class="orangebox_content">
                            <p class="grey">Bitte hab noch einen Moment Geduld. Wir bearbeiten gerade die <strong>Verifizierung Deiner Identität</strong>.</p>
                        </div>
                    </div>
                @endif

              <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Verifizierungen</strong>
                    <button type="button" class="btn btn-default pull-right verification_button" data-toggle="popover" data-placement="left" title="" data-content="Mit einem verifiziertem Profil erscheinst du für andere Nutzer vertrauenswürdiger. So nehmen Fahrer deine Sendungen gern an und das wundership-team wählt dich gern als Fahrer aus." data-html="true" data-original-title="Verifizierungen">Was ist das?</button>
                </div>
                <div class="infobox_content">
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
                  <div>
                  @if($user->facebookUser && $user->phoneNumbers->first()->verified)
                  @else
                    <br>
                    <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/verifications') }}"><p class="rose"><strong>Verifizierungen hinzufügen</strong></p></a>
                  @endif
                  </div>
                </div> 
              </div>

          </div><!-- /col-md-8 -->
      </div><!-- /row -->
    </div><!-- /container -->


</div>

@endsection