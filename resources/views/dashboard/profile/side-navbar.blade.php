<div id="profile_sidebar" class="col-md-3">
    <div class="right_navbar_container">
        <a href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+2) == 'profile' && Request::segment(array_search('settings', Request::segments())+3) == false? 'active':''}}"><strong>Profil bearbeiten</strong></p></a>
        <a href="{{ action('SettingsProfileController@getProfilePicture', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'profile-picture' ? 'active':''}}"><strong>Profilbild</strong></p></a>
        <a href="{{ action('SettingsProfileController@getVerifications', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'verifications' ? 'active':''}}"><strong>Vertrauen und Verifizierung</strong></p></a>
{{--         <a href="{{ action('SettingsProfileController@getRatings', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'ratings' ? 'active':''}}"><strong>Bewertungen</strong></p></a> --}}
        <hr>
        <a href="{{ action('UsersController@getIndex', [Auth::user()->username]) }}"><button type="button" class="btn btn-block btn-warning">Profil ansehen</button></a>
    </div>
</div>