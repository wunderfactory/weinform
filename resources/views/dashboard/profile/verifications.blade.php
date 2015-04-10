@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.profile{
  max-width: 980px !important;
}
</style>

<div id="background">

@include('dashboard.navbar')

<div class="container profile">
    <div class="row">
        @include('dashboard.profile.side-navbar')


<style type="text/css">
.check{
    color: #2fd155;
}
.facebook_disconnect_button{
  margin-left: 30px;
}
.not_verified_icon{
  font-size: 55px;
}
.id_icon{
  margin-left: 6px;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">

            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>Vertrauen bei wundership</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="box_rose">Verifiziere Dein Profil, um für andere Nutzer und das Team von wundership vertrauenswürdiger zu erscheinen. Wundership basiert darauf, dass Du Deinem wundership Kurier vertraust und auch Dir andere Nutzer vertrauen, wenn Du Ihnen deine Sendung mitgibst.</p>
                </div> 
            </div>

            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>Verifiziere Deine Identität</strong></p>
                </div>
                <div class="infobox_content">
                  <div class="row">
                        <div class="col-md-1">
                             <i class="pe-7s-id not_verified_icon id_icon"></i>
                        </div>
                        <div class="col-md-9 right_container">
                            <p class="rose">Eine <strong>Verifikation deiner Identität</strong> ist der einfachste und schnellste Weg, in der wundership Community Vertrauen aufzubauen. Wir gleichen dazu Deine Profildaten mit deinem offiziellen Ausweis ab. Diese Verfizierung ist besonders vertrauenswürdig und sehr wichtig, wenn Du <strong>Sendungen mitnehmen</strong> möchtest.<br> Der Vorgang dauert nur etwa <strong>eine Minute.</strong></p>
                            <a href="{{ action('SettingsVerificationController@getIndex', [Auth::user()->username]) }}"><button class="btn btn-default"><strong>Verifikation meiner Identität starten</strong></button></a>
                          </div>
                    </div>
                </div> 
            </div>

            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>Deine aktuellen Verifikationen</strong></p>
                </div>
                <div class="infobox_content">
                      <p>Email: {{$user->emails->first()->email}} <i class="fa-check-circle-o fa check"></i></p>
                      @if($user->phoneNumbers->first()->verified)
                      <p>Handynummer:
                        + {{$user->phoneNumbers->first()->country_prefix}} {{$user->phoneNumbers->first()->phone_number}} 
                            <i class="fa-check-circle-o fa check"></i></p>
                      @else   
                      @endif
                      @if($user->facebookUser)
                      <p>Facebook-Freunde {{ $user->facebookUser->friends }} Freunde<i class="fa-check-circle-o fa check"></i>
                        <button class="btn btn-info facebook_disconnect_button"><i class="fa fa-facebook"></i> Verbindung trennen</button>
                      </p>
                      @else
                      @endif
                      <hr>


<style type="text/css">
.right_container{
  margin-left: 16px;
}
.facebook{
  -webkit-font-smoothing: antialiased;
background-color: rgb(69, 92, 168);
border-bottom-left-radius: 100px;
border-bottom-right-radius: 100px;
border-top-left-radius: 100px;
border-top-right-radius: 100px;
box-sizing: border-box;
color: rgb(255, 255, 255);
display: inline-block;
fill: none;
font-family: 'Helvetica Neue', 'Open Sans', Arial, sans-serif;
font-size: 14px;
font-weight: 300;
height: 50px;
line-height: 20px;
margin-bottom: 0px;
margin-left: 6px;
margin-right: 17px;
margin-top: 0px;
opacity: 1;
padding-bottom: 15px;
padding-left: 15px;
padding-right: 15px;
padding-top: 15px;
stroke: #ffffff;
stroke-dasharray: 121px;
stroke-dashoffset: 121px;
stroke-linecap: round;
stroke-width: 4px;
text-align: center;
text-decoration: none;
}
.facebook:hover{
  color: white;
}
</style>



                      <h4>Verifikationen hinzufügen</h4>
                      @if(!$user->phoneNumbers->first()->verified)
                      <div class="row">
                          <div class="col-md-1">
                               <i class="pe-7s-phone not_verified_icon"></i>
                          </div>
                          <div class="col-md-9 right_container">
                              <p class="rose">Bestätige deine Handynummer /  
                                    {!! link_to_action('SettingsProfileController@getSendVerificationToken', 'Jetzt Code zusenden', [$user->username, $user->phoneNumbers->first()->id]) !!}</p>
                                    <form action="{{ action('SettingsProfileController@postVerifyPhone',[$user->username]) }}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <label for="token">Code eingeben</label>
                                        <input id="token" type="input" name="token">
                                        <input class="btn btn-info" type="submit" value="Bestätigen">
                                    </form>
                            </div>
                      </div>
                      <hr>
                      @endif
                      @if(!$user->facebookUser)
                      <div class="row">
                          <div class="col-md-1">
                               <a id="facebook_login" class="facebook" href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook fa-fw"></i></a>
                          </div>
                          <div class="col-md-9 right_container">
                              <p class="grey">Bestätige Deine Identität, indem Du Deinen Account mit Facebook verbindest. <a href="#">Mit Facebook verbinden</a></p>   
                            </div>
                      </div>
                      <hr>
                      @endif
                </div> 
            </div>

            {{-- <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Optionale Angaben</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">HIER ALLE DINGE, die optional sind.</p>
                </div> 
            </div> --}}

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection