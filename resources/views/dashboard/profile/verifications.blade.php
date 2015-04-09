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
.check{
    color: #2fd155;
}
.facebook_disconnect_button{
  margin-left: 30px;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Verifizierte Identifikationen</strong></p>
                </div>
                <div class="infobox_content">
                      <p class="rose">Verifiziere Dein Profil, um für andere Nutzer und das Team von wundership vertrauenswürdiger zu erscheinen. Wundership basiert darauf, dass Du Deinem wundership Kurier vertraust und auch Dir andere Nutzer vertrauen, wenn Du Ihnen deine Sendung mitgibst.</p>
                      <hr>
                      <h4>Deine aktuellen Verifikationen</h4>
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
.not_verified_icon{
  font-size: 55px;
}
.right_container{
  margin-left: 13px;
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
.id_icon{
  margin-left: 6px;
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
                      <div class="row">
                          <div class="col-md-1">
                               <i class="pe-7s-id not_verified_icon id_icon"></i>
                          </div>
                          <div class="col-md-9 right_container">
                              <p class="rose">Bestätige Deine Identität, indem Du Deinen <strong>Führerschein</strong> oder <strong>Personalausweis</strong> hochlädst. Wir sehen uns dein Dokument dann an und schalten die Verifizierung für dich frei.<br><br>Diese Verfizierung ist besonders vertrauenswürdig und sehr wichtig, wenn Du <strong>Pakete mitnehmen</strong> möchtest.</p>   
                            </div>
                      </div>
                      <hr>
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