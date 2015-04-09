@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.notifications{
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

<div class="container notifications">
    <div class="row">
        @include('dashboard.account.side-navbar')


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
                    <p class="grey"><strong>E-Mail-Einstellungen</strong></p>
                </div>
                <div class="infobox_content">
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
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection