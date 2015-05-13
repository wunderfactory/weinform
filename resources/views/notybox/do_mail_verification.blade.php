@if($user->emails()->first()->verified)
@else
    <div class="warningbox">
        <div class="header">
            <div class="col-md-1"><i class="pe-7s-mail"></i></div>
            <div class="col-md-10"><p><strong>Bitte bestätige Deine E-Mail-Adresse.</strong></p></div>
           
        </div>
        <div class="content">
            <p>Um Dich über <strong>wichtige Ereignisse</strong> zu benachrichtigen, benötigen wir eine <strong>bestätigte E-Mail-Adresse</strong> von Dir. Schau in Deinem E-Mail-Konto nach und klick einfach auf den Link, den wir Dir gesendet haben.</p>
        </div> 
    </div> 
@endif