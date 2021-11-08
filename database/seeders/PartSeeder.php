<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('parts')->upsert([
            [
                'part_type_id' => 1,
                'manufacturer' => 'Gen Case',
                'product_name' => 'Generic Mini ITX Case'
            ],
            [
                'part_type_id' => 1,
                'manufacturer' => 'Gen Case',
                'product_name' => 'Generic Micro ATX Case'
            ],
            [
                'part_type_id' => 1,
                'manufacturer' => 'Gen Case',
                'product_name' => 'Generic Mid ATX Case'
            ],
            [
                'part_type_id' => 1,
                'manufacturer' => 'Gen Case',
                'product_name' => 'Generic Full ATX Case'
            ],
            [
                'part_type_id' => 1,
                'manufacturer' => 'Gen Case',
                'product_name' => 'Generic XL ATX Case'
            ],
            [
                'part_type_id' => 1,
                'manufacturer' => 'Fractal',
                'product_name' => 'Meshify C Mini'
            ],
            [
                'part_type_id' => 2,
                'manufacturer' => 'Gen Cooler',
                'product_name' => 'Generic Multi Socket CPU Air-Cooler'
            ],
            [
                'part_type_id' => 2,
                'manufacturer' => 'AMD',
                'product_name' => 'Stock AMD Air-Cooler'
            ],
            [
                'part_type_id' => 2,
                'manufacturer' => 'Intel',
                'product_name' => 'Stock Intel Air-Cooler'
            ],
            [
                'part_type_id' => 2,
                'manufacturer' => 'Noctua',
                'product_name' => 'NH-D15 SSO2 D-Type'
            ],
            [
                'part_type_id' => 2,
                'manufacturer' => 'CoolerMaster',
                'product_name' => 'MasterLiquid ML240L RGB V2'
            ],
            [
                'part_type_id' => 2,
                'manufacturer' => 'be quiet!',
                'product_name' => 'Pure Loop 240mm All in One'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '3600X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '3700X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '3800X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '3900X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '5600X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '5800X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '5900X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'AMD',
                'product_name' => '5950X'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'Intel',
                'product_name' => '11600K'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'Intel',
                'product_name' => '11700K'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'Intel',
                'product_name' => '11900K'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'Intel',
                'product_name' => '12600K'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'Intel',
                'product_name' => '12700K'
            ],
            [
                'part_type_id' => 3,
                'manufacturer' => 'Intel',
                'product_name' => '12900K'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'Nvidia',
                'product_name' => '3060'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'Nvidia',
                'product_name' => '3070'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'Nvidia',
                'product_name' => '3080'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'Nvidia',
                'product_name' => '3090'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'AMD',
                'product_name' => '6600XT'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'AMD',
                'product_name' => '6700XT'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'AMD',
                'product_name' => '6800XT'
            ],
            [
                'part_type_id' => 4,
                'manufacturer' => 'AMD',
                'product_name' => '6900XT'
            ],
            [
                'part_type_id' => 5,
                'manufacturer' => 'Gigabytye',
                'product_name' => 'Aorus X570 Master'
            ],
            [
                'part_type_id' => 5,
                'manufacturer' => 'ASUS',
                'product_name' => 'ROG Strix B550-F Gaming'
            ],
            [
                'part_type_id' => 5,
                'manufacturer' => 'MSI',
                'product_name' => 'MAG B550 Tomahawk'
            ],
            [
                'part_type_id' => 5,
                'manufacturer' => 'Gigabytye',
                'product_name' => 'Aorus Z590 Master'
            ],
            [
                'part_type_id' => 5,
                'manufacturer' => 'ASUS',
                'product_name' => 'ROG Strix Z590-E Gaming'
            ],
            [
                'part_type_id' => 5,
                'manufacturer' => 'MSI',
                'product_name' => 'PRO Z490-A Pro'
            ],
            [
                'part_type_id' => 6,
                'manufacturer' => 'Corsair',
                'product_name' => 'RMx Series RM850x'
            ],
            [
                'part_type_id' => 6,
                'manufacturer' => 'ASUS',
                'product_name' => 'TUF Gaming 650W'
            ],
            [
                'part_type_id' => 6,
                'manufacturer' => 'EVGA',
                'product_name' => 'SuperNOVA 1000 G6'
            ],
            [
                'part_type_id' => 7,
                'manufacturer' => 'G.SKILL',
                'product_name' => 'Ripjaws V Series'
            ],
            [
                'part_type_id' => 7,
                'manufacturer' => 'Corsair',
                'product_name' => 'Vengeance'
            ],
            [
                'part_type_id' => 7,
                'manufacturer' => 'G.SKILL',
                'product_name' => 'Trident Z'
            ],
            [
                'part_type_id' => 8,
                'manufacturer' => 'GenMem',
                'product_name' => 'Generic 7200 rpm HDD'
            ],
            [
                'part_type_id' => 8,
                'manufacturer' => 'GenMem',
                'product_name' => 'Generic 5600 rpm HDD'
            ],
            [
                'part_type_id' => 8,
                'manufacturer' => 'GenMem',
                'product_name' => 'Generic 2.5" SSD'
            ],
            [
                'part_type_id' => 8,
                'manufacturer' => 'GenMem',
                'product_name' => 'Generic M.2 SSD'
            ],
            [
                'part_type_id' => 8,
                'manufacturer' => 'GenMem',
                'product_name' => 'Generic PCIe SSD'
            ],
        ], ['part_type_id', 'product_name'], ['manufacturer']);
    }
}
