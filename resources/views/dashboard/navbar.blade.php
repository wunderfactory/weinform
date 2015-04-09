<style type="text/css">
.navbar_container{
    max-width: 980px !important;
}
.active {
    color:red !important;
}
</style>

<nav class="navbar navbar-default">
  <div class="container navbar_container">
    <ul class="nav navbar-nav">
        <li><a class="{{ Request::segment(3) == 'dashboard'? 'active':''}}" href="{{action('UsersController@getDashboard', [Auth::user()->username])}}">Dashboard</a></li>
        <li><a href="#">Posteingang</a></li>
        <li><a href="#">Deine Fahrten</a></li>
        <li><a href="#">Deine Sendungen</a></li>
        <li><a class="{{ Request::segment(array_search('settings', Request::segments())+2) == 'profile' ? 'active':''}}" href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}">Profil</a></li>
        <li><a class="{{ Request::segment(array_search('settings', Request::segments())+2) == 'account' ? 'active':''}}" href="{{ action('SettingsAccountController@getIndex', [Auth::user()->username]) }}">Account</a></li>
    </ul>
  </div>
</nav>