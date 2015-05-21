<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}">
<style>
    .filter-inline-form {
        margin: 2px;
    }
</style>
<form>
    <div class="filter-inline-form form-inline">
        <div class="form-group">
            <label for="type-filter-buttton">Zeige</label>
            <select id="type-filter-buttton" name="filter[type]" class="form-control">
                <option value="all" {{ $filter['type'] == 'all' ? 'selected' : '' }}>Alle Sendungen</option>
                <option value="immediate" {{ $filter['type'] == 'immediate' ? 'selected' : '' }}>Mussweg</option>
                <option value="auction" {{ $filter['type'] == 'auction' ? 'selected' : '' }}>Auktion</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">von</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">nach</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
        </div>
        <div class="form-group">
            <label for="day-filter">am</label>
            <input id="day-filter" value="" name="filter[day]" type="text" class="form-control" placeholder="01.01.1970">
        </div>
        <button type="submit" class="btn btn-default">Suchen</button>
    </div>

    <div class="filter-inline-form form-inline">
        <div class="form-group">
            <label for="size-filter-button">Größe</label>
            <div class="btn-group">
                <button id="size-filter-button" data-toggle="dropdown" class="btn dropdown-toggle"  data-placeholder="false">Auswählen <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach($sizes as $size)
                    <li><input name="filter[sizes][]" value="{{ $size->id }}" type="checkbox" id="size-filter-{{ $size->id }}" {{ in_array($size->id, $filter['sizes']) ? 'checked' : '' }}><label for="size-filter-{{ $size->id }}">{{ $size->name }}</label></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="specs-filter-button">Außer Besonderheiten</label>
            <div class="btn-group">
                <button id="specs-filter-button" data-toggle="dropdown" class="btn dropdown-toggle"  data-placeholder="false">Auswählen <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach($specs as $spec)
                        <li><input type="checkbox" name="filter[specs][]" value="{{ $spec->id }}" id="specs-filter-{{ $spec->id }}" {{ in_array($size->id, $filter['specs']) ? 'checked' : '' }}><label for="specs-filter-{{ $spec->id }}">{{ $spec->name }}</label></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">nach</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
        </div>
    </div>
</form>
<pre><?php print_r($filter) ?></pre>