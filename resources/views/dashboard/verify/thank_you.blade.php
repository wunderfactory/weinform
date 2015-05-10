@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

    <div id="thank_you" class="container">

        <div class="row">
            <div class="col-md-3">
              <div id="right_navbar_container">
                  <p class="nav_text"><strong>Danke, dass Du deine Identität verifizierst.</strong></p>
              </div>
            </div>

    <!-- INFOBOXES -->

            <div class="col-md-8">
                <div class="infobox">
                    <div class="header">
                        <p><strong>Fertig!</strong></p>
                    </div>
                    <div class="content">
                        <p>Wir haben Deinen Upload erhalten. <strong>Vielen Dank!</strong> Ein Mitarbeiter unseres wundership Teams wird sich jetzt dein Bild ansehen und mit deinem Account abgleichen. Wir informieren Dich per E-Mail, wenn deine Identität verifiziert wurde.</p>
                        <hr>
                        <p class="info_text">Tagsüber dauert Dieser Vorgang nur <strong>einige Minuten</strong>, wenn Du Dich also als wundership Kurier beworben hast, könnte Dein Zugang gleich freigeschaltet sein und Du kannst Deine erste Sendung mitnehmen!</p>
                        <hr>
                        <a href="{{action('UsersController@getDashboard', [Auth::user()->username])}}">
                            <button type="submit"  class="btn btn-block btn-default">
                                Zum Dashboard
                            </button>
                        </a>
                    </div> 
                </div>

            </div><!-- /col-md-8 -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>

@endsection