<?php

use Illuminate\Database\Seeder;

class SeedCategoryItemImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('categoryItemImages')->count('categoryItemId') > 0) {
            return ;
        }

        DB::table('categoryItemImages')->insert([
            ['categoryItemId' => 1,'imageOrder' => 1,'imageName' => 'CXXLT1.gif','status' => 'A'],
            ['categoryItemId' => 1,'imageOrder' => 2,'imageName' => 'GNCNC1.gif','status' => 'A'],
            ['categoryItemId' => 1,'imageOrder' => 3,'imageName' => 'Led-Red.gif','status' => 'A'],
            ['categoryItemId' => 1,'imageOrder' => 4,'imageName' => 'LEF-Yellow.gif','status' => 'A'],
            ['categoryItemId' => 1,'imageOrder' => 5,'imageName' => 'NV3JX1.gif','status' => 'A'],
            ['categoryItemId' => 1,'imageOrder' => 6,'imageName' => 'TORYB1.gif','status' => 'A'],
            ['categoryItemId' => 1,'imageOrder' => 7,'imageName' => 'UJOM1.gif','status' => 'A'],
            ['categoryItemId' => 11,'imageOrder' => 1,'imageName' => 'highpowerled.gif','status' => 'A'],
            ['categoryItemId' => 12,'imageOrder' => 1,'imageName' => 'reflector.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 1,'imageName' => 'smd-0603.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 2,'imageName' => 'smd-0805.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 3,'imageName' => 'smd-1204.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 4,'imageName' => 'smd-1206.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 5,'imageName' => 'smd-1210-double-color.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 6,'imageName' => 'smd-1210-three-color.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 7,'imageName' => 'smd-axial.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 8,'imageName' => 'smd-tr7.gif','status' => 'A'],
            ['categoryItemId' => 3,'imageOrder' => 9,'imageName' => 'smd-tr9.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 1,'imageName' => 'fpga-1.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 2,'imageName' => 'fpga-bar-array.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 3,'imageName' => 'fpga-bar.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 4,'imageName' => 'fpga-dual.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 5,'imageName' => 'fpga-four.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 6,'imageName' => 'fpga-led-dot.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 7,'imageName' => 'fpga-light-bar.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 8,'imageName' => 'fpga-single-digit-led.gif','status' => 'A'],
            ['categoryItemId' => 4,'imageOrder' => 9,'imageName' => 'fpga-three.gif','status' => 'A'],
            ['categoryItemId' => 13,'imageOrder' => 1,'imageName' => 'transmitting-black.gif','status' => 'A'],
            ['categoryItemId' => 13,'imageOrder' => 2,'imageName' => 'transmitting-infrared.gif','status' => 'A'],
            ['categoryItemId' => 13,'imageOrder' => 3,'imageName' => 'transmitting-photo-1.gif','status' => 'A'],
            ['categoryItemId' => 13,'imageOrder' => 4,'imageName' => 'transmitting-photo.gif','status' => 'A'],
            ['categoryItemId' => 13,'imageOrder' => 5,'imageName' => 'transmitting-receiver-1.gif','status' => 'A'],
            ['categoryItemId' => 13,'imageOrder' => 6,'imageName' => 'transmitting-receiver-2.gif','status' => 'A'],
            ['categoryItemId' => 13,'imageOrder' => 7,'imageName' => 'transmitting-receiver.gif','status' => 'A'],
            ['categoryItemId' => 14,'imageOrder' => 1,'imageName' => 'housing-1PCSLED.gif','status' => 'A'],
            ['categoryItemId' => 14,'imageOrder' => 2,'imageName' => 'housing-2PCSLED.gif','status' => 'A'],
            ['categoryItemId' => 14,'imageOrder' => 3,'imageName' => 'housing-4PCSLED.gif','status' => 'A'],
            ['categoryItemId' => 14,'imageOrder' => 4,'imageName' => 'housing-8PCSLED.gif','status' => 'A'],
        ]);
    }
}
