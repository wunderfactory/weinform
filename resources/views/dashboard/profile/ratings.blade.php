@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

    <div id="ratings" class="container">
        <div class="row">
          
        @include('dashboard.profile.side-navbar')

        <div class="col-md-8">
            <div class="infobox">
                <div class="header">
                    <p><strong>Bewertungen, die Du erhalten hast</strong></p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img-circle ratings_user_image" src="https://graph.facebook.com/moritzew/picture?width=200&height=200" alt="Profile Picture">
                        </div>
                        <div class="col-md-4 star_container">
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                        </div>
                        <div class="col-md-4 button_container pull-right">
                          <button type="button" class="btn btn-primary pull-right verification_button" data-toggle="popover" data-placement="top" title="" data-content="Diese Bewertung hat der Nutzer erhalten, nachdem etwas versendet hatte." data-html="true" data-original-title="Verifizierungen">Als Versender erhalten</button>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                </div> 
                <div class="content">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img-circle ratings_user_image" src="https://graph.facebook.com/magnus.langanke/picture?width=200&height=200" alt="Profile Picture">
                        </div>
                        <div class="col-md-4 star_container">
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                          <i class="pe-7s-star star_icon_large yellow"></i>
                        </div>
                        <div class="col-md-4 button_container pull-right">
                          <button type="button" class="btn btn-warning pull-right verification_button" data-toggle="popover" data-placement="top" title="" data-content="Diese Bewertung hat der Nutzer erhalten, nachdem er eine Sendung mitgenommen hatte." data-html="true" data-original-title="Verifizierungen">Als Kurier erhalten</button>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection