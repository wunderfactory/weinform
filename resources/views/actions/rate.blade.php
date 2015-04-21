@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.overview{
  max-width: 980px !important;
}
#head_text_wrapper{
  width: 100%;
  text-align: center;
}
</style>

<div id="background">

<div class="container overview">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

                <div id="head_text_wrapper">
                <h2>Hallo {{ $user->first_name }}!</h2>
                <p>Bitte bewerte Deine letzte Fahrt</p>
                <hr>
                </div>
                

<style type="text/css">
#text_left{
  float: left;
  position: relative;
  width: 243px;
}
#image_right{
  float: left;
  position: relative;
}
.infobox_image{
  background-color: white;
  border: 1px solid #ababab;
  margin-top: 20px;
  margin-bottom: 20px;
}
.image_infobox_header{
  position: top;
  height: 60px;
  padding: 15px;
  width: 300px;
  background-color: #e8e8e8;
  /*border-bottom: 1px solid #ababab;*/
}
.image_container{
  width: 273px;
  background-color: red;
  height: 200px;
  background-image: url('{{ asset('images/stock/friends.jpg') }}');
  background-size: cover;
}
@media (min-width: 900px) {
    #image_right{
      margin-left: 14px;
    }
}
</style>

          

            <div class="infobox_image">
              <div class="row">
                <div class="col-md-6">
                  <div class="image_infobox_header">
                    <p class="grey"><strong>Dein Kurier</strong></p>
                  </div>
                  <div class="infobox_content">
                    <p class="box_grey"><strong>Christian Köhler</strong></p>
                    <p class="box_grey">Münster</p>
                  </div>
                </div>
                <div id="image_right" class="col-md-4 hep">
                  <img class="avatar round" src="https://graph.facebook.com/koehler.chris/picture?width=200&height=200" alt="Profile Picture">
                </div>
              </div>  
            </div>


            <hr>


<style type="text/css">
.rating_container{
  max-width: 250px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
}
.star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  width: 250px;
  height: 50px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
.choice {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  text-align: center;
  display: block;
}
</style>

          <div class="row">
              <div class="rating_container">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/test') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <span class="star-rating">
                      <input id="first_star" type="radio" name="rating" value="1"><i></i>
                      <input id="second_star" type="radio" name="rating" value="2"><i></i>
                      <input id="third_star" type="radio" name="rating" value="3"><i></i>
                      <input id="fourth_star" type="radio" name="rating" value="4"><i></i>
                      <input id="fifth_star" type="radio" name="rating" value="5"><i></i>
                    </span>

                  
                

              </div>
          </div>


<script type="text/javascript">
$(':radio').change(
  function(){
    $('.choice').text( this.value + ' stars' );
  } 
)
</script>

<style type="text/css">
.comment_container{
  text-align: center;
  margin-top: 20px;
}
.text_input{
  line-height: 18px;
}
#bad{
  display: none;
}
#problems{
  display: none;
}
#okay{
  display: none;
}
#good{
  display: none;
}
#wonder{
  display: none;
}
</style>


          <div class="comment_container">

              <p id="bad" class="grey"><strong>Schlecht!</strong></p>
              <p id="problems" class="grey"><strong>Hm. Es gab Probleme.</strong></p>
              <p id="okay" class="grey"><strong>War okay.</strong></p>
              <p id="good" class="grey"><strong>Hat geklappt.</strong></p>
              <p id="wonder" class="grey"><strong>Ein Wunder!</strong></p>


              <br>
              <label class="control-label input_label"><p class="rose">Dein Kommentar (optional)</p></label>
              <textarea type="text" cols="40" rows="5" class="form-control text_input" name="bio" value="{{ old('bio') }}"></textarea>

              <br>

              <input class="btn btn-default btn-login" type="submit" value="Absenden">

              </form>

          </div>


@section('script')
    <script type="text/javascript">
    $(document).ready(function() { 
        $(function() {
            $('#first_star').hover(function() { 
                $('#bad').show(); 
            }, function() { 
                $('#bad').hide(); 
            });
            $('#second_star').hover(function() { 
                $('#problems').show(); 
            }, function() { 
                $('#problems').hide(); 
            });
            $('#third_star').hover(function() { 
                $('#okay').show(); 
            }, function() { 
                $('#okay').hide(); 
            });
            $('#fourth_star').hover(function() { 
                $('#good').show(); 
            }, function() { 
                $('#good').hide(); 
            });
            $('#fifth_star').hover(function() { 
                $('#wonder').show(); 
            }, function() { 
                $('#wonder').hide(); 
            });
        });
    });
    </script>
@stop


<!------------------------------- -->

<style type="text/css">
#ratingbox{
  margin-top: 30px;
}
</style>

            <div id="ratingbox" class="warningbox">
                <div class="warningbox_header">
                    <p class="box_white"><strong>Richtig bewerten</strong></p>
                </div>
                <div class="warningbox_content">
                    <p class="box_rose"><strong>Deine Bewertung</strong> ist für wundership besonders wichtig. Achte bitte deshalb darauf, dass Du <strong>ehrlich</strong> und <strong>richtig</strong> bewertest. Deine Bewertung hilft dabei, die wundership Gemeinschaft zu stärken und sorgsame und vertrauensvolle Mitglieder zu erkennen.</p>
                </div> 
            </div>


        </div>
    </div>
  </div>
</div>

@endsection