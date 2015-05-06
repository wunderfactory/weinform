@extends('app')

@section('content')

<style type="text/css">
.homepage_box{
    min-height: 400px;
    background-color: #f0f0f0;
    text-align: center;
    padding: 50px;
    padding-left: 100px;
    padding-right: 100px;
}
</style>

<div class="wrapper">
    <div class="parallax">
        <div class="parallax-image">
            <img src="{{ asset('images/stock/friends.jpg') }}">
        </div>    
        <div class="small-info">
            <h1 class="dark_grey">Willkommen bei wundership</h1>
            {{-- <h1>{{ Lang::get('static/home.welcome_h1') }}</h1> --}}
            <h3 class="dark_grey"><strong>Die erste persönliche Versandplattform. Deine Mitfahrzentrale für Pakete.</strong></h3>
            {{-- <h3>{{ Lang::get('static/home.welcome_h3') }}</h3> --}}
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-6 homepage_box">
                <h2>Etwas versenden</h2>
                <p class="rose">Du hast etwas zu <strong>versenden</strong>? Gib deine Sendung bei wundership ein und wir finden einen wundership Kurier für dich der bei dir vorbeikommt, Deine Sendung abholt und mitnimmmt.<br><br>Mit wundership kannst Du nahezu alles versenden: Egal ob <strong>Fahrrad</strong>, <strong>Hamsterkäfig</strong>, <strong>Umzugskarton</strong>, Schuhe oder der <strong>vergessene Schlüssel</strong> - schnell und einfach wird alles von netten Menschen bei dir abgeholt und ausgeliefert.</p>
            </div>
            <div class="col-md-6 homepage_box">
                <h2>Etwas mitnehmen</h2>
                <p class="rose">Planst Du eine Tour und möchtest Deine <strong>Reisekosten finanzieren</strong>? Kein Problem! Meld Dich als wundership Kurier an und nimm viele Sendungen mit.<br><br>Nur ein bisschen Platz im Kofferaum reicht aus: Wir zeigen Dir die Sendungen, die auf der Route liegen, die Du sowieso fahren möchtest. Tu etwas gutes für die <strong>Umwelt</strong> und <strong>finanziere dir die Fahrt</strong>.</p>
            </div>

        </div><!-- row --> 

        <div class="row">
            <div class="col-md-6 homepage_box">
                <img src="{{ asset('images/stock/bike.png') }}">
            </div>
            <div class="col-md-6 homepage_box">
                <img src="{{ asset('images/stock/bike.png') }}">
            </div>

        </div><!-- row --> 
    </div>
    
</div> <!-- wrapper --> 

@endsection