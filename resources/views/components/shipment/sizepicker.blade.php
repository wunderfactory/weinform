<div class="list-group">
    @foreach(Wundership\Size::all() as $size)
        <div class="list-group-item">
            <div class="radio">
                <label>
                    <input value="{{ $size->id }}" data-toggle="radio" type="radio" name="{{ $name }}" {{ $selected == $size ? 'checked' : '' }}>
                    {{ $size->name }} <small>{{ $size->description }}</small>
                </label>
            </div>
        </div>
    @endforeach
</div>