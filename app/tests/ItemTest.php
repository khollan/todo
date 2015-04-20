<?php


class ItemTest extends TestCase {


    /**
     * The database table used by the model.
     *
     * @var string
     */

    public function testSaveItem()
    {
        //save new item
        $item = Item::saveItem('pass the test');
        //compare with expected values
        $this->assertEquals('1', $item->id);
        $this->assertEquals('pass the test', $item->item);
        $this->assertEquals('unchecked', $item->done);
    }

    public function testUpdateItem()
    {
        //save new item
        $item = Item::saveItem('pass the test');
        //update item done value to checked
        $item = Item::updateItem('1','checked');

        //find item done value and compare
        $find_item = Item::find('1');
        $done_status = $find_item->done;
        $this->assertEquals('checked', $done_status);

        //compare if updated item matches expected values
        $this->assertEquals('1', $item->id);
        $this->assertEquals('pass the test', $item->item);
        $this->assertEquals('checked', $item->done);
    }

    public function testDeleteItem()
    {
        //save new then delete item
        $item = Item::saveItem('pass the test');
        $item = Item::deleteItem('1');
        //search for item should return null
        $this->assertNull(Item::find('1'));
    }



}
