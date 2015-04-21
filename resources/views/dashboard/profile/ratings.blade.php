@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.infobox_content{
    border-top: 1px solid #ababab;
}
.ratings{
  max-width: 980px !important;
}
.yellow{
  color: #fff000;
}
.user_image{
  margin: 20px;
  height: 60px;
}
.star_container{
  padding-top: 30px;
}
.button_container{
  padding-top: 20px;
}
</style>

<div id="background">

@include('dashboard.navbar')



<div class="container ratings">
    <div class="row">
        @include('dashboard.profile.side-navbar')

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="box_grey"><strong>Bewertungen, die Du erhalten hast</strong></p>
                </div>
                <div class="infobox_content">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="avatar img-circle user_image" src="https://graph.facebook.com/moritzew/picture?width=200&height=200" alt="Profile Picture">
                        </div>
                        <div class="col-md-4 star_container">
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                        </div>
                        <div class="col-md-4 button_container pull-right">
                          <button type="button" class="btn btn-primary pull-right verification_button" data-toggle="popover" data-placement="top" title="" data-content="Diese Bewertung hat der Nutzer erhalten, nachdem etwas versendet hatte." data-html="true" data-original-title="Verifizierungen">Als Versender erhalten</button>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <p class="box_rose">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                </div> 
                <div class="infobox_content">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="avatar img-circle user_image" src="https://graph.facebook.com/magnus.langanke/picture?width=200&height=200" alt="Profile Picture">
                        </div>
                        <div class="col-md-4 star_container">
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                          <i class="pe-7s-star box_icon_large yellow"></i>
                        </div>
                        <div class="col-md-4 button_container pull-right">
                          <button type="button" class="btn btn-warning pull-right verification_button" data-toggle="popover" data-placement="top" title="" data-content="Diese Bewertung hat der Nutzer erhalten, nachdem er eine Sendung mitgenommen hatte." data-html="true" data-original-title="Verifizierungen">Als Kurier erhalten</button>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <p class="box_rose">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection