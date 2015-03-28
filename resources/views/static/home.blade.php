@extends('app')

@section('content')

<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="{{ asset('gsd/img/examples/blog_page8.jpg') }}">
        </div>    
        <div class="small-info">
            <h1>{{ Lang::get('static/home.welcome_h1') }}</h1>

            <h3>{{ Lang::get('static/home.welcome_h3') }}</h3>
        </div>
    </div>

     <div class="social-line social-line-black">
         <div class="container">
            <div class="row">
                 <div class="col-md-2 col-md-offset-2">
                     <a href="" class="btn btn-simple btn-social btn-neutral">
                         <i class="fa fa-facebook-square"></i> Share &middot; 753
                     </a>
                 </div>
                  <div class="col-md-2">
                     <a href="" class="btn btn-simple btn-social btn-neutral">
                         <i class="fa fa-twitter"></i> Tweet &middot; 832
                     </a>
                 </div>
                  <div class="col-md-2">
                     <a href="" class="btn btn-simple btn-social btn-neutral">
                         <i class="fa fa-google-plus-square"></i> Post &middot; 131
                     </a>
                 </div>
                 <div class="col-md-2">
                     <a href="" class="btn btn-simple btn-social btn-neutral">
                         <i class="fa fa-pinterest"></i> Pin it &middot; 323
                     </a>
                 </div>
            </div>
         </div>
     </div>
    
    
</div> <!-- wrapper --> 

@endsection