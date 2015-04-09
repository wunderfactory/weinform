@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.profile{
  max-width: 980px !important;
}
</style>

<div id="background">

@include('dashboard.navbar')

<style type="text/css">
.rose{
  color: #ea555c;
}
#right_navbar_container{
  padding: 20px;
}
.nav_text{
  color: #797979;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  /* ...and now for the proper property */
  transition:.5s;
}
.nav_text:hover{
  color: #c1c1c1;
}
.active{
  color: #404040 !important;
}
</style>

<div class="container profile">
    <div class="row">
        <div class="col-md-3">
          <div id="right_navbar_container">
            <a href=""><p class="nav_text active"><strong>Profil bearbeiten</strong></p></a>
            <a href=""><p class="nav_text"><strong>Profilfoto</strong></p></a>
            <a href=""><p class="nav_text"><strong>Vertrauen und Verifizierung</strong></p></a>
            <a href=""><p class="nav_text"><strong>Bewertungen</strong></p></a>
            <hr>
            <button href="#" class="btn btn-block btn-warning">Profil ansehen</button>
          </div>      
        </div>


<style type="text/css">
.infobox{
  width: 100%;
  background-color: white;
  border: 1px solid #ababab;
  margin-bottom: 20px;
}
.infobox_header{
  width: 100%;
  position: top;
  height: 60px;
  padding: 15px;
  background-color: #e8e8e8;
  border-bottom: 1px solid #ababab;
  vertical-align: center;
}
.infobox_content{
  padding: 15px; 
}
.grey{
  color: #828282;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Profil bearbeiten</strong></p>
                </div>
                <div class="infobox_content">
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

            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Optionale Angaben</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">HIER ALLE DINGE, die optional sind.</p>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection