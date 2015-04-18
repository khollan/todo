<?php

class ItemsTableSeeder extends Seeder {

    public function run()
    {
        if (count(DB::table('items')->get())) {
            $this->command->error('Items table not empty!');
            return;
        }

        $items = array(
            array(
                'id'         => 1,
                'item'  => 'Go to the post office!'
            ),
            array(
                 'id'         => 2,
                'item'  => 'Pick up Karen at 5!'
            ),
            array(
                 'id'         => 3,
                'item'  => 'Buy a gift for Stacy.'
            )

        );

        foreach ($items as $item) {
            $new = new Item();
            $new->id = $item['id'];
            $new->item = $item['item'];
            $new->save();
        }
    }
}
