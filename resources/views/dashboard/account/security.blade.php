@extends('app')

@section('content')

<div class="background_dashboard_area">

    @include('dashboard.navbar')

    <div class="container dashboard_area_container">
        <div class="row">
            @include('dashboard.account.side-navbar')

            <div class="col-md-8">
                <div class="infobox">
                    <div class="infobox_header">
                        <p class="box_grey"><strong>Passwort ändern</strong></p>
                    </div>
                    <div class="infobox_content">
                        <div class="row">
                            <div class="col-md-2">

                                <i class="pe-7s-door-lock very_large_icon lock_icon"></i>

                            </div>
                            <div class="col-md-5 middle_container">
                                <p class="very_small">Dein <strong>altes</strong> Passwort</p>
                                <p class="very_small">Dein <strong>neues</strong> Passwort</p>
                                <p class="very_small">Bestätige Dein <strong>neues</strong> Passwort</p>
                            </div>
                            <div class="col-md-4 security_input_container">
                              <input type="password" class="form-control" name="password">

                              <input type="password" class="form-control" name="password">

                              <input type="password" class="form-control" name="password_confirmation">
                              <br>
                              <button class="btn btn-default">Speichern</button>
                            </div>
                        </div>
                    </div> 
                </div>

          </div><!-- /col-md-8 -->
      </div><!-- /row -->
    </div><!-- /container -->


</div>

@endsection