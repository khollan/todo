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
        $item = Input::get('data');

        $validator = Validator::make(
            array(
                'item' => $item
            ),
            array(
                'item' => 'required|min:2|max:50'
            )
        );

        if ( $validator->fails() ) {
            $messages = $validator->messages();
            return Response::json([
                'success'=>false,
                'error'=>$validator->errors()->toArray()
            ]);
        }
        else{

            $save_item = Item::saveItem($item);
            return Response::json([
                'success'=>true
            ]);
        }
    }
}
