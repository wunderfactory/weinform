@if($user->verification && $user->verification->verified)
    <div class="successbox">
        <div class="header">
            <div class="col-md-1"><i class="pe-7s-check"></i></div>
            <div class="col-md-10"><p class="box_white"><strong>Deine Identität ist verifiziert.</strong></p></div>

        </div>
        <div class="content">
            <p class="grey">Ab jetzt kannst Du Sendungen mitnehmen. Finanziere Deine Fahrten indem Du Sendungen mitnimmst. <strong>Jetzt loslegen.</strong></p>
        </div>
    </div>
@endif