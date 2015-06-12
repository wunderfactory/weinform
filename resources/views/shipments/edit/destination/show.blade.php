<div class="form-group">
    <label for="destination-fake-input">Zielort</label>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-arrow-circle-o-down"></i></span>
        <input id="destination-fake-input" value="{{ $destination->title }}" class="form-control" type="text" placeholder="{{ $destination->title }}" data-trigger="hover" data-html="true" data-toggle="popover" title="{{ $destination->title }}" data-placement="bottom" data-content="<address>
        {{ $destination->street }}<br>
        {{ $destination->zip }} {{ $destination->city }}
    </address>" readonly>
        <span class="input-group-btn">
            <a id="destination-popover-btn" data-placement="bottom" data-html="true" type="button" class="btn btn-behance" data-template='<div class="popover" style="width: 300px;" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="max-height: 350px; overflow: scroll;"></div></div>' data-toggle="popover" title="Deine Adressen" data-content='<p class="text-center"><i class="fa fa-refresh fa-spin"></i></p>'><i class="fa fa-pencil"></i></a>
        </span>
    </div>
</div>