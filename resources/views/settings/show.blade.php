@extends('app')

@section('content')
<section>
    <h1>Settings</h1>
    <h3>Privacy:</h3>
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

</section>
<section>
    <h1>Verifications</h1>
    <h3>Emails:</h3>
    {{$user->emails}}
    <h3>Mobile phone number:</h3>
    {{$user->phoneNumbers->first()}}
    @if($user->phoneNumbers->first()->verified)
        <i class="fa-check-circle-o fa"></i>
    @else
        {!! link_to_action('SettingsController@getSendVerificationToken', 'Send token', [$user->username, $user->phoneNumbers->first()->id]) !!}
    @endif
    <br>
    <form action="{{ action('SettingsController@postVerifyPhone',[$user->username]) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="token">Token</label>
        <input id="token" type="input" name="token">
        <input type="submit" >
    </form>
</section>
@endsection