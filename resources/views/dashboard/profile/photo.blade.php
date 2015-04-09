@extends('app')

@section('content')

<<<<<<< HEAD



<form method="POST" action="">
    <input type="hidden" name="_token" value="_token">
    <input type="hidden" name="picture">
</form>
@endsection

@section('script')
    <script src="{{ asset('js/webcam.min.js') }}"></script>
    <script src="{{ asset('js/cropper.min.js') }}"></script>


    <script>

    </script>
@endsection

@section('style')
=======
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
.grey{
  color: #828282;
}
</style>

<!-- INFOBOXES -->

        <div class="col-md-8">
            <div class="infobox">
                <div class="infobox_header">
                    <p class="grey"><strong>Profilfoto ändern</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">HIER Profilfoto ändern</p>
                </div> 
            </div>

      </div><!-- /col-md-8 -->
  </div><!-- /row -->
</div><!-- /container -->


</div>
>>>>>>> origin/master

@endsection