@extends('app')

@section('content')

<style type="text/css">
.bg
{
  width: 100%;
  z-index: 0;
  position: absolute;
}
.card{
	margin-top: 80px;
	margin-bottom: 320px;
}
</style>

<div class="wrapper">
    
    <img class="bg" src="{{ asset('images/backgrounds/sf.png') }}" />

    @if(Auth::guest())
    @else
    	<h1>Hi {{ Auth::user()->firstname }}</h1>
    @endif

    <div class="row">
         <div class="col-md-4 col-md-offset-2">
            <div class="card card-user">
                <div class="image">
                     <img src="{{ asset('images/backgrounds/hello.png') }}" alt="...">
                </div>
                <div class="content">
                    <div class="author">
                         <a href="#">
                        <img class="avatar" src="{{ asset('gsd/img/faces/face-1.jpg') }}" alt="...">
                       
                          <h4 class="title"> <br>
                            Versenden
                          </h4>
                          <h4>Schnell und einfach. Versende, was immer du möchtest.</h4>
                          <button class="btn btn-warning btn-lg btn-round btn-toggle" id="starBtn" data-toggle="morphing" data-rotation-color="orange">Jetzt versenden</button>
                        </a>
                    </div>

                </div>
                <hr>
            </div> <!-- end card -->
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                     <img src="{{ asset('images/backgrounds/hello.png') }}" alt="...">
                </div>
                <div class="content">
                    <div class="author">
                         <a href="#">
                        <img class="avatar" src="{{ asset('gsd/img/faces/face-1.jpg') }}" alt="...">
                       
                          <h4 class="title"> <br>
                            Mitnehmen  
                          </h4>
                          <h4>Fahrt finanzieren war noch nie so einfach. Sendungen jetzt mitnehmen.</h4>
                          <button class="btn btn-warning btn-lg btn-round btn-toggle" id="starBtn" data-toggle="morphing" data-rotation-color="orange">Jetzt mitnehmen</button>
                        </a>
                    </div>

                </div>
                <hr>
            </div> <!-- end card -->
    	</div>

    </div>  


    
</div> <!-- wrapper --> 

@endsection