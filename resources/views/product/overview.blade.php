@extends('app')

@section('content')

<div class="product_area">

    <div id="overview" class="container">
        <div class="row top_down">

          @include('notybox.do_mail_verification')

          <div id="head_text_wrapper">
              <h2>Hi {{ $user->first_name }}!</h2>
              <p>Mitnehmen oder Versenden?</p>
          </div>
            <div class="col-md-6">
              <a href="{{ route('shipments.index') }}">
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
              <a href="{{ route('shipments.create') }}">
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
        </div>
    <!------------------------------- -->

                <br>

                @include('notybox.do_complete_profile')

            <div class="row">
              <div class="col-md-12">
                @include('notybox.do_profile_picture')
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                @include('notybox.do_id_verification')
              </div>
            </div>

                @include('notybox.id_verification_pending')
            
            <div class="row">
              <div class="col-md-12">
                <div class="infobox_large_image">
                    <div class="left col-md-6">
                      <div class="header">
                        <p><strong>Lade deine Freunde ein!</strong></p>
                      </div>
                      <div class="content">
                          <p>Zusammen ist doch alles viel cooler! Lade ein paar Freunde von dir ein und erhalte Gutscheine für geführenfreie wundership-Sendungen!</p><br>
                          <a href="{{ url('friends') }}"><button class="btn btn-default">Jetzt Freunde einladen!</button></a>
                      </div>
                    </div>
                    <div class="right col-md-6">
                        <div class="content">
                          <img class="img-responsive" src="{{ asset('images/stock/friends.jpg') }}">
                      </div>
                    </div> 
                </div>
              </div>
            </div>

    <!------------------------------- -->

            <div class="row">
                <div class="infobox col-md-12">
                    <div class="header">
                        <p>Wir suchen <strong>Praktikanten</strong></p>
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div> 
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