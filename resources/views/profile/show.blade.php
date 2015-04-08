@extends('app')

@section('content')

<style type="text/css">
.bg
{
  width: 100%;
  z-index: 0;
  position: absolute;
}
#card{
    margin-top: 40px;
    margin-bottom: 80px;
}
.green{
  color: #37c300;
}
.align{
  text-align: left;
}
</style>

<div class="wrapper">
    
    <img class="bg" src="{{ asset('images/backgrounds/sf.png') }}" />

    <h1>Your Profile</h1>

    <div class="row" id="profile-cards">
         <div class="col-md-6 col-md-offset-3">
            <div id="card" class="card card-user">
                <div class="image">
                     <img src="{{ asset('images/backgrounds/hello.png') }}" alt="...">
                </div>
                <div class="content">
                    <div class="author">
                      
                        @if($user->facebookUser)
                        <img class="avatar" src="https://graph.facebook.com/{{ $user->facebookUser->id }}/picture?type=large" alt="...">
                        @else
                        <img class="avatar" src="{{ asset('gsd/img/faces/face-1.jpg') }}" alt="...">
                        @endif
                          <h4 class="title"> <br>
                            <h3>{{ $user->username }}</h3>
                             <p>{{ $user->first_name }} {{ $user->last_name }}</p>
                          </h4>
                    </div>

                    <hr>

                    <div class="row">
                          <div class="col-md-4">
                                  {{-- <div class="icon icon-azure">
                                      <i class="pe-7s-note2"></i>
                                  </div> --}}
                                  <div class="description">
                                      <h4>Verifizierte Identifikation</h4>
                                      <hr>
                                      <div class="align">
                                      <p><i class="fa fa-check green"></i> E-Mail-Adresse bestätigt</p>
                                      @if($user->facebookUser)
                                      <p><i class="fa fa-check green"></i> {{ $user->facebookUser->friends }} Freunde bei Facebook</p>
                                      @else
                                      @endif
                                      @if($user->phoneNumbers->first()->verified)
                                      <p><i class="fa fa-check green"></i> Handynummer bestätigt</p>
                                      @else
                                      @endif
                                      </div>
                                  </div>
                          </div>
                          <div class="col-md-4">
                                  {{-- <div class="icon icon-purple">
                                      <i class="pe-7s-home"></i>
                                  </div> --}}
                                  <div class="description">
                                      <h4>Info</h4>
                                      <hr>
                                      @if($user->profile->hometown && $user->settings->hidden_hometown)
                                        <p><i class="fa fa-map-marker"></i> Wohnort: {{ $user->profile->hometown }}</p>
                                      @else
                                      @endif
                                      @if($user->profile->job && $user->settings->hidden_job)
                                        <p><i class="fa fa-university"></i> Job: {{ $user->profile->job }}</p>
                                      @else
                                      @endif
                                      @if($user->profile->languages && $user->settings->hidden_languages)
                                        <p><i class="fa fa-language"></i> Sprachen, die {{ $user->first_name }} spricht: {{ $user->profile->languages }}</p>
                                      @else
                                      @endif
                                      @if($user->profile->bio && $user->settings->hidden_bio)
                                        <p><i class="fa fa-user"></i> Über {{ $user->first_name }}: {{ $user->profile->bio }}</p>
                                      @else
                                      @endif
                                  </div>
                          </div>
                          <div class="col-md-4">
                                  {{-- <div class="icon icon-pink">
                                      <i class="pe-7s-star"></i>
                                  </div> --}}
                                  <div class="description">
                                      <h4>Bewertungen</h4>
                                      <hr>
                                      <p>{{ $user->first_name }} hat noch keine Bewertungen erhalten.</p>
                                  </div>
                          </div>
                      </div>

                </div>
                <hr>
            </div> <!-- end card -->
         </div>
    </div>  


    
</div> <!-- wrapper --> 

@endsection