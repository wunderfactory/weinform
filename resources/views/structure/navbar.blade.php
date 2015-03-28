<nav class="navbar navbar-default" role="navigation">
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
                <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
            </li>
            <li>
                <a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
            </li>
            
            @else
            <li class="dropdown">
                <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
                  </a>
                <ul class="dropdown-menu dropdown-with-icons">
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


<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header" style="text-align:center;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Login</h4>
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
                            <span>or</span>
                          <div class="line r"></div>
                      </div>
                      <div class="error"></div>
                      <div class="form loginBox">
                          <form method="post" action="/login" accept-charset="UTF-8">
                          <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                          <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                          <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                          </form>
                      </div>
                   </div>
              </div>
              <div class="box">
                  <div class="content registerBox" style="display:none; text-align:center;">
                   <a href="{{ url('auth/register') }}"><p>Account mit deiner E-Mail erstellen</p></a>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <div class="forgot login-footer">
                  <span>Looking to 
                       <a href="javascript: showRegisterForm();">create an account</a>
                  ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                   <span>Already have an account?</span>
                   <a href="javascript: showLoginForm();">Login</a>
              </div>
          </div>        
        </div>
    </div>
</div>