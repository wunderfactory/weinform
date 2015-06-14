@if($user->profile && ($user->profile->languages || $user->profile->hometown || $user->profile->job || $user->profile->bio))
    @if($user->profile->picture || $user->facebookUser)
    @else
    <div class="orangebox">
        <div class="header">
            <div class="col-md-10">
                <p><i class="pe-7s-camera header-icons"></i><strong>Heyho {{ $user->first_name }}! Bitte lade ein Profilbild von Dir hoch.</strong></p>
            </div>
           
        </div>
        <div class="content">
            <p><strong>Wundership</strong> baut darauf, dass Du jedem anderen Nutzer <strong>vertrauen</strong> kannst und Ihm gern Deine Sendungen mitgibst. Ein Profilbild hilft dabei. Jetzt <a href="{{ action('SettingsProfileController@getProfilePicture', [Auth::user()->username]) }}">Profilbild hochladen</a>.</p>
        </div> 
    </div>
    @endif
@endif