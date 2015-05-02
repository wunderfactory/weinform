<div class="list-group">
    @foreach(Wundership\Spec::all() as $spec)
        <div class="list-group-item">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="{{ $name }}" {{ $selected == $spec ? 'selected' : '' }}>
                    {{ $spec->name }}
                </label>
            </div>
        </div>
    @endforeach
</div>