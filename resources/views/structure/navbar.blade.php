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
                <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">{{ Lang::get('navbar/navbar.login') }} </a>
            </li>
            <li>
                <a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">{{ Lang::get('navbar/navbar.register') }}</a>
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
                        <a href="{{ url('/user/'.Auth::user()->username.'/settings') }}">
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

<style type="text/css">
::-webkit-input-placeholder { /* WebKit browsers */
    color:    #434343 !important;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #434343 !important;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #434343 !important;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
   color:    #434343 !important;
}
</style>


<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header" style="text-align:center;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">{{ Lang::get('navbar/navbar.login') }}</h4>
          </div>
          <div class="modal-body">  
              <div class="box">
                   <div class="content">
                      <div class="social">
                          <a id="facebook_login" class="circle facebook" href="{{ url('/auth/facebook') }}">
                              <i class="fa fa-facebook fa-fw"></i>
                          </a>
                      </div>
                      <div class="division">
                          <div class="line l"></div>
                            <span>{{ Lang::get('navbar/navbar.or') }}</span>
                          <div class="line r"></div>
                      </div>
                      <div class="error"></div>
                      <div class="form loginBox">
                          <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input id="email" class="form-control" type="text" placeholder="Email" name="username">
                          <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                          <input class="btn btn-default btn-login" type="submit" value="Login">
                          </form>
                      </div>
                   </div>
              </div>
              <div class="box">
                  <div class="content registerBox" style="display:none; text-align:center;">
                   <a href="{{ url('auth/register') }}"><p>{{ Lang::get('navbar/navbar.move_to_register') }}</p></a>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <div class="forgot login-footer">
                  <span>{{ Lang::get('navbar/navbar.looking_to') }} 
                       <a href="javascript: showRegisterForm();">{{ Lang::get('navbar/navbar.create_account') }}</a>
                  </span>
              </div>
              <div class="forgot register-footer" style="display:none">
                   <span>{{ Lang::get('navbar/navbar.have_account') }}</span>
                   <a href="javascript: showLoginForm();">{{ Lang::get('navbar/navbar.login') }}</a>
              </div>
          </div>        
        </div>
    </div>
</div>