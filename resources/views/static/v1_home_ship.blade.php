@extends('v1_app')

@section('content')

<body>

<header class="home-header" data-stellar-background-ratio="0.2">
    <div class="section-bg-verlauf"></div>
    
    @include('structure.v1_navbar')

    <div class="header-title wow zoomInUp">
        <h1>Versenden war noch nie so einfach</h1>
        <h2>Sendung einstellen, nie mehr anstellen</h2>
        <a href="{{url('/comingsoon')}}" class="bt bt-second-fill">Jetzt versenden</a>
    </div>
    {{-- <div class="header-facts wow fadeIn" data-wow-delay="1.1s">
        <div class="container">
            <ul>
                <li><span>2.701</span> Pakete versendet</li>
                <li><span>1.445</span> Registrierte Fahrer</li>
                <li><span>2.701</span> Glückliche Kunden</li>
                <li><span>0</span> Beschädigte oder verlorene Pakete</li>
            </ul>
        </div>
    </div> --}}
</header>
<section class="paket-versenden wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Etwas versenden</h3>
                <p>Egal ob groß oder klein: Wir übernehmen für Dich den Versand. Einfach Sendung einstellen, wir holen Deine Sendung ab, verpacken und verschicken.</p>
                <a class="bt bt-second-transparent">Etwas versenden</a>
            </div>
            <div class="col-md-6 animation-mitnehmen">
                <div class="paket-aufgeben">
                    <span class="icon-formular"></span>
                    <p>Sendung aufgeben</p>
                </div>
                <div class="paket-aufgeben-popup"><span class="icon-mobile"></span> Bequem von zuhause <span class="icon-time"></span> Erledigt in 2 Minuten</div>
                <div class="mitnehmen-strecke"></div>
                <div class="paket-wirdabgeholt">
                    <span class="icon-ubergabe"></span>
                    <p>Sendung wird abgeholt</p>
                </div>
                <div class="paket-abholen-popup"><span class="icon-mobile"></span> Wir benachrichtigen Dich <span class="icon-time"></span> Sendung verfolgen</div>
                <div class="abholen-strecke"></div>
                <div class="paket-wirdgeliefert">
                    <span class="icon-lieferung"></span>
                    <p>Paket wird zugestellt</p>
                </div>
                <div class="liefer-popup"><span class="icon-mobile"></span> Keine Wartezeiten <span class="icon-time"></span> Einfach und sicher</div>
            </div>
        </div>
    </div>
    <div class="row vorteilbar">
        <div class="col-md-12 vorteile">
            <div class="container">
                <ul>
                    <li><span class="icon-sofa"></span> Bequeme Abholung</li>
                    <li><span class="icon-time"></span> Zustellung am selben Tag möglich</li>
                    <li><span class="icon-paket"></span> Wir verpacken für Dich</li>
                    <li><span class="icon-blatt"></span> Schont die Umwelt</li>
                </ul>
            </div>      
        </div>
    </div>
</section>
<section class="preisberechnung wow fadeIn" data-stellar-background-ratio="0.2" data-wow-delay="0.6s">
    <div class="section-bg-verlauf"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Bequem versenden zum besten Preis</h1>
                <h2>Nach der Abholung schauen wir, wie deine Sendung am günstigsten zum Ziel kommt.</h2>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-md-12">
                <form action="#">
                    <div class="step-1">
                        <span class="icon-marker"></span>
                        <input type="text" placeholder="Abholadresse...">
                    </div>
                    <div class="step-2">
                        <span class="icon-marker"></span>
                        <input type="text" placeholder="Lieferadresse...">
                    </div>
                    <div class="step-3">
                        12-16&euro;
                    </div>
                </form>
            </div>-->
            <div class="hamburg-berlin">
                <p>So funktioniert's!</p>
            </div>
        </div>
    </div>
</section>
{{-- <section class="paket-versenden paket-mitnehmen wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Paket mitnehmen</h4>
                <h3>Womit reist Du?</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="reisemittel">
                    <span class="icon-bus"></span>
                    <div>
                        <h5>Finanzier Dir Dein Busticket!</h5>
                        <p>Noch ein bisschen Platz im Koffer? Nimm doch einfach etwas mit! </p>
                        <a href="{{url('/comingsoon')}}" class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reisemittel">
                    <span class="icon-zug"></span>
                    <div>
                        <h5>Finanzier Dir Dein Bahnticket!</h5>
                        <p>Warum nicht noch etwas mitnehmen, wenn Du sowieso schon unterwegs bist? </p>
                        <a href="{{url('/comingsoon')}}" class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reisemittel">
                    <span class="icon-auto"></span>
                    <div>
                        <h5>Lass Pakete mitfahren!</h5>
                        <p>Autofahren ist schön, aber auch teuer. Finanzier Dir deine Fahrt mit deinem Kofferraum. </p>
                        <a href="{{url('/comingsoon')}}" class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row vorteilbar">
        <div class="col-md-12 vorteile">
            <div class="container">
                <ul>
                    <li><span class="icon-sofa"></span> Flexible Abholung</li>
                    <li><span class="icon-time"></span> Schnell Sendung finden</li>
                    <li><span class="icon-paket"></span> Einfach Reisekosten decken</li>
                    <li><span class="icon-blatt"></span> Schont die Umwelt</li>
                </ul>
            </div>      
        </div>
    </div>
</section> --}}
<section class="abfahrt wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="col-md-9">
            <h3>Mit wundership einfach alles schnell versenden</h3>
            <h4>Von Aktenbergen bis Haustürschlüssel</h4>
        </div>
        <div class="col-md-3">
            <a class="bt bt-second-transparent">Kostenlos <strong>registrieren</strong></a>
        </div>
    </div>
</section>
{{-- <section class="sicherheit wow fadeIn" data-stellar-background-ratio="0.2" data-wow-delay="0.6s">
    <div class="section-bg-verlauf"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Deine Sendung ist sicher</h3>
                <h4>Wundership baut auf eine besondere Gemeinschaft aus Versendern und Kurieren</h4>
                <ul>
                    <li><span class="icon-fingerabdruck"></span> <p>Fahrerverifikation durch Prüfung der Personalien</p></li>
                    <li><span class="icon-facebook"></span> <p>Echtheitsprüfung durch Verbindung mit Facebook</p></li>
                    <li><span class="icon-stern"></span> <p>Nutzerbewertungen für jede Fahrt</p></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <div class="nutzerbild">
                        <img class="img-circle" src="{{ asset('/images/landing/nutzer/jana.png') }}" alt="wundership Kunde">
                        <div class="nutzerbewertung">
                            <span>Jana</span>
                            <ul>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nutzerbild">
                        <img src="{{ asset('/images/landing/nutzer/david.png') }}" alt="wundership Kunde">
                        <div class="nutzerbewertung">
                            <span>David</span>
                            <ul>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nutzerbild">
                        <img class="img-circle" src="{{ asset('/images/landing/nutzer/hauke.png') }}" alt="wundership Kunde">
                        <div class="nutzerbewertung">
                            <span>Hauke</span>
                            <ul>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nutzerbild">
                        <img class="img-circle" src="{{ asset('/images/landing/nutzer/reto.png') }}" alt="wundership Kunde">
                        <div class="nutzerbewertung">
                            <span>Reto</span>
                            <ul>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nutzerbild">
                        <img class="img-circle" src="{{ asset('/images/landing/nutzer/chris.png') }}" alt="wundership Kunde">
                        <div class="nutzerbewertung">
                            <span>Chris</span>
                            <ul>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nutzerbild">
                        <img class="img-circle" src="{{ asset('/images/landing/nutzer/michael.png') }}" alt="wundership Kunde">
                        <div class="nutzerbewertung">
                            <span>Michael</span>
                            <ul>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                                <li><span class="icon-stern-filled"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="social wow fadeIn">
    <div class="row">
        <div class="col-md-6">
             <a href="https://www.facebook.com/sharer/sharer.php?u=wundership.de" target="_blank">
                   <i class="fa fa-facebook"></i>
             </a>
        </div>
        <div class="col-md-6">
            <a href="https://twitter.com/home?status=wundership.de" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
    </div>
</section>
<section class="strecke wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <img src="{{ asset('/images/landing/strecke.jpg') }}" alt="wundership zwischen Berlin und Hamburg" />
        <h3>Nutze wundership ab jetzt in Hamburg (und bald in Berlin)</h3>
        <h4>Wir benachrichtigen Dich per E-Mail, wenn wir auch in anderen Städten verfügbar sind!</h4>
        <form action="#">
            <input type="text" placeholder="Deine E-Mail-Adresse für die Benachrichtigung">
            <a href="#" onclick="$(this).closest('form').submit()"><span class="icon-papierflieger"> </span> Senden</a>
        </form>
    </div>
</section>

    @include('structure.v1_footer')

<script src="{{ asset('/js/landing.js') }}" type="text/javascript"></script>

</body>

@stop