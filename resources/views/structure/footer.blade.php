<footer class="footer footer-big">
    <div class="container footer_nav">
        <div class="row">
            <div class="col-md-2">
                <h5 class="title">wundership</h5>
                <nav>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">
                               Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/howitworks')}}">
                                So funktioniert's!
                            </a>
                        </li>
{{--                         <li>
                            <a href="{{ url('/press')}}">
                                Presse
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ url('/about')}}">
                                Über uns
                            </a>
                        </li>
                        <li>
                            <a target="blank" href="{{ url('/impressum')}}">
                                Impressum
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5 class="title">Hilfe und Kontakt</h5>
                <nav>
                    <ul>
                        <li>
                            <a href="{{ url('/contact')}}">
                               Kontaktiere uns
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/howitworks')}}">
                               So funktioniert's!
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/faq')}}">
                                FAQ
                            </a>
                        </li>
{{--                         <li>
                            <a href="{{ url('/pickup')}}">
                                {{ Lang::get('footer/footer.pickup') }}
                            </a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
            <div class="col-md-3">
                <h5 class="title">Wir sind auch auf</h5>
                <nav>
                    <ul>
                        <li>
                            <a target="blank" href="http://www.facebook.com/wundership" class="btn btn-social btn-facebook btn-simple">
                                <i class="fa fa-facebook-square"></i> Facebook
                            </a>
                        </li>
                        {{-- <li>
                           <a href="www.twitter.com/wundership" class="btn btn-social btn-twitter btn-simple">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </li> --}}
                    </ul>
                </nav>
            </div>

             <div class="col-md-3">
                <h5 class="title">Neuigkeiten</h5>
                <nav>
                    <ul>
                        <li>
                            <a href="#" >
                               <i class="fa fa-twitter"></i> <b>Wir starten mit der Beta-Phase in Hamburg!</b>
                               
                              
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <hr />
        <div class="copyright">
            <span class="icon-logo footer_logo"></span> <p class="cool">wundership, made with love in Hamburg</p>
        </div>
    </div>
</footer>  