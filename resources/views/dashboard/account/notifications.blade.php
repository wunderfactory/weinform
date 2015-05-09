@extends('app')

@section('content')

<div class="background_dashboard_area">

@include('dashboard.navbar')

<div id="notifications" class="container dashboard_area_container">
    <div class="row">
        @include('dashboard.account.side-navbar')

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
                        <div class="col-md-2 button_container">
                             <i class="pe-7s-rocket large_icon"></i>
                        </div>
                        <div class="col-md-4 right_container">
                            <p class="box_rose"><strong>Neuigkeiten</strong> über wundership</p>  
                        </div>
                         <div class="col-md-4">
                            <div class="button_wrapper">
                              <form action="">
                                <input type="radio" name="rdo" id="first_yes" checked/>
                                <input type="radio" name="rdo" id="first_no"/>
                                <div class="switcher">
                                  <label for="first_yes">Yes</label>
                                  <label for="first_no">No</label>
                                  <span></span>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div><!-- /row -->
                      <hr>
                    <div class="row">
                        <div class="col-md-2 button_container">
                             <i class="pe-7s-user large_icon"></i>
                        </div>
                        <div class="col-md-4 right_container">
                            <p class="box_rose">E-Mails zu Deinem <strong>Account</strong></p>    
                        </div>
                         <div class="col-md-4">
                            <div class="button_wrapper">
                              <form action="">
                                <input type="radio" name="rdo" id="second_yes" checked/>
                                <input type="radio" name="rdo" id="second_no"/>
                                <div class="switcher">
                                  <label for="second_yes">Yes</label>
                                  <label for="second_no">No</label>
                                  <span></span>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div><!-- /row -->
                      <hr>
                      <div class="row">
                          <div class="col-md-2 button_container">
                               <i class="pe-7s-car large_icon"></i>
                          </div>
                          <div class="col-md-4 right_container">
                              <p class="box_rose">Updates zu Deinen <strong>Fahrten</strong></p>   
                          </div>
                           <div class="col-md-4">
                            <div class="button_wrapper">
                              <form action="">
                                <input type="radio" name="rdo" id="third_yes" checked/>
                                <input type="radio" name="rdo" id="third_no"/>
                                <div class="switcher">
                                  <label for="third_yes">Yes</label>
                                  <label for="third_no">No</label>
                                  <span></span>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div><!-- /row -->
                      <hr>
                      <div class="row">
                          <div class="col-md-2 button_container">
                               <i class="pe-7s-box1 large_icon"></i>
                          </div>
                          <div class="col-md-4 right_container">
                              <p class="box_rose">Updates zu Deinen <strong>Sendungen</strong></p>   
                          </div>
                           <div class="col-md-4">
                            <div class="button_wrapper">
                              <form action="">
                                <input type="radio" name="rdo" id="fourth_yes" checked/>
                                <input type="radio" name="rdo" id="fourth_no"/>
                                <div class="switcher">
                                  <label for="fourth_yes">Yes</label>
                                  <label for="fourth_no">No</label>
                                  <span></span>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div><!-- /row -->
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection