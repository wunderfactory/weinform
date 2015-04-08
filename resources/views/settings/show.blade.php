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
                            <h3>Deine Kontoeinstellungen</h3>
                          </h4>
                    </div>

                    <hr>

                    <div class="row">
                          <div class="col-md-6">
                                  <h4>Privatsphäre</h4>
                                    <p>Die ausgewählten Felder sind auf Deinem Profil sichtbar.</p>
                                    <form action="{{ action('SettingsController@postUpdateSettings',[$user->username]) }}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <label for="hometown">Hometown</label>
                                        <input id="hometown" type="checkbox" name="hometown" {{ $user->settings->hidden_hometown? 'checked': '' }}>
                                        <label for="job">Job</label>
                                        <input id="job" type="checkbox" name="job" {{ $user->settings->hidden_job ? 'checked': '' }}>
                                        <label for="languages">Languages</label>
                                        <input id="languages" type="checkbox" name="languages" {{ $user->settings->hidden_languages? 'checked': '' }}>
                                        <label for="bio">Bio</label>
                                        <input id="bio" type="checkbox" name="bio" {{ $user->settings->hidden_bio? 'checked': '' }}>
                                        <input type="submit" >
                                    </form>
                          </div>
                          <div class="col-md-6">
                            <h4>Verifizierte Identifikationen</h4>
                                  <p>Email: {{$user->emails->first()->email}} <i class="fa-check-circle-o fa green"></i></p>
                                    <p>Handynummer:
                                    + {{$user->phoneNumbers->first()->country_prefix}} {{$user->phoneNumbers->first()->phone_number}} 
                                    @if($user->phoneNumbers->first()->verified)
                                        <i class="fa-check-circle-o fa green"></i></p>
                                    @else
                                        {!! link_to_action('SettingsController@getSendVerificationToken', 'Send token', [$user->username, $user->phoneNumbers->first()->id]) !!}
                                    @endif
                                    <br>
                                    @if($user->phoneNumbers->first()->verified)
                                    @else
                                    <form action="{{ action('SettingsController@postVerifyPhone',[$user->username]) }}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <label for="token">Token</label>
                                        <input id="token" type="input" name="token">
                                        <input type="submit" >
                                    </form>
                                    @endif
                          </div>
                      </div>

                </div>
                <hr>
            </div> <!-- end card -->
         </div>
    </div>  


    
</div> <!-- wrapper --> 

@endsection