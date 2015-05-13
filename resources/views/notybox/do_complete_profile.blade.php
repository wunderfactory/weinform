@if(!$user->profile || ($user->profile && !$user->profile->languages && !$user->profile->hometown && !$user->profile->job && !$user->profile->bio))
    <div class="warningbox">
        <div class="header">
            <div class="col-md-1"><i class="pe-7s-gleam"></i></div>
            <div class="col-md-8"><p><strong>Hi {{ $user->first_name }}! Bitte vervollständige Dein Profil.</strong></p></div>
           
        </div>
        <div class="content">
            <p>Bitte vervollständige dein Profil, damit es für andere Nutzer <strong>vertrauenswürdiger</strong> erscheint.</p>
        </div> 
    </div>
@endif