@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

<div id="privacy" class="container">
    <div class="row">
        @include('dashboard.account.side-navbar')

        <div class="col-md-8">
            <div class="infobox">
                <div class="header">
                    <p><strong>Einstellungen</strong></p>
                </div>
                <div class="content">
                        <p>Deine E-Mail-Adresse und Handynummer werden niemals öffentlich angezeigt. Wundership Kuriere bekommen deine Handynummer mitgeteilt, wenn sie eine Sendung bei Dir abholen.</p>
                        <hr>
                        <p>Die ausgewählten Felder sind auf Deinem Profil sichtbar.</p>
                        <form action="{{ action('SettingsAccountController@postUpdatePrivacy',[$user->username]) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label for="hometown">Wohnort</label>
                            <input id="hometown" type="checkbox" name="hometown" {{ $user->settings->hidden_hometown? 'checked': '' }}>
                            <br>
                            <label for="job">Job</label>
                            <input id="job" type="checkbox" name="job" {{ $user->settings->hidden_job ? 'checked': '' }}>
                            <br>
                            <label for="languages">Languages</label>
                            <input id="languages" type="checkbox" name="languages" {{ $user->settings->hidden_languages? 'checked': '' }}>
                            <br>
                            <label for="bio">Bio</label>
                            <input id="bio" type="checkbox" name="bio" {{ $user->settings->hidden_bio? 'checked': '' }}>
                            <br>
                            <input type="submit" class="btn btn-warning save_button" value="Speichern">
                        </form>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection