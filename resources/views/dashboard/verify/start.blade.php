@extends('app')

@section('content')

<style type="text/css">
#background{
  width: 100%;
  height: 100%;
  background-color: #f0f0f0;
}
.start{
  max-width: 980px !important;
}
.rose{
  color: #ea555c;
}
#right_navbar_container{
  padding: 20px;
}
.nav_text{
  color: #797979;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  /* ...and now for the proper property */
  transition:.5s;
}
/*.nav_text:hover{
  color: #404040;
}*/
.active{
  color: #ea555c !important;
}
.image{
    width: 235px;
}
</style>

<div id="background">

@include('dashboard.navbar')



<div class="container start">
    <div class="row">
        <div class="col-md-3">
          <div id="right_navbar_container">
              <p class="nav_text"><strong>Danke, dass Du deine Identität verifizierst.</strong></p>
          </div>
          <div>
            <img class="image" src="http://upload.wikimedia.org/wikipedia/commons/7/7e/Muster_des_Personalausweises_VS.jpg" alt="Muster des Personalausweises VS.jpg">
          </div>
        </div>


<style type="text/css">

</style>

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
                    <p class="grey"><strong>Schritt 1</strong></p>
                </div>
                <div class="infobox_content">
                    <p class="rose">Bitte wähle aus, ob Du ein Bild von Deinem <strong>Führerschein</strong> oder <strong>Personalausweis</strong> <strong>hochladen</strong> oder eins mit deiner <strong>Webcam aufnehmen</strong> möchtest.<br> <strong>TIPP: </strong>Mit der Webcam aufnehmen dauert nur ein paar Sekunden.</p>
                    <hr>
                    <style type="text/css">
                        .width_fifthy{
                            width: 50%;
                            text-align: center;
                        }
                    </style>

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
                    <form method="POST" action="{{ action('SettingsVerificationController@postUploadImage', [Auth::user()->username]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input id="picture_form" type="hidden" name="picture">
                        <br>
                        <input class="btn btn-default" value="Speichern" type="submit">
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

        $('#picture_upload').on('change',function(){
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
                    };
                    FR.readAsDataURL(file);
                }
            }
        });

        $('form').submit(function(e){
            e.preventDefault();
            $('#picture_form').val($('.cropper > img').attr('src').replace(/^data\:image\/\w+\;base64\,/, ''));
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