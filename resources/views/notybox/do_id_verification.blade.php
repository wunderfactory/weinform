@if(!$user->verification)
    <div class="warningbox">
        <div class="header">
            <div class="col-md-1"><i class="pe-7s-id"></i></div>
            <div class="col-md-8"><p><strong>Hi {{ $user->first_name }}! Bitte verifiziere Deine Identität.</strong></p></div>

        </div>
        <div class="content">
            <p>Eine <strong>Verifikation deiner Identität</strong> ist der einfachste und schnellste Weg, in der wundership Community Vertrauen aufzubauen. Wir gleichen dazu Deine Profildaten mit deinem <strong>offiziellen Ausweis</strong> ab. Diese Verfizierung ist besonders vertrauenswürdig und sehr wichtig, wenn Du <strong>Sendungen mitnehmen</strong> möchtest.<br> Der Vorgang dauert nur etwa <strong>eine Minute.</strong></p>
            <a href="{{ action('SettingsVerificationController@getIndex', [Auth::user()->username]) }}"><button class="btn btn-default"><strong>Verifikation meiner Identität starten</strong></button></a>
        </div>
    </div>
@endif