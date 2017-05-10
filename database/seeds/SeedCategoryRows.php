<?php

use Illuminate\Database\Seeder;

class SeedCategoryRows extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('category')->count('englishName') > 0) {
            return ;
        }

        DB::table('category')->insert([
            ['englishName' => 'Light Emitting Diode','chineseName' => '發光二極體', 'status' => 'A'],
            ['englishName' => 'Electrolytic Capacitor','chineseName' => '鋁質電解電容', 'status' => 'D'],
            ['englishName' => 'LEDs & LED Displays','chineseName' => 'LEDs & LED Displays', 'status' => 'D'],
            ['englishName' => 'High Power LED','chineseName' => 'High Power LED', 'status' => 'A'],
            ['englishName' => 'DC-Use Film Capacitors','chineseName' => 'DC-Use Film Capacitors', 'status' => 'A'],
        ]);
    }
}
