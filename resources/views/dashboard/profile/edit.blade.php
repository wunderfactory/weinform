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

<div class="container profile">
    <div class="row">
        @include('dashboard.profile.side-navbar')

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
.white{
  color: white;
}
.grey{
  color: #828282;
}
.input_label{
  margin-top: 3px;
  margin-left: 3px;
}
.very_small{
  font-size: 15px;
  margin: 4px;
}
</style>

<style type="text/css">
.warningbox{
  width: 100%;
  background-color: white;
  border: 1px solid red;
  margin-bottom: 20px;
}
.warningbox_header{
  width: 100%;
  position: top;
  height: 60px;
  padding: 15px;
  color: white;
  background-color: #ea555c;
  border-bottom: 1px solid #ea555c;
  vertical-align: center;
}
.heading_container{
  margin-top: 2px;
}
.warningbox_content{
  padding: 15px; 
}
.hep{
  font-size: 30px;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">


            <div class="warningbox">
                <div class="warningbox_header">
                    <div class="col-md-1"><i class="pe-7s-gleam hep"></i></div>
                    <div class="col-md-8 heading_container"><p class="white"><strong>Hi {{ $user->first_name }}! Bitte vervollständige Dein Profil.</strong></p></div>
                   
                </div>
                <div class="warningbox_content">
                    <p class="rose">Bitte vervollständige dein Profil, damit es für andere Nutzer <strong>vertrauenswürdiger</strong> erscheint. Auch ein <strong>Profilbild</strong> von Dir hilft dabei.</p>
                </div> 
            </div>

            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Angaben über Dich</strong></p>
                </div>
                <div class="infobox_content">
                    {{-- <p class="very_small">Diese Daten musst Du nicht angeben, Du kannst diese Felder auch leerlassen. Es macht dein Profil aber vertrauenswürdiger, wenn Du etwas über Dich schreibst.</p> --}}
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('SettingsProfileController@putUpdateProfile', [Auth::user()->username]) }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input name="_method" type="hidden" value="PUT">


                      <label class="control-label input_label"><p class="rose">Hometown</p></label>
                      <input type="text" class="form-control" name="hometown" value="{{ old('hometown')}}">

                      <label class="control-label input_label"><p class="rose">Job</p></label>
                      <input type="text" class="form-control" name="job" value="{{ old('job') }}">

                      <label class="control-label input_label"><p class="rose">Languages</p></label>
                      <input type="text" class="form-control" name="languages" value="{{ old('languages') }}">

                      <label class="control-label input_label"><p class="rose">Short Description about yourself</p></label>
                      <input type="text" class="form-control" name="bio" value="{{ old('bio') }}">

                      <br>

                      <div class="form-group">
                          <div class="col-md-6">
                              <button type="submit" class="btn btn-block btn-info">
                                  Speichern
                              </button>
                          </div>
                          <div class="col-md-6" style="text-align: center;">
                              <a href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}"
                                  <button type="submit"  class="btn btn-block btn-default">
                                      Zurücksetzen
                                  </button>
                              </a>
                          </div>
                        </div>
                      </form>
                </div> 
            </div>




            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Profil bearbeiten</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="very_small">Keine Sorge, wir nutzen diese Daten nur zur internen Auswertung unserer Nutzer. Keine Daten von Dir werden jemals weitergeben.</p>
                    <hr>
                    <form class="form-horizontal" role="form" method="POST" action="#">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input name="_method" type="hidden" value="PUT">

                      <label class="control-label input_label"><p class="rose">Ich bin</p></label>
                      <select class="form-control" name="gender">
                      <option></option>
                          <option value="female" {{(old('gender') == 'female') ? 'selected=selected':''}}>{{ Lang::get('auth/register.female') }}</option>
                          <option value="male" {{(old('gender') == 'male') ? 'selected=selected':''}}>{{ Lang::get('auth/register.male') }}</option>
                          <option value="other" {{(old('gender') == 'other') ? 'selected=selected:':''}}>{{ Lang::get('auth/register.other') }}</option>
                      </select>
                      

                      <label class="control-label"><p class="rose">Geburtsdatum (dd.mm.yyyy)</p></label>
                      <input type="text" class="form-control" name="birth_date" value="{{ old('birth_date')}}">

                      <br>

                      <div class="form-group">
                          <div class="col-md-6">
                              <button type="submit" class="btn btn-block btn-info">
                                  Speichern
                              </button>
                          </div>
                          <div class="col-md-6" style="text-align: center;">
                              <a href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}"
                                  <button type="submit"  class="btn btn-block btn-default">
                                      Zurücksetzen
                                  </button>
                              </a>
                          </div>
                        </div>
                    </form>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection