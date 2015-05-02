<div class="list-group">
    @foreach($addresses as $address)
        <div class="list-group-item">
            <div class="radio">
                <label>
                    <input value="{{ $address->id }}" value="{{ $address->id }}" name="{{ $name }}" data-toggle="radio" type="radio">
                    {{ $address->title }} <small></small>
                </label>
            </div>
        </div>
    @endforeach
</div>