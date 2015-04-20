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
                'item'  => 'First item on the list!',
                'done' => 'unchecked'
            ),
            array(
                 'id'         => 2,
                'item'  => 'Second item on the list!',
                'done' => 'unchecked'
            ),
            array(
                 'id'         => 3,
                'item'  => 'A completed item on the list',
                'done' => 'checked'
            ),
            array(
                 'id'         => 4,
                'item'  => 'Another completed item on the list',
                'done' => 'checked'
            ),
            array(
                 'id'         => 5,
                'item'  => 'This task is not completed',
                'done' => 'unchecked'
            )

        );

        foreach ($items as $item) {
            $new = new Item();
            $new->id = $item['id'];
            $new->item = $item['item'];
            $new->done = $item['done'];
            $new->save();
        }
    }
}
