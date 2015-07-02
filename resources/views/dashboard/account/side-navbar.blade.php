<div id="account_sidebar" class="col-md-3">
  <div class="right_navbar_container">
    <a href="{{ action('SettingsAccountController@getIndex', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+2) == 'account' && Request::segment(array_search('settings', Request::segments())+3) == false? 'side_navbar_active':''}}"><strong>Benachrichtigungen</strong></p></a>

    <a href="{{ action('SettingsAccountController@getPaymentDetails', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'payment-details' ? 'side_navbar_active':''}}"><strong>Zahlungsarten</strong></p></a>

{{--     <a href="{{ action('SettingsAccountController@getPayoutDetails', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'payout-details' ? 'side_navbar_active':''}}"><strong>Auszahlungen</strong></p></a> --}}

{{--     <a href="{{ action('SettingsAccountController@getPrivacy', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'privacy' ? 'side_navbar_active':''}}"><strong>Privatsphäre</strong></p></a> --}}
    <a href="{{ action('SettingsAccountController@getSecurity', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'security' ? 'side_navbar_active':''}}"><strong>Sicherheit</strong></p></a>

    <a href="{{ action('SettingsAccountController@getSettings', [Auth::user()->username]) }}"><p class="nav_text {{ Request::segment(array_search('settings', Request::segments())+3) == 'settings' ? 'side_navbar_active':''}}"><strong>Einstellungen</strong></p></a>
    <hr>
    {{-- <a href="{{ url('friends') }}"><button class="btn btn-block btn-warning">Freunde einladen!</button></a> --}}
  </div>      
</div>