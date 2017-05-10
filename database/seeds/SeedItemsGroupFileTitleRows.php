<?php

use Illuminate\Database\Seeder;

class SeedItemsGroupFileTitleRows extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('itemsGroupFileTitle')->count('categoryItemId') > 0) {
            return ;
        }

        DB::table('itemsGroupFileTitle')->insert([
            ['categoryItemId' => 1,'title' => 'Description'],
            ['categoryItemId' => 1,'title' => 'Relative Document'],
            ['categoryItemId' => 3,'title' => 'Chip LED 0402'],
            ['categoryItemId' => 3,'title' => 'Chip LED 0603'],
            ['categoryItemId' => 3,'title' => 'Chip LED 0805'],
            ['categoryItemId' => 3,'title' => 'Chip LED 1206'],
            ['categoryItemId' => 3,'title' => 'Chip LED Right Angle Lens'],
            ['categoryItemId' => 3,'title' => 'Dual Color Chip LED'],
            ['categoryItemId' => 3,'title' => 'Tri-Color Chip LED'],
            ['categoryItemId' => 3,'title' => 'Infrared / Photo Chip LED'],
            ['categoryItemId' => 3,'title' => 'Axial LED'],
            ['categoryItemId' => 3,'title' => 'Relative Document'],
            ['categoryItemId' => 4,'title' => 'LED Displays'],
            ['categoryItemId' => 4,'title' => 'LED Light Bar & Bar Graph Arrays'],
            ['categoryItemId' => 4,'title' => 'LED Dot Matrix Displays'],
            ['categoryItemId' => 4,'title' => 'Relative Document'],
            ['categoryItemId' => 13,'title' => 'Infrared Series'],
            ['categoryItemId' => 13,'title' => 'Photo Interrupter'],
            ['categoryItemId' => 13,'title' => 'Receiver Module Series'],
            ['categoryItemId' => 13,'title' => 'Photo Coupler'],
            ['categoryItemId' => 13,'title' => 'Relative Document'],
            ['categoryItemId' => 14,'title' => 'LAMP WITH HOLDER ASSEMBLY'],
            ['categoryItemId' => 14,'title' => 'Relative Document'],
            ['categoryItemId' => 15,'title' => 'Metallized Polyester Film'],
            ['categoryItemId' => 16,'title' => 'Metallized Polypropylene Film'],
            ['categoryItemId' => 17,'title' => 'Polyester Film'],
            ['categoryItemId' => 18,'title' => 'Polypropylene Film'],
            ['categoryItemId' => 11,'title' => 'Description'],
            ['categoryItemId' => 12,'title' => 'Description'],
        ]);
    }
}
