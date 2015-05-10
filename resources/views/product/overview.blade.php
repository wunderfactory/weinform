@extends('app')

@section('content')

<div class="product_area">

    <div id="overview" class="container">
        <div class="row top_down">

          <div id="head_text_wrapper">
              <h2>Hi {{ $user->first_name }}!</h2>
              <p>Mitnehmen oder Versenden?</p>
          </div>
            <div class="col-md-6">
              <a href="{!! route('tour.create') !!}">
                <div id="pickup_container">
                    <div class="icon_wrapper col-md-5">
                        <i id="car_icon" class="fa fa-car"></i>
                    </div>
                    <div class="text_wrapper col-md-5">
                      <p>Mitnehmen!</p>
                    </div>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="">
                <div id="send_container">
                    <div class="icon_wrapper col-md-5">
                      <i id="parcel_icon" class="fa fa-archive"></i>
                    </div>
                    <div class="text_wrapper col-md-5">
                      <p class="product_text">Versenden!</p>
                    </div>
                </div>
              </a>
            </div>
        </div><!-- /row -->


        <div class="row">
          <div class="col-md-12">

    <!------------------------------- -->

                @if(!$user->profile->languages && !$user->profile->hometown && !$user->profile->job && !$user->profile->bio)
                    <div class="warningbox">
                        <div class="header">
                            <div class="col-md-1"><i class="pe-7s-camera"></i></div>
                            <div class="col-md-8"><p><strong>Hi {{ $user->first_name }}! Bitte vervollständige Dein Profil.</strong></p></div>

                        </div>
                        <div class="content">
                            <p>Bitte <a href="{{ url('/user/'.Auth::user()->username.'/settings/profile/') }}">vervollständige dein Profil</a>, damit es für andere Nutzer <strong>vertrauenswürdiger</strong> erscheint. Füge ein <strong>Profilbild</strong> hinzu.</p>
                        </div>
                    </div>
                @endif

                <div class="infobox_large_image">
                    <div class="left">
                      <div class="header">
                        <p><strong>Lade deine Freunde ein!</strong></p>
                      </div>
                      <div class="content">
                          <p>Zusammen ist doch alles viel cooler! Lade ein paar Freunde von dir ein und erhalte Gutscheine für geführenfreie wundership-Sendungen!</p><br>
                          <a href="{{ url('friends') }}"><button class="btn btn-default">Jetzt Freunde einladen!</button></a>
                      </div>
                    </div>
                    <div class="right">
                        <div class="content">
                          <div class="image_container" style="background-image: url('{{ asset('images/presentation/shipments/ship1.jpg') }}');"></div>
                      </div>
                    </div> 
                </div>

    <!------------------------------- -->

                <div class="infobox">
                    <div class="header">
                        <p>Wir suchen <strong>Praktikanten</strong></p>
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div> 
                </div>

    <!------------------------------- -->

    <!-- MESSAGES -->

              {{-- <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Nachrichten</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">Messages</p>
                </div> 
              </div> --}}


              </div><!-- /col-md-12 -->
          </div><!-- /row -->
    </div><!-- /container -->

@section('script')
<!-- OVERVIEW WIGGLE -->

<script type="text/javascript">
$(document).ready(function() {     
    $('#pickup_container').hover(function(){     
        $('#car_icon').addClass('wiggle');    
    },     
    function(){
        $('#car_icon').removeClass('wiggle');     
    });
});
$(document).ready(function() {     
    $('#send_container').hover(function(){     
        $('#parcel_icon').addClass('wiggle');    
    },     
    function(){
        $('#parcel_icon').removeClass('wiggle');     
    });
});
</script>
@stop

@endsection