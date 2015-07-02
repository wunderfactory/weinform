@extends('app')

@section('content')

<div class="product_area">

    <div id="overview" class="container">
        <div class="row top_down">

          <div id="head_text_wrapper">
              <h2>Hallo {{ $user->first_name }}!</h2>
              <p>Jetzt über wundership versenden.</p>
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


            <div class="col-md-6">
              <a href="{{ url('faq') }}">
                <div id="pickup_container">
                    <div class="icon_wrapper col-md-5">
                        <i id="car_icon" class="fa fa-question"></i>
                    </div>
                    <div class="text_wrapper col-md-5">
                      <p>FAQ</p>
                    </div>
                </div>
              </a>
            </div>


        </div><!-- /row -->


        <div class="row">
        </div>
    <!------------------------------- -->

                <br>

            <div class="row">
              <div class="col-md-12">
                @include('notybox.howitworks')
              </div>
            </div>
                
            <div class="row">
              <div class="col-md-12">
                @include('notybox.do_mail_verification')
              </div>
            </div>

{{--             <div class="row">
              <div class="col-md-12">
                @include('notybox.do_complete_profile')
              </div>
            </div> --}}

{{--             <div class="row">
              <div class="col-md-12">
                @include('notybox.do_profile_picture')
              </div>
            </div> --}}
            
{{--             <div class="row">
              <div class="col-md-12">
                @include('notybox.do_id_verification')
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                @include('notybox.id_verification_pending')
              </div>
            </div> --}}

            {{-- <div class="row">
              <div class="col-md-12">
                <div class="infobox_large_image">
                  <div class="row">
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
            </div> --}}

    <!------------------------------- -->

          

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