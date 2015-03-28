@extends('app')

@section('content')

<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="{{ asset('gsd/img/examples/blog_page8.jpg') }}">
        </div>    
        <div class="small-info">
            <h1>{{ Lang::get('static/home.welcome') }} {{ App::getLocale() }}</h1>

            <h3>Find only the best stories from our famous writers.</h3>
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


    <footer class="footer footer-big footer-transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h5 class="title">Company</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" >
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   Find offers
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Discover Projects
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Our Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="title"> Help and Support</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                   Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   How it works
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company Policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   Money Back
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3">
                    <h5 class="title">Follow us on</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-social btn-facebook btn-simple">
                                    <i class="fa fa-facebook-square"></i> Facebook
                                </a>
                            </li>
                             <li>
                                 <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                    <i class="fa fa-dribbble"></i> Dribbble
                                </a>
                            </li>
                            <li>
                               <a href="#" class="btn btn-social btn-twitter btn-simple">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                 <a href="#" class="btn btn-social btn-reddit btn-simple">
                                    <i class="fa fa-google-plus-square"></i> Google+
                                </a>
                            </li>
                           
                        </ul>
                    </nav>
                </div>

                 <div class="col-md-3">
                    <h5 class="title">Latest News</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" >
                                   <i class="fa fa-twitter"></i> <b>Get Shit Done</b>
                                   The best kit in the market is here, just give it a try and let us...
                                   <hr class="hr-small">
                                </a>
                            </li>
                            <li>
                                  <a href="#" >
                                   <i class="fa fa-twitter"></i>
                                   We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                </a>
                            </li>
                          
                        </ul>
                    </nav>
                </div>

            </div>
            <hr />
            <div class="copyright">
                &copy; 2015 Creative Tim, made with love
            </div>
        </div>
    </footer>  
    
    
</div> <!-- wrapper --> 

@endsection