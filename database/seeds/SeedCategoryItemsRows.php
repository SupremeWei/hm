<?php

use Illuminate\Database\Seeder;

class SeedCategoryItemsRows extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('categoryItems')->count('categoryId') > 0) {
            return ;
        }

        DB::table('categoryItems')->insert([
            ['categoryId' => 1,'title' => '插件式發光二極體','formType' => 'A', 'status' => 'A'],
            ['categoryId' => 2,'title' => 'DC-use Film Capacitors','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 1,'title' => '貼片型發光二極體','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 1,'title' => '七段顯示器','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 1,'title' => 'PLCC','formType' => 'A',  'status' => 'D'],
            ['categoryId' => 2,'title' => '貼片型電解電容','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 3,'title' => 'Round LED Lamps','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 3,'title' => 'Cylindrical LED Lamps','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 3,'title' => 'Rectangular LED Lamps','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 3,'title' => 'Triangular & Step LED Lamps','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 4,'title' => '1W & 3W type','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 4,'title' => 'Reflector type','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 1,'title' => '發射接收','formType' => 'A',  'status' => 'D'],
            ['categoryId' => 1,'title' => 'HOUSING','formType' => 'A',  'status' => 'A'],
            ['categoryId' => 5,'title' => 'Metallized Polyester Film','formType' => 'B',  'status' => 'A'],
            ['categoryId' => 5,'title' => 'Metallized Polypropylene Film','formType' => 'B',  'status' => 'A'],
            ['categoryId' => 5,'title' => 'Polyester Film','formType' => 'B',  'status' => 'A'],
            ['categoryId' => 5,'title' => 'Polypropylene Film','formType' => 'B',  'status' => 'A'],
        ]);
    }
}
