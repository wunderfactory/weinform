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
</style>

<div class="wrapper">
    
    <img class="bg" src="{{ asset('images/backgrounds/sf.png') }}" />

    <div class="row" id="profile-cards">
         <div class="col-md-6 col-md-offset-3">
            <div id="card" class="card card-user">
                <div class="image">
                     <img src="{{ asset('images/backgrounds/hello.png') }}" alt="...">
                </div>
                <div class="content">
                    <div class="author">
                         <a href="#">
                        <img class="avatar" src="{{ asset('gsd/img/faces/face-1.jpg') }}" alt="...">
                       
                          <h4 class="title"> <br>
                            <p>{{ Auth::user()->username }}</p>
                             <small>{{Auth::user()->first_name }} {{ Auth::user()->last_name }}</small>
                          </h4> 
                        </a>
                    </div>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/'.Auth::user()->username.'/profile/') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <label class="control-label">Hometown</label>
                        <input type="text" class="form-control" name="hometown" value="{{ old('hometown')}}">

                        <label class="control-label">Job</label>
                        <input type="text" class="form-control" name="job" value="{{ old('job') }}">

                        <label class="control-label">Languages</label>
                        <input type="text" class="form-control" name="languages" value="{{ old('languages') }}">

                        <label class="control-label">Short Description about yourself</label>
                        <input type="text" class="form-control" name="bio" value="{{ old('bio') }}">

                        <br>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-lg btn-info">
                                    Save
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="submit"  class="btn btn-block btn-lg btn-default">
                                    Skip
                                </button>
                            </div>
                    </div>
                    </form>

                </div>
                <hr>
            </div> <!-- end card -->
         </div>
    </div>  


    
</div> <!-- wrapper --> 

@endsection