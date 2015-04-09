@extends('app')

@section('content')
<div id="background">

    @include('dashboard.navbar')

    <div class="container profile">
        <div class="row">
            @include('dashboard.profile.side-navbar')


<!-- WARNINGBOX -->

<style type="text/css">
.grey{
    color: #828282;
}
.warningbox{
  width: 100%;
  background-color: white;
  border: 1px solid #52b856;
  margin-bottom: 20px;
}
.warningbox_header{
  width: 100%;
  position: top;
  height: 60px;
  padding: 15px;
  color: white;
  background-color: #52b856;
  border-bottom: 1px solid #52b856;
  vertical-align: center;
}
.heading_container{
  margin-top: 2px;
}
.warningbox_content{
  padding: 15px; 
}
.icon_large{
  font-size: 30px;
}
</style>

            <div class="col-md-8">

                <div class="warningbox">
                    <div class="warningbox_header">
                        <div class="col-md-1"><i class="pe-7s-smile icon_large"></i></div>
                        <div class="col-md-10 heading_container"><p class="white"><strong>Heyho {{ $user->first_name }}! Schön, dass Du ein Profilbild höchlädst.</strong></p></div>
                       
                    </div>
                    <div class="warningbox_content">
                        <p class="grey"><strong>Wundership</strong> baut darauf, dass Du jedem anderen Nutzer <strong>vertrauen</strong> kannst und Ihm gern Deine Sachen mitgibst. Ein Profilbild hilft dabei. Als Versender wird Dein wundership Kurier gern bei Dir vorbeikommen, wenn er Dich schon einmal gesehen hat.</p>
                    </div> 
                </div>


                <div class="infobox">
                    <div class="infobox_header">
                        <p class="grey"><strong>Profilfoto ändern</strong></p>
                    </div>

                    <div class="infobox_content">
                        <input id="picture_upload" type="file" name="">
                        <a href="javascript:void(take_snapshot())">Snap</a>
                        <div id="webcam_container">

                        </div>
                        <div id="image_container">
                            <div class="cropper">
                                <img src="{{asset('images/backgrounds/sf.png')}}" alt="Picture">
                            </div>
                            <form method="POST" action="{{ action('SettingsProfileController@postUploadImage', [Auth::user()->username]) }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input id="picture_form" type="hidden" name="picture">
                                <input type="submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div><!-- /col-md-8 -->
        </div><!-- /row -->
    </div><!-- /container -->


</div>
@endsection

@section('script')
    <script src="{{ asset('js/webcam.min.js') }}"></script>
    <script src="{{ asset('js/cropper.min.js') }}"></script>


    <script>
        var $cropper = $('.cropper img');
        var url, active;
        var support =  {
            fileList: !!$('<input type="file">').prop('files'),
            blobURLs: !!window.URL && URL.createObjectURL,
            formData: !!window.FormData
        };
        function isImageFile(file) {
            if (file.type) {
                return /^image\/\w+$/.test(file.type);
            } else {
                return /\.(jpg|jpeg|png|gif)$/.test(file);
            }
        }

        function start(){

                $('.cropper img').cropper({
                    aspectRatio: 1,
                    autoCropArea: 0.65,
                    strict: true,
                    guides: false,
                    highlight: false,
                    dragCrop: false,
                    movable: true,
                    resizable: true
                });
                active = true;
        }

        function stop() {
            if (active) {
                $('.cropper img').cropper('destroy');
                active = false;
            }
        }

        $('#picture_upload').on('change',function(){
            stop();
            if($('#image_container').css('display') == 'none') {
                $('#image_container').css('display', 'block')
            }
            var file, files;
            files =  $('#picture_upload').prop('files');
            if (files.length > 0) {
                file = files[0];
                if (isImageFile(file)) {
                    var FR = new FileReader();
                    FR.onload = function(e) {
                        $('.cropper').empty().html('<img src="'+ e.target.result+'">');
                        start();
                    };
                    FR.readAsDataURL(file);
                }
            }
        });

        $('form').submit(function(e){
            e.preventDefault();
            $('#picture_form').val($('.cropper > img').cropper('getCroppedCanvas').toDataURL("image/jpeg").replace(/^data\:image\/\w+\;base64\,/, ''));
            this.submit();
        })
    </script>
    <script>
        Webcam.set({
            width: 320,
            height: 320,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#webcam_container' );

        function take_snapshot() {
            Webcam.snap( function(data_uri) {
                stop();
                if($('#image_container').css('display') == 'none') {
                    $('#image_container').css('display', 'block')
                }
                $('.cropper').empty().html('<img src="'+ data_uri+'">');
                start();
            });
        }
    </script>
@endsection

@section('style')
    <style type="text/css">
        #background{
            width: 100%;
            height: 100%;
            background-color: #f0f0f0;
        }
        .profile{
            max-width: 980px !important;
        }
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

        .cropper img{
            width: 100%;
        }

        #image_container {
            display: none;
        }
    </style>
    <link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet" />
@endsection