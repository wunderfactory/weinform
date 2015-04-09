<style type="text/css">
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
  color: #404040;
}
.active{
  color: #ea555c !important;
}
</style>

<div class="col-md-3">
  <div id="right_navbar_container">
    <a href="{{ action('SettingsAccountController@getIndex', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+2) == 'account' ? 'active':''}}"><strong>Benachrichtigungen</strong></p></a>

    <a href="{{ action('SettingsAccountController@getPaymentDetails', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'payment-details' ? 'active':''}}"><strong>Zahlungsarten</strong></p></a>

    <a href="{{ action('SettingsAccountController@getPayoutDetails', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'payout-details' ? 'active':''}}"><strong>Auszahlungen</strong></p></a>

    <a href="{{ action('SettingsAccountController@getPrivacy', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'privacy' ? 'active':''}}"><strong>Privatsphäre</strong></p></a>
    <a href="{{ action('SettingsAccountController@getSecurity', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'security' ? 'active':''}}"><strong>Sicherheit</strong></p></a>

    <a href="{{ action('SettingsAccountController@getSettings', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'settings' ? 'active':''}}"><strong>Einstellungen</strong></p></a>
    <hr>
    <button href="#" class="btn btn-block btn-warning">Freunde einladen!</button>
  </div>      
</div>