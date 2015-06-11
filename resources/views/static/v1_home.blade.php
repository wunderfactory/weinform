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
                <p>Egal ob groß oder klein: Mit wundership versendest Du Dinge einfach, schnell und sicher und schonst damit sogar die Umwelt. </p>
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
                <div class="paket-abholen-popup"><span class="icon-mobile"></span> Persönlicher Kurier <span class="icon-time"></span> Sendung live verfolgen</div>
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
                <h2>Entscheide selbst, wie viel Deine Sendung kosten darf.</h2>
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
                <p>Hamburg - Berlin: <strong>Ab 9,99€</strong></p>
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
                        <h5>Finanzier Dir Dein Busticket!</h5>
                        <p>Noch ein bisschen Platz im Koffer? Nimm doch einfach noch etwas mit! </p>
                        <a class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reisemittel">
                    <span class="icon-zug"></span>
                    <div>
                        <h5>Finanzier Dir Dein Bahnticket!</h5>
                        <p>Warum nicht noch etwas mitnehmen, wenn Du sowieso schon unterwegs bist? </p>
                        <a class="bt bt-second-transparent">Sendung finden</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reisemittel">
                    <span class="icon-auto"></span>
                    <div>
                        <h5>Lass Pakete mitfahren!</h5>
                        <p>Autofahren ist schön, aber auch teuer. Finanzier Dir deine Fahrt mit deinem Kofferraum. </p>
                        <a class="bt bt-second-transparent">Sendung finden</a>
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
</section>
<section class="sicherheit wow fadeIn" data-stellar-background-ratio="0.2" data-wow-delay="0.6s">
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
                        <img class="img-circle" src="https://graph.facebook.com/Jana.Monin/picture?width=100&height=100" alt="wundership Kunde">
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
                        <img class="img-circle" src="https://graph.facebook.com/hauke.moritz.3/picture?width=100&height=100" alt="wundership Kunde">
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
                        <img class="img-circle" src="https://graph.facebook.com/reto.gericke/picture?width=100&height=100" alt="wundership Kunde">
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
                        <img class="img-circle" src="https://graph.facebook.com/koehler.chris/picture?width=100&height=100" alt="wundership Kunde">
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
                        <img class="img-circle" src="https://graph.facebook.com/michael.hade.5/picture?width=100&height=100" alt="wundership Kunde">
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
</section>
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
        <h4>Wir benachrichtigen Dich per E-Mail, wenn wir auch zwischen anderen Städten verfügbar sind.</h4>
        <form action="#">
            <input type="text" placeholder="Deine E-Mail-Adresse für die Benachrichtigung">
            <a href="#" onclick="$(this).closest('form').submit()"><span class="icon-papierflieger"> </span> Senden</a>
        </form>
    </div>
</section>
<footer class="wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="row">
            <div class="col-md-2 visible-mobile">
                <span class="icon-logo"></span>
            </div>
            <div class="col-md-5">
                <ul>
                    <li><a href="#">Datenschutz</a></li>
                    <li><a href="#">Allgemeine Geschäftsbedingungen</a></li>
                </ul>
            </div>
            <div class="col-md-2 visible-desktop">
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