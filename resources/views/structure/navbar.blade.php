<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">wundership</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul  class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li>
                <a href="{{url('auth/login')}}">{{ Lang::get('navbar/navbar.login') }} </a>
            </li>
            <li>
                <a href="{{url('auth/register')}}">{{ Lang::get('navbar/navbar.register') }}</a>
            </li>
            
            @else
            <li class="dropdown">
                <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hi {{ Auth::user()->username }}!<span class="caret"></span></a>
                  </a>
                <ul class="dropdown-menu dropdown-with-icons">
                    <li>
                        <a href="{{ url('/user/'.Auth::user()->username.'/profile') }}">
                            <i class="pe-7s-id"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile') }}">
                            <i class="pe-7s-config"></i> Settings
                        </a>

                    <li>
                        <a href="{{ url('/auth/logout') }}">
                             <i class="pe-7s-ticket"></i> Logout
                        </a>
                    </li>
                  </ul>
            </li>
            @endif
            <li class="dropdown">
              @if(App::getLocale() == 'de')
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                <img src="{{ asset('gsd/img/flags/DE.png') }}">
                 <b class="caret"></b>
              </a>
              @else
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                <img src="{{ asset('gsd/img/flags/GB.png') }}">
                 <b class="caret"></b>
              </a>
              @endif
              <ul class="dropdown-menu">
                <li><a href="{{ url('/lang/de') }}"><img src="{{ asset('gsd/img/flags/DE.png') }}"> Deutsch</a></li>
                <li><a href="{{ url('/lang/en') }}"><img src="{{ asset('gsd/img/flags/GB.png') }}"> English</a></li>                    
              </ul>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div>
</nav>