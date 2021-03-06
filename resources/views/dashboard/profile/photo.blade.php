@extends('app')

@section('content')

<div class="dashboard_area">

@include('dashboard.navbar')

<div id="photo" class="container">
    <div class="row">
        @include('dashboard.profile.side-navbar')

            <div class="col-md-8">

                @if($user->profile->picture || $user->facebookUser)
                <div class="infobox_image">
                    <div id="text_left">
                      <div class="header">
                        <p><strong>Dein Profilbild</strong></p>
                      </div>
                      <div class="content">
                        <p class="rose"><strong>TIPP:</strong> Achte darauf, dass Du auf deinem Profilbild <strong>gut zu erkennen</strong> bist. Wir verifizieren Deinen Account auch anhand Deines Bildes.</p><br>
                      </div>
                    </div>
                    <div id="image_right" class="col-md-6">
                      <div class="container" style="background-image: url('{{ action('UsersController@getPicture', [$user->username]) }}');"></div>
                    </div>  
                </div>
                @else
                <div class="successbox">
                    <div class="header">
                        <div class="col-md-1"><i class="pe-7s-camera"></i></div>
                        <div class="col-md-10"><p><strong>Heyho {{ $user->first_name }}! Schön, dass Du ein Profilbild höchlädst.</strong></p></div>
                       
                    </div>
                    <div class="content">
                        <p class="info_text"><strong>Wundership</strong> baut darauf, dass Du jedem anderen Nutzer <strong>vertrauen</strong> kannst und Ihm gern Deine Sendungen mitgibst. <strong>Ein Profilbild hilft dabei</strong>. Als Versender wird Dein wundership Kurier gern bei Dir vorbeikommen, wenn er Dich schon einmal gesehen hat.</p>
                    </div> 
                </div>
                @endif

                <div class="infobox">
                    <div class="header">
                        <p><strong>Profilbild ändern</strong></p>
                    </div>
                    <div class="content">
                        <ul class="nav nav-pills" role="tablist">
                              <li class="width_fifthy active">
                                <a href="#" onclick="file()" role="tab" data-toggle="tab" aria-expanded="true">
                                     Foto hochladen
                                </a>
                              </li>
                              <li class="width_fifthy">
                                <a href="#" onclick="webcam()" role="tab" data-toggle="tab" aria-expanded="false">
                                     WEBCAM
                                </a>
                              </li>
                        </ul>
                        <div id="webcam" style="display: none;">
                            <div class="panel-body">
                                <div id="webcam_container"></div><br>
                                <a class="btn btn-default" href="javascript:void(take_snapshot())">Foto aufnehmen</a>
                            </div>
                        </div>

                        <div id="file">
                            <div class="panel-body">
                                <input id="picture_upload" type="file" name="">
                            </div>
                        </div>
                    </div>
                    <div id="image_container">
                        <div class="cropper">
                            <img src="{{asset('images/backgrounds/sf.png')}}" alt="Picture">
                        </div>
                        <form method="POST" action="{{ action('SettingsProfileController@postUploadImage', [Auth::user()->username]) }}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input id="picture_form" type="hidden" name="picture">
                            <br>
                            <input class="btn btn-default" value="Speichern" type="submit">
                        </form>
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
        function webcam(){
                Webcam.attach( '#webcam_container')
                $('#file').css('display','none');
                $('#webcam').css('display','block');
        }

        function file(){
            $('#webcam').css('display','none');
            $('#file').css('display','block');
            Webcam.reset();
            $('#webcam_container').empty();
        }

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
        .cropper img{
            width: 100%;
        }

        #image_container {
            display: none;
        }
    </style>
    <link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet" />
@endsection