<footer class="footer footer-big footer-transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h5 class="title">{{ Lang::get('footer/footer.company') }}</h5>
                <nav>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">
                               Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/howitworks')}}">
                                {{ Lang::get('footer/footer.how_it_works') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/press')}}">
                                {{ Lang::get('footer/footer.press') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/about')}}">
                                {{ Lang::get('footer/footer.about_us') }}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5 class="title">{{ Lang::get('footer/footer.help_support') }}</h5>
                <nav>
                    <ul>
                        <li>
                            <a href="{{ url('/contact')}}">
                               {{ Lang::get('footer/footer.contact_us') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/howitworks')}}">
                               {{ Lang::get('footer/footer.how_it_works') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/faq')}}">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/pickup')}}">
                                {{ Lang::get('footer/footer.pickup') }}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3">
                <h5 class="title">{{ Lang::get('footer/footer.follow_us') }}</h5>
                <nav>
                    <ul>
                        <li>
                            <a href="www.facebook.com/wundership" class="btn btn-social btn-facebook btn-simple">
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
                <h5 class="title">{{ Lang::get('footer/footer.latest_news') }}</h5>
                <nav>
                    <ul>
                        <li>
                            <a href="#" >
                               <i class="fa fa-twitter"></i> <b>Wir starten in die Beta-Phase! Mehr dazu im wundership-Blog.</b>
                               
                              
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <hr />
        <div class="copyright">
            wundership, made with love in Hamburg
        </div>
    </div>
</footer>  