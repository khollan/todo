@extends('layouts.master')

<button class="btn btn-default  btn-block show-form-button">Add An Item To The List!</button>
<div class="form-container" style="display:none">
    <form class="items-form" id="add-item" action="add_item" method="POST">
        <input type="text" id="input-item" name="item" placeholder="Add item to the list!">
        <input  type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
        hidefocus="true" tabindex="-1">
    </form>
</div>
<div class="list-item-container">
</div>
