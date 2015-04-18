<?php

class ItemController extends BaseController {

    public function showList(){
        return View::make('lists.index');
    }

    public function showItems(){
        $items = Item::all();

        $view = View::make('lists.show_items')
            ->with('items', $items);

        $view_contents = $view->render();
        return Response::json($view_contents);
    }

    public function addItem(){
        $items = Item::all();
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

            $view = View::make('lists.show_items')
                ->with('items', $items);
            $view_contents = $view->render();
            return Response::json($view_contents);
        }
    }


    public function updateItem(){
        $item_id = Input::get('item_id');
        $done = Input::get('done');

        $item = Item::find($item_id);
        $item->done = $done;
        $item->save();
    }

    public function deleteItem(){
        $items = Item::all();
        $item_id = Input::get('item_id');

        $item = Item::find($item_id);
        $item->delete();

        $view = View::make('lists.show_items')
                ->with('items', $items);
        $view_contents = $view->render();
        return Response::json($view_contents);
    }
}
