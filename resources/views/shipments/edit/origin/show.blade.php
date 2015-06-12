<div class="form-group">
    <label for="origin-fake-input">Startort</label>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-arrow-circle-o-up"></i></span>
        <input id="origin-fake-input" value="{{ $origin->title }}" class="form-control" type="text" placeholder="{{ $origin->title }}" readonly>
        <span class="input-group-btn">
            <a id="origin-popover-btn" href="#" type="button" class="btn btn-behance" data-html="true" data-toggle="popover" title="{{ $origin->title }}" data-placement="bottom" data-content="<address>
        {{ $origin->street }}<br>
        {{ $origin->zip }} {{ $origin->city }}
    </address>"><i class="fa fa-info"></i></a>
        </span>
        <span class="input-group-btn">
            <a id="origin-popover-btn" data-placement="bottom" data-html="true" type="button" class="btn btn-behance" data-template='<div class="popover" style="width: 300px;" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="max-height: 350px; overflow: scroll;"></div></div>' data-toggle="popover" title="Deine Adressen" data-content='<p class="text-center"><i class="fa fa-refresh fa-spin"></i></p>'><i class="fa fa-pencil"></i></a>
        </span>
    </div>
</div>