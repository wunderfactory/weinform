<div class="list-group">
    @foreach(Wundership\Size::all() as $size)
        <div class="list-group-item">
            <div class="radio">
                <label>
                    <input type="radio" name="{{ $name }}">
                    {{ $size->name }}
                </label>
            </div>
        </div>
    @endforeach
</div>