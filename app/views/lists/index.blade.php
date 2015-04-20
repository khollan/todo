@extends('layouts.master')
@section('content')
<div class="col-xs-1">
</div>
<div class="col-xs-10 contain-all">
    <div class="list-item-container col-xs-12">
    </div>
    <div class="form-container col-xs-12" style="display:none">
        <div class="col-xs-1"></div>
        <form class="items-form col-xs-10" id="add-item" action="add_item" method="POST">
            <input type="text"  class="col-xs-12" id="input-item" name="item" placeholder="Add an item to the list!" autofocus>
            <input  type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
            hidefocus="true" tabindex="-1">
        </form>
        <div class="col-xs-1"></div>
    </div>
</div>
<div class="col-xs-1">
</div>
<button class="btn btn-default  btn-block show-form-button col-xs-10">
    <span class="glyphicon glyphicon-plus"></span>
    Add An Item To The List!
</button>
@stop
