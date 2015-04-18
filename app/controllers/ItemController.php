<?php

class ItemController extends BaseController {

    public function showList(){
        return View::make('lists.index');
    }

    public function openForm(){
        $view = View::make('lists.show_items');
        $view_contents = $view->render();
        return Response::json($view_contents);
    }

    public function addItem(){
        return Response::json('ok');
    }


}
