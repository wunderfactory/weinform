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
            <label for="exampleInputEmail2">Von</label>
            <input name="filter[via][]" value="{{ $filter['via'][0] }}" type="text" class="form-control" id="exampleInputEmail2" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">über</label>
            <input name="filter[via][]" value="{{ $filter['via'][1] }}" type="text" class="form-control" id="exampleInputEmail2" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">über</label>
            <input name="filter[via][]" value="{{ $filter['via'][2] }}" type="text" class="form-control" id="exampleInputEmail2" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">nach</label>
            <input name="filter[via][]" value="{{ $filter['via'][3] }}" type="text" class="form-control" id="exampleInputEmail2" placeholder="">
        </div>
        <div class="form-group">
            <label for="day-filter">am</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a href="#" onClick="document.getElementById('day-filter').value = 'any'" class="btn btn-default" id="basic-addon1">Egal</a>
                </span>
                <input id="day-filter" value="{{ $filter['day'] }}" name="filter[day]" type="text" class="form-control" placeholder="01.01.1970">
            </div>
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
                        <li><input type="checkbox" name="filter[specs][]" value="{{ $spec->id }}" id="specs-filter-{{ $spec->id }}" {{ in_array($spec->id, $filter['specs']) ? 'checked' : '' }}><label for="specs-filter-{{ $spec->id }}">{{ $spec->name }}</label></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="sort-filter-buttton">nach</label>
            <select id="sort-filter-buttton" name="filter[sort]" class="form-control">
                <option value="price desc" {{ $filter['sort'] == 'price desc' ? 'selected' : '' }}>Preis absteigend</option>
                <option value="price asc" {{ $filter['sort'] == 'price asc' ? 'selected' : '' }}>Preis aufsteigend</option>
                <option value="collect asc" {{ $filter['sort'] == 'collect asc' ? 'selected' : '' }}>Frühere Abholung zuerst</option>
                <option value="collect desc" {{ $filter['sort'] == 'collect desc' ? 'selected' : '' }}>Spätere Abholung zuerst</option>
                <option value="size asc" {{ $filter['sort'] == 'size asc' ? 'selected' : '' }}>Größe aufsteigend</option>
                <option value="size desc" {{ $filter['sort'] == 'size desc' ? 'selected' : '' }}>Größe absteigend</option>
            </select>
        </div>
    </div>
</form>