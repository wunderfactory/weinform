<style type="text/css">
.navbar_container{
    max-width: 980px !important;
}
.active_topbar {
    color: #ea555c !important;
}
</style>


<nav class="navbar navbar-default">
  <div class="container navbar_container">
    <ul class="nav navbar-nav">
        <li><a class="{{ Request::segment(3) == 'dashboard'? 'active_topbar':''}}" href="{{action('UsersController@getDashboard', [Auth::user()->username])}}">Dashboard</a></li>
        <li><a href="#">Posteingang</a></li>
        <li><a href="#">Deine Fahrten</a></li>
        <li><a href="#">Deine Sendungen</a></li>
        <li><a class="{{ Request::segment(array_search('settings', Request::segments())+2) == 'profile' ? 'active_topbar':''}}" href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}">Profil</a></li>
        <li><a class="{{ Request::segment(array_search('settings', Request::segments())+2) == 'account' ? 'active_topbar':''}}" href="{{ action('SettingsAccountController@getIndex', [Auth::user()->username]) }}">Account</a></li>
    </ul>
  </div>
</nav>

<div id="flash_message_container">@include('flash::message')</div>