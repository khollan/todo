<?php

class ItemController extends BaseController {

    public function showList(){
        return View::make('lists.list');
    }
}
