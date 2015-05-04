@extends('app')

@section('content')

<div class="background_dashboard_area">

@include('dashboard.navbar')

<div class="container">
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
                <i class="pe-7s-car large_icon help_icon"></i>
                <h4>Fahrer werden!</h4>
                <p>Werde Fahrer und verdiene schnell eingene Euronen! Es ist herrlich, für wundership zu fahren! Du wirst es so genießen!</p><br>
                <a href="#"><p class="dark_grey"><strong>Ja, ich will!</strong></p></a>
            </div>

            <div id="action_container">
                <i class="pe-7s-help1 large_icon help_icon"></i>
                <p>Gab es ein Problem, {{ $user->first_name }}?</p>
                <a href="#"><p class="dark_grey"><strong>Kontaktiere das wundership team.</strong></p></a>
            </div>

        </div>  

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