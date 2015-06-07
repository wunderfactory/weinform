@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

    <div id="index" class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="profile_container">
                    @if(Auth::user()->id == $user->id)
                    <a href="{{ action('SettingsProfileController@getProfilePicture', [Auth::user()->username]) }}">
                      <div id="overlay">
                        <p><i class="pe-7s-camera camera_icon"></i><br>
                        Profilbild ändern</p>
                      </div>
                    </a>
                    @endif
                    <div class="avatar" style="background-image: url('{{ action('UsersController@getPicture', [$user->username]) }}');"></div>
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

              @include('notybox.sidebar_tall_actionbox_deliverer')

              @include('notybox.sidebar_helpbox')

            </div><!-- /col-md-3 -->


    <!-------------------------------------------- -->


            <div class="col-md-8">

                @include('notybox.do_mail_verification')

                @include('notybox.do_complete_profile')

                @include('notybox.do_profile_picture')

                @include('notybox.do_id_verification')

                @include('notybox.id_verification_pending')

                @include('notybox.id_verified')

              <div class="infobox">
                <div class="header">
                    <p><strong>Verifizierungen</strong>
                    <button type="button" class="btn btn-default pull-right verification_button" data-toggle="popover" data-placement="left" title="" data-content="Mit einem verifiziertem Profil erscheinst du für andere Nutzer vertrauenswürdiger. So nehmen Fahrer deine Sendungen gern an und das wundership-team wählt dich gern als Fahrer aus." data-html="true" data-original-title="Verifizierungen">Was ist das?</button>
                </div>
                <div class="content">
                  <div class="row">
                      @if(!$user->emails()->first()->verified && !$user->phoneNumbers->first()->verified && !$user->facebookUser)
                      <div class="col-md-8">
                        <div class="text_container"><p class="info_text">Du hast noch keine Verifizierungen hinzugefügt.</p></div>
                      </div>
                      @endif
                      @if($user->emails()->first()->verified)
                      <div class="col-md-4">
                        <div class="check_container"><i class="pe-7s-check"></i></div>
                        <div class="text_container"><p>E-Mail-Adresse<br>Bestätigt</p></div>
                      </div>
                      @else
                      @endif
                      @if($user->phoneNumbers->first()->verified)                   
                      <div class="col-md-4">
                        <div class="check_container"><i class="pe-7s-check"></i></div>
                        <div class="text_container"><p>Handynummer<br>Bestätigt</p></div>
                      </div>
                      @else
                      @endif
                      @if($user->facebookUser)
                      <div class="col-md-4">
                        <div class="check_container"><i class="pe-7s-check"></i></div>
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