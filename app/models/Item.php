<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Item extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';


    public static function saveItem($item)
    {
        $new_item = new Item;
        $new_item->item = $item;
        $new_item->done = 'unchecked';
        $new_item->save();

        return $new_item;
    }

    public static function updateItem($item_id, $done)
    {
        $item = Item::find($item_id);
        $item->done = $done;
        $item->save();

        return $item;
    }

    public static function deleteItem($item_id)
    {
        $item = Item::find($item_id);
        $item->delete();

    }



}
