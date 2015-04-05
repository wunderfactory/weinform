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
    margin-top: 90px;
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
                         <a href="#">
                        @if($user->facebookUser)
                        <img class="avatar" src="https://graph.facebook.com/{{ $user->facebookUser->id }}/picture?type=large" alt="...">
                        @else
                        <img class="avatar" src="{{ asset('gsd/img/faces/face-1.jpg') }}" alt="...">
                        @endif
                          <h4 class="title"> <br>
                            <p>{{ $user->username }}</p>
                             <small>{{ $user->first_name }} {{ $user->last_name }}</small>
                          </h4> 
                        </a>
                    </div>

                    <hr>

                    <div class="row">
                          <div class="col-md-4">
                             <div class="info">
                                  <div class="icon icon-azure">
                                      <i class="pe-7s-note2"></i>
                                  </div>
                                  <div class="description">
                                      <h3>Verifizierte Identifikation</h3>
                                      <hr>
                                      <div class="align">
                                      <p><i class="fa fa-check green"></i> 300 Facebook Freunde</p>
                                      <p><i class="fa fa-check green"></i> E-Mail-Adresse bestätigt</p>
                                      <p><i class="fa fa-check green"></i> E-Mail-Adresse Telefonnummer bestätigt</p>
                                      </div>
                                  </div>
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="info">
                                  <div class="icon icon-purple">
                                      <i class="pe-7s-home"></i>
                                  </div>
                                  <div class="description">
                                      <h3>Info</h3>
                                      <p>Wohnort: {{ $user->profile->hometown }}</p>
                                      <p>{{ $user->profile->bio }}</p>
                                      <p>{{ $user->profile->job }}</p>
                                  </div>
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="info">
                                  <div class="icon icon-pink">
                                      <i class="pe-7s-star"></i>
                                  </div>
                                  <div class="description">
                                      <h3>Bewertungen</h3>
                                      <p>Patrick has 5 Stars!</p>
                                  </div>
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