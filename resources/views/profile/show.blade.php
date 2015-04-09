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
.from_top{
  margin-top: 30px;
  position: relative;
}
</style>

<div id="background">

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
  font-size: 30px;
}
#left_info_container{
  max-width: 200px;
  background-color: #ffa200;
  margin-top: 20px;
  padding: 20px;
  position: relative;
  margin-bottom: 20px;
}
.btn-white{
  color: white;
  border-color: white;
}
.dark_grey{
  color: #2e2e2e;
}
</style>

<div class="container dashboard">
    <div class="row from_top">
        <div class="col-md-3">
            <div id="profile_container">
                @if($user->facebookUser)
                    <img class="avatar" src="https://graph.facebook.com/{{ $user->facebookUser->id }}/picture?type=large" alt="...">
                @else
                    <img class="avatar" src="{{ asset('gsd/img/faces/face-1.jpg') }}" alt="...">
                @endif
                <div>
                  <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                  <p>{{ $user->username }}</p>
                </div>
                <div>
                  @if(Auth::user()->id == $user->id)
                      <a href="{{ action('SettingsProfileController@getIndex',[$user->username]) }}"> @lang('profile.edit')</a>
                  @endif
                </div>
            </div>
            <div id="left_info_container">
                <i class="fa fa-car white icon_large"></i>
                <h4>{{ $user->first_name}} ist Fahrer!</h4>
                <p>Mit einem verfizierten Profil und ein paar Klicks finanziert {{ $user->first_name }} jetzt mit wundership seine Autofahrten oder Zugreisen!<br> Hört sich gut an?</p>
                <a href=""><p class="dark_grey"><strong>Fahrer werden!</strong></p></a>
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
                    <p class="grey"><strong>Hi! Ich bin {{ $user->first_name }}!</strong></p>
                </div>
                <div class="infobox_content">
                  @if($user->profile->hometown && $user->settings->hidden_hometown)
                    <p><i class="fa fa-map-marker"></i> Wohnort: {{ $user->profile->hometown }}</p>
                  @else
                  @endif
                  @if($user->profile->job && $user->settings->hidden_job)
                    <p><i class="fa fa-university"></i> Job: {{ $user->profile->job }}</p>
                  @else
                  @endif
                  @if($user->profile->languages && $user->settings->hidden_languages)
                    <p><i class="fa fa-language"></i> Sprachen, die {{ $user->first_name }} spricht: {{ $user->profile->languages }}</p>
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
                    <p class="rose">{{ $user->profile->bio }}</p>
                </div> 
            </div>
            @else
            @endif

<!-- MESSAGES -->

          <div class="infobox">
            <div class="infobox_header">
                <p class="grey"><strong>Bewertungen</strong></p>
            </div>
            <div class="infobox_content">
                <p class="rose">{{ $user->first_name }} hat noch keine <strong>Bewertungen</strong> erhalten.</p>
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
            </div> 
          </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection