@extends('v1_app')

@section('content')

<header class="home-header" data-stellar-background-ratio="0.2">
    <div class="section-bg-verlauf"></div>
    <nav class="navbar navbar-ct-azure navbar-transparent navbar-fixed-top"role="navigation">
        <div class="nav-bg"></div>
        <div class="container wow fadeIn" data-wow-delay="1.1s">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle">
                <span class="sr-only">Navigation aufklappen</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="/"><span class="icon-logo"></span> <span>wundership</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('auth/login')}}" class="bt bt-weiss-transparent">Anmelden</a></li>
                    <li><a href="{{url('auth/choose')}}" class="bt bt-second-fill">Registrieren</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-title wow zoomInUp">
        <h1>Deine Mitfahrzentrale für Pakete</h1>
        <h2>Dinge bequem versenden, Reisekosten decken</h2>
        <a href="{{url('auth/choose')}}" class="bt bt-second-fill">Paket versenden oder mitnehmen</a>
    </div>
    <div class="header-facts wow fadeIn" data-wow-delay="1.1s">
        <div class="container">
            <ul>
                <li><span>2.701</span> Pakete versendet</li>
                <li><span>1.445</span> Registrierte Fahrer</li>
                <li><span>2.701</span> Glückliche Kunden</li>
                <li><span>0</span> Beschädigte oder verlorene Pakete</li>
            </ul>
        </div>
    </div>
</header>
<section class="paket-versenden wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Paket versenden</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                <a class="bt bt-second-transparent">Etwas versenden</a>
            </div>
            <div class="col-md-6 animation-mitnehmen">
                <div class="paket-aufgeben">
                    <span class="icon-formular"></span>
                    <p>Sendung aufgeben</p>
                </div>
                <div class="paket-aufgeben-popup"><span class="icon-mobile"></span> Bequem von unterwegs <span class="icon-time"></span> Erledigt in 2 Minuten</div>
                <div class="mitnehmen-strecke"></div>
                <div class="paket-wirdabgeholt">
                    <span class="icon-ubergabe"></span>
                    <p>Sendung wird abgeholt</p>
                </div>
                <div class="paket-abholen-popup"><span class="icon-mobile"></span> Schnelle Abstimmung mit Kurier <span class="icon-time"></span> TEST</div>
                <div class="abholen-strecke"></div>
                <div class="paket-wirdgeliefert">
                    <span class="icon-lieferung"></span>
                    <p>Paket wird zugestellt</p>
                </div>
                <div class="liefer-popup"><span class="icon-mobile"></span> Bequem von unterwegs <span class="icon-time"></span> Erledigt in 2 Minuten</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 vorteile">
            <div class="container">
                <ul>
                    <li><span class="icon-sofa"></span> Bequeme Abholung</li>
                    <li><span class="icon-time"></span> Zustellung am selben Tag möglich</li>
                    <li><span class="icon-paket"></span> Keine Verpackung nötig</li>
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
                <h1>Den Preis bestimmst du</h1>
                <h2>Entscheide selbst, wie viel Deine Sendung kosten soll.</h2>
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
                <h3>Hamburg - Berlin: Ab 9,99€</h3>
            </div>
        </div>
    </div>
</section>
<section class="paket-versenden paket-mitnehmen wow fadeIn" data-wow-delay="0.6s">
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
                        <h5>Nie wieder für Bustickets bezahlen!</h5>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                        <a class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reisemittel">
                    <span class="icon-zug"></span>
                    <div>
                        <h5>Nie wieder für Bustickets bezahlen!</h5>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                        <a class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reisemittel">
                    <span class="icon-auto"></span>
                    <div>
                        <h5>Nie wieder für Bustickets bezahlen!</h5>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                        <a class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 vorteile">
            <div class="container">
                <ul>
                    <li><span class="icon-sofa"></span> Bequeme Abholung</li>
                    <li><span class="icon-time"></span> Zustellung am selben Tag möglich</li>
                    <li><span class="icon-paket"></span> Keine Verpackung nötig</li>
                    <li><span class="icon-blatt"></span> Schont die Umwelt</li>
                </ul>
            </div>      
        </div>
    </div>
</section>
<section class="sicherheit wow fadeIn" data-stellar-background-ratio="0.2" data-wow-delay="0.6s">
    <div class="section-bg-verlauf"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Deine Sendung ist sicher</h3>
                <h4>Lorem ipsum dolore magna sed diam</h4>
                <ul>
                    <li><span class="icon-fingerabdruck"></span> Fahrerverifikation durch Prüfung der Personalien</li>
                    <li><span class="icon-facebook"></span> Echtheitsprüfung durch Verbindung mit Facebook</li>
                    <li><span class="icon-stern"></span> Nutzerbewertungen für jede Fahrt</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row">
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
                </div>
                <div class="row">
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
                </div>
            </div>
        </div>
    </div>
</section>
<section class="abfahrt wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="col-md-9">
            <h3>Mit wundership einfach alles versenden</h3>
            <h4>Von Aktenbergen bis Haustürschlüssel</h4>
        </div>
        <div class="col-md-3">
            <a class="bt bt-second-transparent">Kostenlos <strong>registrieren</strong></a>
        </div>
    </div>
</section>
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
        <h3>Nutze wundership zwischen Hamburg und Berlin</h3>
        <h4>Subtext für Benachrichtiungsanmeldung neue Städte</h4>
        <form action="#">
            <input type="text" placeholder="Deine E-Mail-Adresse für die Benachrichtigung">
            <a href="#" onclick="$(this).closest('form').submit()"><span class="icon-papierflieger"> </span> Senden</a>
        </form>
    </div>
</section>
<footer class="wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul>
                    <li><a href="#">Datenschutz</a></li>
                    <li><a href="#">Allgemeine Geschäftsbedingungen</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <span class="icon-logo"></span>
            </div>
            <div class="col-md-5">
                <ul>
                    <li><a href="#">Fragen und Antworten</a></li>
                    <li><a href="#">So funktioniert wundership</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@stop