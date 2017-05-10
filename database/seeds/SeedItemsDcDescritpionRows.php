<?php

use Illuminate\Database\Seeder;

class SeedItemsDcDescritpionRows extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('itemsDCDescription')->count('itemDescriptionId') > 0) {
            return ;
        }

        DB::table('itemsDCDescription')->insert([
            ['itemDescriptionId' => 78, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Resin dipped, Radial, Miniature size Pitch = 5.0 mm', 'capacitanceRange' => '0.01 ~ 1.0 (UF)', 'ratedVoltageRange' => '50 ~ 100 (VDC)', 'imageUrl' => 'dc-use/mmt.jpg'],
            ['itemDescriptionId' => 79, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Resin dipped, Radial, Miniature size Pitch = 7.5 mm', 'capacitanceRange' => '0.01 ~ 1.0 (UF)', 'ratedVoltageRange' => '50 ~ 250 (VDC)', 'imageUrl' => 'dc-use/em7.gif'],
            ['itemDescriptionId' => 80, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Resin dipped, Radial', 'capacitanceRange' => '0.01 ~ 10.0 (UF)', 'ratedVoltageRange' => '100 ~ 630 (VDC)', 'imageUrl' => 'dc-use/mef.gif'],
            ['itemDescriptionId' => 81, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Resin dipped, Radial, Miniature size', 'capacitanceRange' => '0.01 ~ 10.0 (UF)', 'ratedVoltageRange' => '100 ~ 1000 (VDC)', 'imageUrl' => 'dc-use/dme.gif'],
            ['itemDescriptionId' => 82, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Encased, Radial, Miniature size Pitch = 5 mm', 'capacitanceRange' => '0.001 ~ 1.0 (UF)', 'ratedVoltageRange' => '50 ~ 250 (VDC)', 'imageUrl' => 'dc-use/mem.gif'],
            ['itemDescriptionId' => 83, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Wrapped and Filled, Flat Oval, Axial', 'capacitanceRange' => '0.022 ~ 10.0(UF)', 'ratedVoltageRange' => '100 ~ 630 (VDC)', 'imageUrl' => 'dc-use/mea.gif'],
            ['itemDescriptionId' => 84, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Wrapped and Filled, Tubular Axial', 'capacitanceRange' => '0.01 ~ 15.0 (UF)', 'ratedVoltageRange' => '100 ~ 630 (VDC)', 'imageUrl' => 'dc-use/met.gif'],
            ['itemDescriptionId' => 85, 'dielectric' => 'Metallized Polyester Film', 'description' => 'Y2 Class Flame Retardant  Encased, Radial,UL, CSA, VDE, SEV, Semko, Nemko,Demko,', 'capacitanceRange' => '0.01 ~ .047 (UF)', 'ratedVoltageRange' => '250 (VAC)', 'imageUrl' => 'dc-use/mey.gif'],
            ['itemDescriptionId' => 86, 'dielectric' => 'Metallized Polypropylene Film', 'description' => 'Resin dipped, Radial', 'capacitanceRange' => '0.01 ~ 4.7 (UF)', 'ratedVoltageRange' => '100 ~ 630 (VDC)', 'imageUrl' => 'dc-use/mpp.gif'],
            ['itemDescriptionId' => 87, 'dielectric' => 'Metallized Polypropylene Film', 'description' => 'Resin dipped, Radial, Miniature size', 'capacitanceRange' => '0.001 ~ 0.068 (UF)', 'ratedVoltageRange' => '1000 ~ 2000(VDC)', 'imageUrl' => 'dc-use/mpm.gif'],
            ['itemDescriptionId' => 88, 'dielectric' => 'Metallized Polypropylene Film', 'description' => 'Wrapped and Filled, Tubular, Axial', 'capacitanceRange' => '0.01 ~ 10.0 (UF)', 'ratedVoltageRange' => '100 ~ 630 (VAC)', 'imageUrl' => 'dc-use/mpt.gif'],
            ['itemDescriptionId' => 89, 'dielectric' => 'Metallized Polypropylene Film', 'description' => 'Wrapped and Filled, Flat Oval Axial', 'capacitanceRange' => '0.1 ~ 10.0 (UF)', 'ratedVoltageRange' => '100 ~ 630 (VAC)', 'imageUrl' => 'dc-use/mpa.gif'],
            ['itemDescriptionId' => 90, 'dielectric' => 'Metallized Polypropylene Film', 'description' => 'X1 Class Flame Retardant Encased, Radial, UL, CSA, VDE, SEV, Semko, Nemko, Demko', 'capacitanceRange' => '0.0047 ~ 4.7 (UF)', 'ratedVoltageRange' => '300 (VAC)', 'imageUrl' => 'dc-use/mpx1.gif'],
            ['itemDescriptionId' => 91, 'dielectric' => 'Metallized Polypropylene Film', 'description' => 'X2 Class Flame Retardant Encased, Radial, UL, CSA, VDE, SEV, Semko, Nemko, Demko', 'capacitanceRange' => '0.001 ~ 1.0 (UF)', 'ratedVoltageRange' => '250 ~275 (VAC)', 'imageUrl' => 'dc-use/mpx2.gif'],
            ['itemDescriptionId' => 92, 'dielectric' => 'Polyester Film', 'description' => 'Resin dipped, Inductive, Radial', 'capacitanceRange' => '0.001 ~ 0.47 (UF)', 'ratedVoltageRange' => '50 ~ 100 (VDC)', 'imageUrl' => 'dc-use/pei.gif'],
            ['itemDescriptionId' => 93, 'dielectric' => 'Polyester Film', 'description' => 'Resin dipped, Eetal Foil, Non-Inductive, Radial', 'capacitanceRange' => '0.001 ~ 0.47 (UF)', 'ratedVoltageRange' => '50 ~ 200 (VDC)', 'imageUrl' => 'dc-use/pen.gif'],
            ['itemDescriptionId' => 94, 'dielectric' => 'Polypropylene Film', 'description' => 'Resin dipped, Extended Foil, Non-inductive', 'capacitanceRange' => '0.001 ~ 0.47 (UF)', 'ratedVoltageRange' => '50 ~ 1000 (VDC)', 'imageUrl' => 'dc-use/ppn.gif'],
            ['itemDescriptionId' => 95, 'dielectric' => 'Polypropylene Film', 'description' => 'Resin dipped, Extended Foil, Radial', 'capacitanceRange' => '0.01 ~ 0.47(UF)', 'ratedVoltageRange' => '1200 ~ 3000 (VDC)', 'imageUrl' => 'dc-use/pps.gif'],
            ['itemDescriptionId' => 96, 'dielectric' => 'Polypropylene Film', 'description' => 'Wrapped and Filled, Tubular, Axial', 'capacitanceRange' => '0.001 ~ 0.47(UF)', 'ratedVoltageRange' => '50 ~ 630 (VDC)', 'imageUrl' => 'dc-use/ppt.gif'],
        ]);
    }
}
