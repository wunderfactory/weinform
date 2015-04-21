@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.notifications{
  max-width: 980px !important;
}
</style>

<div id="background">

@include('dashboard.navbar')

<div class="container notifications">
    <div class="row">
        @include('dashboard.account.side-navbar')


<style type="text/css">
.mail_icon{
  margin-left: 6px;
}
.large_icon{
  font-size: 55px;
}
.right_container{
  margin-left: 17px;
}
.button_wrapper{
}
</style>
<style type="text/css">
.switcher {
  position: absolute;
  width: 150px;
  height: 50px;
  text-align: center;
  background: #4cd964;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  -webkit-border-radius: 25px;
  border-radius: 25px;
}
.switcher span {
  position: absolute;
  width: 20px;
  height: 4px;
  top: 50%;
  left: 50%;
  margin: -2px 0px 0px -4px;
  background: #fff;
  display: block;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  -webkit-border-radius: 2px;
  border-radius: 2px;
}
.switcher span:after {
  content: "";
  display: block;
  position: absolute;
  width: 4px;
  height: 12px;
  margin-top: -8px;
  background: #fff;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  -webkit-border-radius: 2px;
  border-radius: 2px;
}
input[type=radio] {
  display: none;
}
.switcher label {
  cursor: pointer;
  color: rgba(0,0,0,0.2);
  width: 60px;
  line-height: 50px;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
label[for=yes] {
  position: absolute;
  left: 0px;
  height: 20px;
}
label[for=no] {
  position: absolute;
  right: 0px;
}
#no:checked ~ .switcher {
  background: #ff3b30;
}
#no:checked ~ .switcher span {
  background: #fff;
  margin-left: -8px;
}
#no:checked ~ .switcher span:after {
  background: #fff;
  height: 20px;
  margin-top: -8px;
  margin-left: 8px;
}
#yes:checked ~ .switcher label[for=yes] {
  color: #fff;
}
#no:checked ~ .switcher label[for=no] {
  color: #fff;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>E-Mail-Einstellungen</strong></p>
                </div>
                <div class="infobox_content">
                    <div class="row">
                      <div class="col-md-12">
                          <p class="box_grey">Wähle aus, zu welchen Ereignissen wir Dir eine E-Mail senden sollen.</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                          <div class="col-md-2">
                               <i class="pe-7s-mail large_icon mail_icon"></i>
                          </div>
                          <div class="col-md-4 right_container">
                              <p class="box_rose">Neuigkeiten über wundership</p>   
                          </div>
                           <div class="col-md-4">
                              <div class="button_wrapper">
                                <form action="">
                                  <input type="radio" name="rdo" id="yes" checked />
                                  <input type="radio" name="rdo" id="no"/>
                                  <div class="switcher">
                                    <label for="yes">Yes</label>
                                    <label for="no">No</label>
                                    <span></span>
                                  </div>
                                </form>
                              </div>

                                

                          </div>
                      </div>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection