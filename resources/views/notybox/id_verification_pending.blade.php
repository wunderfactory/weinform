@if($user->verification && !$user->verification->verified)
    <div class="orangebox">
        <div class="header">
            <div class="col-md-1"><i class="pe-7s-clock"></i></div>
            <div class="col-md-10"><p><strong>Wir bearbeiten Deine Verifizierung.</strong></p></div>

        </div>
        <div class="content">
            <p>Bitte hab noch einen Moment Geduld. Wir bearbeiten gerade die <strong>Verifizierung Deiner Identität</strong>.</p>
        </div>
    </div>
@endif