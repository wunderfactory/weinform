@extends('app')

@section('content')
<div id="background">

    @include('dashboard.navbar')

    <div class="container profile">
        <div class="row">
            @include('dashboard.profile.side-navbar')
            <!-- INFOBOXES -->

            <div class="col-md-8">
                <div class="infobox">
                    <div class="infobox_header">
                        <p class="grey"><strong>Profilfoto ändern</strong></p>
                    </div>
                    <div class="infobox_content">
                        <div class="cropper">
                            <img src="{{asset('images/backgrounds/sf.png')}}" alt="Picture">
                        </div>
                        <form method="POST" action="{{url('test')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input id="picture_form" type="hidden" name="picture">
                            <input type="submit">
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
        function dataURItoBlob(dataURI) {
            // convert base64/URLEncoded data component to raw binary data held in a string
            var byteString;
            if (dataURI.split(',')[0].indexOf('base64') >= 0)
                byteString = atob(dataURI.split(',')[1]);
            else
                byteString = unescape(dataURI.split(',')[1]);

            // separate out the mime component
            var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

            // write the bytes of the string to a typed array
            var ia = new Uint8Array(byteString.length);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }

            return new Blob([ia], {type:mimeString});
        }
        $('.cropper > img').cropper({
            aspectRatio: 1,
            autoCropArea: 0.65,
            strict: false,
            guides: false,
            highlight: false,
            dragCrop: false,
            movable: false,
            resizable: false
        });
        $('form').submit(function(e){
            e.preventDefault();
            $('#picture_form').val($('.cropper > img').cropper('getCroppedCanvas').toDataURL("image/jpeg").replace(/^data\:image\/\w+\;base64\,/, ''));
            this.submit();
        })
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
    </style>
    <link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet" />
@endsection