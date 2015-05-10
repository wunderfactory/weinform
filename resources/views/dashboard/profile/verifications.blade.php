@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

    <div id="verifications" class="container">
        <div class="row">
          @include('dashboard.profile.side-navbar')

            <div class="col-md-8">

                <div class="infobox">
                    <div class="header">
                        <p><strong>Vertrauen bei wundership</strong></p>
                    </div>
                    <div class="content">
                        <p>Verifiziere Dein Profil, um für andere Nutzer und das Team von wundership vertrauenswürdiger zu erscheinen. Wundership basiert darauf, dass Du Deinem wundership Kurier vertraust und auch Dir andere Nutzer vertrauen, wenn Du Ihnen deine Sendung mitgibst.</p>
                    </div> 
                </div>

                @if($user->verification && $user->verification->verified)
                    <div class="successbox">
                        <div class="header">
                            <div class="col-md-1"><i class="pe-7s-check box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p><strong>Deine Identität ist verifiziert.</strong></p></div>

                        </div>
                        <div class="content">
                            <p class="grey">Ab jetzt kannst Du Sendungen mitnehmen. Finanziere Deine Fahrten indem Du Sendungen mitnimmst. <strong>Jetzt loslegen.</strong></p>
                        </div>
                    </div>
                @endif

                @if(!$user->verification)
                <div class="infobox">
                    <div class="header">
                        <p><strong>Verifiziere Deine Identität</strong></p>
                    </div>
                    <div class="content">
                      <div class="row">
                            <div class="col-md-1">
                                 <i class="pe-7s-id not_verified_id_icon"></i>
                            </div>
                            <div class="col-md-9 right_container">
                                <p class="rose">Eine <strong>Verifikation deiner Identität</strong> ist der einfachste und schnellste Weg, in der wundership Community Vertrauen aufzubauen. Wir gleichen dazu Deine Profildaten mit deinem offiziellen Ausweis ab. Diese Verfizierung ist besonders vertrauenswürdig und sehr wichtig, wenn Du <strong>Sendungen mitnehmen</strong> möchtest.<br> Der Vorgang dauert nur etwa <strong>eine Minute.</strong></p>
                                <a href="{{ action('SettingsVerificationController@getIndex', [Auth::user()->username]) }}"><button class="btn btn-default"><strong>Verifikation meiner Identität starten</strong></button></a>
                              </div>
                        </div>
                    </div> 
                </div>
                @endif

                @if($user->verification && !$user->verification->verified)
                    <div class="orangebox">
                        <div class="header">
                            <div class="col-md-1"><i class="pe-7s-clock box_icon_large"></i></div>
                            <div class="col-md-10 box_heading_container"><p><strong>Wir bearbeiten Deine Verifizierung.</strong></p></div>

                        </div>
                        <div class="orangebox_content">
                            <p class="grey">Bitte hab noch einen Moment Geduld. Wir bearbeiten gerade die <strong>Verifizierung Deiner Identität</strong>.</p>
                        </div>
                    </div>
                @endif

                <div class="infobox">
                    <div class="header">
                        <p><strong>Deine aktuellen Verifikationen</strong></p>
                    </div>
                    <div class="content">
                          <p>Email: {{$user->emails->first()->email}} <i class="fa-check-circle-o fa"></i></p>
                          @if($user->phoneNumbers->first()->verified)
                          <p>Handynummer:
                            + {{$user->phoneNumbers->first()->country_prefix}} {{$user->phoneNumbers->first()->phone_number}} 
                                <i class="fa-check-circle-o fa"></i></p>
                          @else   
                          @endif
                          @if($user->facebookUser)
                          
                              <p>Facebook-Freunde: {{ $user->facebookUser->friends }} Freunde <i class="fa-check-circle-o fa"></i>
                                  <a href="{{ action('SettingsVerificationController@getRemoveFacebook', [Auth::user()->username]) }}"><button class="btn btn-info facebook_disconnect_button"><i class="fa fa-facebook"></i> Verbindung trennen</button></a>
                              </p>
                          
                          @else
                          @endif

                          <hr>

                          @if($user->facebookUser && $user->phoneNumbers->first()->verified)
                          @else
                            <h4>Verifikationen hinzufügen</h4>
                            @if(!$user->phoneNumbers->first()->verified)
                            <div class="row">
                                <div class="col-md-1">
                                     <i class="pe-7s-phone not_verified_icon"></i>
                                </div>
                                <div class="col-md-9 right_container_verifications">
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
                                <div class="col-md-9 right_container_verifications">
                                    <p class="grey">Bestätige Deine Identität, indem Du Deinen Account mit Facebook verbindest. <a href="{{ action('SettingsVerificationController@getFacebook', [Auth::user()->username]) }}">Mit Facebook verbinden</a></p>
                                  </div>
                            </div>
                            <hr>
                            @endif
                          @endif
                    </div> 
                </div><!-- /infobox -->
          </div><!-- /col-md-8 -->
      </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /background -->

@endsection