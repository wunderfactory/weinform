@extends('app')

@section('content')

<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="{{ asset('images/stock/friends.jpg') }}">
        </div>    
        <div class="small-info">
            <h1>Versende (an) deine Freunde!</h1>
        </div>
    </div>

    <div class="section">
           <div class="container">
               <h2 class="section-title">Wundergeschichten</h2>
               <div class="row">
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <div class="image">
                                <img src="{{ asset('images/presentation/shipments/ship1.jpg') }}" alt="..."/>
                                <div class="filter">
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-bookmark-o"></i> Bookmark
                                    </button>
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-align-left"></i> Read article
                                    </button>
                                </div>
                            </div>
                            <div class="content">
                                <p class="category text-info">
                                        <i class="fa fa-trophy"></i>
                                </p>
                                <a href="#">
                                    <h4 class="title">Grill mitgenommen von Hamburg nach Berlin</h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a href="#">
                                           <img src="{{ asset('images/presentation/people/girl.png') }}" alt="..." class="avatar">
                                           <span> Marianne </span>
                                        </a>
                                    </div>
                                     <div class="stats pull-right">
                                         <a href="#">
                                            <i class="fa fa-heart"></i>
                                         </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>
                    
                     <div class="col-md-8">
                        <div class="card card-plain">
                            <div class="image">
                                <img src="{{ asset('images/presentation/shipments/ship2.jpg') }}" alt="..."/>
                                <div class="filter">
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-bookmark-o"></i> Bookmark
                                    </button>
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-align-left"></i> Read article
                                    </button>
                                </div>
                            </div>
                            <div class="content">
                                <p class="category text-info">
                                        <i class="fa fa-trophy"></i>
                                </p>
                                <a href="#">
                                    <h4 class="title">Ruckzuck waren die Umzugskartons da.</h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a href="#">
                                           <img src="{{ asset('images/presentation/people/girl.png') }}" alt="..." class="avatar">
                                           <span> Elena </span>
                                        </a>
                                    </div>
                                    <div class="stats pull-right">
                                        <i class="fa fa-clock-o"></i> 7 min read
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div> 
                    
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <div class="image">
                                <img src="../assets/img/examples/about_1.jpg" alt="..."/>
                                <div class="filter">
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-bookmark-o"></i> Bookmark
                                    </button>
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-align-left"></i> Read article
                                    </button>
                                </div>
                            </div>
                            <div class="content">
                                <p class="category">News</p>
                                <a href="#">
                                    <h4 class="title">Get Shit Done Kit PRO, the most wanted bootstrap kit is here and... </h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a href="#">
                                           <img src="{{ asset('images/presentation/people/guy.jpg') }}" alt="..." class="avatar">
                                           <span> Alex </span>
                                        </a>
                                    </div>
                                    <div class="stats pull-right">
                                        <i class="fa fa-clock-o"></i> 17 min read
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>
               </div>
           </div>
    </div><!-- section -->
    
    
</div> <!-- wrapper --> 


    <script type="text/javascript">
        var big_image;
        $().ready(function(){
            responsive = $(window).width();
            
            $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);
            
            if (responsive >= 768){
                big_image = $('.parallax-image').find('img');
                
                $(window).on('scroll',function(){           
                    parallax();
                });
            }
            
        });
        
       var parallax = function() {
            var current_scroll = $(this).scrollTop();
            
            oVal = ($(window).scrollTop() / 3); 
            big_image.css('top',oVal);
        };

    </script>

@endsection