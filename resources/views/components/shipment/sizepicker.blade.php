<style type="text/css">
.size_box{
    text-align: center;
    border: 1px solid #00B3FF;
    padding: 3px;
}
input{
    position: relative;
}
</style>
<div class="conainer">
    <div class="row">
        @foreach(Wundership\Size::all() as $size)
        <div class="col-md-12 size_box">
            <div class="">
                <div class="radio">
                    <label>
                        <i class="pe-7s-mail-open"></i>
                        <h4>{{ $size->name }} <small>{{ $size->description }}</small><h4>
                    </label>
                    <input value="{{ $size->id }}" data-toggle="radio" type="radio" name="{{ $name }}" {{ $selected == $size ? 'checked' : '' }}>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>