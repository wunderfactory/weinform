<style type="text/css">
.size_box{
    height: 300px;
    text-align: center;
    border: 1px solid #00B3FF;
    padding: 10px;
}
input{
    position: relative;
    margin-top: 10px;
}
</style>
<div class="conainer">
    <div class="row">
        @foreach(Wundership\Size::all() as $size)
        <div class="col-md-3 size_box">
            <div class="">
                <div class="radio">
                    <label>
                        <i class="pe-7s-mail-open"></i>
                        <h4>{{ $size->name }}<h4>
                        <p>{{ $size->description }}</p>
                    </label>
                </div>
                <input value="{{ $size->id }}" data-toggle="radio" type="radio" name="{{ $name }}" {{ $selected == $size ? 'checked' : '' }}>
            </div>
        </div>
        @endforeach
    </div>
</div>