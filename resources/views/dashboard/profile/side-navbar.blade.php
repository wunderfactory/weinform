<div class="col-md-3">
    <div id="right_navbar_container">
        <a href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}"><p class="nav_text active"><strong>Profil bearbeiten</strong></p></a>
        <a href="{{ action('SettingsProfileController@getProfilePicture', [Auth::user()->username]) }}"><p class="nav_text"><strong>Profilfoto</strong></p></a>
        <a href="{{ action('SettingsProfileController@getVerifications', [Auth::user()->username]) }}"><p class="nav_text"><strong>Vertrauen und Verifizierung</strong></p></a>
        <a href="{{ action('SettingsProfileController@getRatings', [Auth::user()->username]) }}"><p class="nav_text"><strong>Bewertungen</strong></p></a>
        <hr>
        <a href="{{ action('UsersController@getProfile', [Auth::user()->username]) }}"><button type="button" class="btn btn-block btn-warning">Profil ansehen</button></a>
    </div>
</div>


<style type="text/css">
    .rose{
        color: #ea555c;
    }
    #right_navbar_container{
        padding: 20px;
    }
    .nav_text{
        color: #797979;
        -o-transition:.5s;
        -ms-transition:.5s;
        -moz-transition:.5s;
        -webkit-transition:.5s;
        /* ...and now for the proper property */
        transition:.5s;
    }
    .nav_text:hover{
        color: #c1c1c1;
    }
    .active{
        color: #404040 !important;
    }
</style>