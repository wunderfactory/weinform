<div class="list-group">
    @foreach(Wundership\Spec::all() as $spec)
        <div class="list-group-item">
            <div class="checkbox">
                <label>
                    <input value="{{ $spec->id }}" data-toggle="checkbox" type="checkbox" name="{{ $name }}[]" {{ $selected == $spec ? 'checked' : '' }}>
                    {{ $spec->name }} <small>{{ $spec->description }}</small>
                </label>
            </div>
        </div>
    @endforeach
</div>