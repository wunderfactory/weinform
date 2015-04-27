<style>
    .fa.pull-right {
        margin-left: 0.1em;
    }

    .date-picker,
    .date-container {
        position: relative;
        display: inline-block;
        width: 100%;
        color: rgb(75, 77, 78);
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .date-container {
        padding: 0px 40px;
    }
    .date-picker h2, .date-picker h4 {
        margin: 0px;
        padding: 0px;
        font-family: 'Roboto', sans-serif;
        font-weight: 200;
    }
    .date-container .date {
        text-align: center;
    }
    .date-picker span.fa {
        position: absolute;
        font-size: 4em;
        font-weight: 100;
        padding: 8px 0px 7px;
        cursor: pointer;
        top: 0px;
    }
    .date-picker span.fa[data-type="subtract"] {
        left: 0px;
    }
    .date-picker span.fa[data-type="add"] {
        right: 0px;
    }
    .date-picker span[data-toggle="calendar"] {
        display: block;
        position: absolute;
        top: -7px;
        right: 45px;
        font-size: 1em !important;
        cursor: pointer;
    }

    .date-picker .input-datepicker {
        display: none;
        position: absolute;
        top: 50%;
        margin-top: -17px;
        width:100%;
    }
    .date-picker .input-datepicker.show-input {
        display: table;
    }

    @media (min-width: 768px) and (max-width: 1010px) {
        .date-picker h2{
            font-size: 1.5em;
            font-weight: 400;
        }
        .date-picker h4 {
            font-size: 1.1em;
        }
        .date-picker span.fa {
            font-size: 3em;
        }
    }
</style>
<div class="date-picker"  data-date="" data-keyboard="true">
    <div class="date-container pull-left">
        <h4 class="weekday">Monday</h4>
        <h2 class="date">Februray 4th</h2>
        <h4 class="year pull-right">2014</h4>
    </div>
    <span data-toggle="datepicker" data-type="subtract" class="fa fa-angle-left"></span>
    <span data-toggle="datepicker" data-type="add" class="fa fa-angle-right"></span>
    <div class="input-group input-datepicker">
        <input name="{{ isset($name) ? $name : '' }}" type="text" class="form-control" data-format="DD.MM.YYYY" placeholder="DD.MM.YYYY">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
        </span>
    </div>
    <span data-toggle="calendar" class="fa fa-calendar"></span>
</div>