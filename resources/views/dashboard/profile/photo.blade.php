@extends('app')

@section('content')




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

@endsection