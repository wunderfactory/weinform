<div class="col-md-3">
  <div id="right_navbar_container">
    <a href="{{ action('SettingsAccountController@getIndex', [Auth::user()->username]) }}"><p class="nav_text active"><strong>Benachrichtigungen</strong></p></a>
    <a href="{{ action('SettingsAccountController@getPaymentDetails', [Auth::user()->username]) }}"><p class="nav_text"><strong>Zahlungsarten</strong></p></a>
    <a href="{{ action('SettingsAccountController@getPayoutDetails', [Auth::user()->username]) }}"><p class="nav_text"><strong>Auszahlungen</strong></p></a>
    <a href="{{ action('SettingsAccountController@getPrivacy', [Auth::user()->username]) }}"><p class="nav_text"><strong>Privatsphäre</strong></p></a>
    <a href="{{ action('SettingsAccountController@getSecurity', [Auth::user()->username]) }}"><p class="nav_text"><strong>Sicherheit</strong></p></a>
    <a href="{{ action('SettingsAccountController@getSettings', [Auth::user()->username]) }}"><p class="nav_text"><strong>Einstellungen</strong></p></a>
    <hr>
    <button href="#" class="btn btn-block btn-warning">Freunde einladen!</button>
  </div>      
</div>