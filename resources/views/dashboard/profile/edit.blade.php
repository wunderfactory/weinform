@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

<div id="edit" class="container">
    <div class="row">
        @include('dashboard.profile.side-navbar')

        <div class="col-md-8">

            @include('notybox.do_mail_verification')

            @include('notybox.do_complete_profile')

            @include('notybox.do_profile_picture')

            <div class="infobox">
                <div class="header">
                    <p><strong>Angaben über Dich</strong></p>
                </div>
                <div class="content">
                    {{-- <p class="very_small">Diese Daten musst Du nicht angeben, Du kannst diese Felder auch leerlassen. Es macht dein Profil aber vertrauenswürdiger, wenn Du etwas über Dich schreibst.</p> --}}
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('SettingsProfileController@putUpdateProfile', [Auth::user()->username]) }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input name="_method" type="hidden" value="PUT">


                      <label class="control-label input_label"><p>Hometown</p></label>
                      <input type="text" class="form-control control_style" name="hometown" value="{{ old('hometown')}}">

                      <br>

                      <p class="info_text">Die nachfolgenden Angaben sind <strong>optional</strong>. Dein Profil wird aber <strong>vollständiger</strong>, wenn Du auch hier etwas schreibst.</p>

                      <label class="control-label input_label"><p>Job</p></label>
                      <input type="text" class="form-control control_style" name="job" value="{{ old('job') }}">

                      <label class="control-label input_label"><p>Languages</p></label>
                      <input type="text" class="form-control control_style" name="languages" value="{{ old('languages') }}">

                      <label class="control-label input_label"><p>Short Description about yourself</p></label>
                      <input type="text" class="form-control control_style" name="bio" value="{{ old('bio') }}">

                      <br>

                      <div class="form-group">
                          <div class="col-md-6">
                              <button type="submit" class="btn btn-block btn-info">
                                  Speichern
                              </button>
                          </div>
                          <div class="col-md-6" style="text-align: center;">
                              <a href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}">
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
                <div class="header">
                    <p><strong>Profil bearbeiten</strong></p>
                </div>
                <div class="content">
                    <p class="very_small info_text">Keine Sorge, wir nutzen diese Daten nur zur internen Auswertung unserer Nutzer. Keine Daten von Dir werden jemals weitergeben.</p>
                    <hr>
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('SettingsProfileController@putUpdateUser', [Auth::user()->username]) }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input name="_method" type="hidden" value="PUT">

                      <label class="control-label input_label"><p>Ich bin</p></label>
                      <select class="form-control control_style" name="gender">
                      <option></option>
                          <option value="female" {{(old('gender') == 'female') ? 'selected=selected':''}}>{{ Lang::get('auth/register.female') }}</option>
                          <option value="male" {{(old('gender') == 'male') ? 'selected=selected':''}}>{{ Lang::get('auth/register.male') }}</option>
                          <option value="other" {{(old('gender') == 'other') ? 'selected=selected:':''}}>{{ Lang::get('auth/register.other') }}</option>
                      </select>
                      

                      <label class="control-label"><p>Geburtsdatum (dd.mm.yyyy)</p></label>
                      <input type="text" class="form-control control_style" name="birth_date" value="{{ old('birth_date')}}">

                      <br>

                      <div class="form-group">
                          <div class="col-md-6">
                              <button type="submit" class="btn btn-block btn-info">
                                  Speichern
                              </button>
                          </div>
                          <div class="col-md-6" style="text-align: center;">
                              <a href="{{ action('SettingsProfileController@getIndex', [Auth::user()->username]) }}">
                                  <button type="submit"  class="btn btn-block btn-default">
                                      Zurücksetzen
                                  </button>
                              </a>
                          </div>
                        </div>
                    </form>
                </div> 
            </div><!-- /infobox -->

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>

@endsection