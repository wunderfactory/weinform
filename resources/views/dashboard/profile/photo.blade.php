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
                        <form method="POST" action="">
                            <input type="hidden" name="_token" value="_token">
                            <input type="hidden" name="picture">
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
        var imgData;
        $('.cropper > img').cropper({
            aspectRatio: 1,
            autoCropArea: 0.65,
            strict: false,
            guides: false,
            highlight: false,
            dragCrop: false,
            movable: false,
            resizable: false,
            crop: function(data) {
                imgData = data;
                // Output the result data for cropping image.
            }
        });
        $('form').submit(function(e){
            e.preventDefault();
            console.log($('.cropper > img').cropper('getCroppedCanvas').toDataURL("image/jpeg").replace(/^data\:image\/\w+\;base64\,/, ''));
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