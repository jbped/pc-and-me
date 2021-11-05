<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('part_specs')->upsert([
            [
                'part_type_id' => 1,
                'name' => 'Case Size',
                'data_type' => 'string',
                'details' => 'Mini-ITX, Mini ATX Tower, Mid ATX Tower, Full ATX Tower, XL/Super ATX Tower'
            ],
            [
                'part_type_id' => 1,
                'name' => 'Hard Drive Slots',
                'data_type' => 'int',
                'details' => 'Total slots available for full sized hard drives'
            ],
            [
                'part_type_id' => 1,
                'name' => '2.5 Inch Drive Slots',
                'data_type' => 'int',
                'details' => 'Total slots available for 2.5 inch hard drives or SSDs'
            ],
            [
                'part_type_id' => 1,
                'name' => 'Fan Count',
                'data_type' => 'int',
                'details' => 'Max fan count available in case'
            ],
            [
                'part_type_id' => 1,
                'name' => 'RGB',
                'data_type' => 'boolean',
                'details' => 'Is the case RGB ready?'
            ],
            [
                'part_type_id' => 1,
                'name' => 'Custom Water Cooling',
                'data_type' => 'boolean',
                'details' => 'Is the case Custom Water Cooling ready?'
            ],
            [
                'part_type_id' => 2,
                'name' => 'Air Cooled',
                'data_type' => 'boolean',
                'details' => 'Is the CPU cooler an air cooler?'
            ],
            [
                'part_type_id' => 2,
                'name' => 'Custom Water Cooling Loop',
                'data_type' => 'boolean',
                'details' => 'Is the water cooler a custom loop?'
            ],
            [
                'part_type_id' => 2,
                'name' => 'Cooler Fan Count',
                'data_type' => 'int',
                'details' => 'How many fans are attached to the CPU cooler/radiator?'
            ],
            [
                'part_type_id' => 2,
                'name' => 'Radiator Size',
                'data_type' => 'int',
                'details' => 'What is the water cooling radiator size in millimeters (mm)?'
            ],
            [
                'part_type_id' => 3,
                'name' => 'Physical Cores',
                'data_type' => 'int',
                'details' => 'How many Physical Cores does the CPU have?'
            ],
            [
                'part_type_id' => 3,
                'name' => 'Physical Core Count',
                'data_type' => 'int',
                'details' => 'How many Physical Cores does the CPU have?'
            ],
            [
                'part_type_id' => 3,
                'name' => 'Thread Count',
                'data_type' => 'int',
                'details' => 'How many threads does the CPU have?'
            ],
            [
                'part_type_id' => 3,
                'name' => 'Overclock-able',
                'data_type' => 'boolean',
                'details' => 'Can the CPU be overclocked?'
            ],
            [
                'part_type_id' => 3,
                'name' => 'Base Clock',
                'data_type' => 'int',
                'details' => 'CPU base clock frequency in gigahertz (GHz)'
            ],
            [
                'part_type_id' => 3,
                'name' => 'Boost Clock',
                'data_type' => 'int',
                'details' => 'CPU boost clock frequency potential in gigahertz (GHz)'
            ],
            [
                'part_type_id' => 3,
                'name' => 'L3 Cache',
                'data_type' => 'int',
                'details' => 'CPU L3 cache size in megabytes (mb)'
            ],
            [
                'part_type_id' => 4,
                'name' => 'Memory Size',
                'data_type' => 'int',
                'details' => 'GPU memory size in megabytes'
            ],
            [
                'part_type_id' => 4,
                'name' => 'Memory Type',
                'data_type' => 'string',
                'details' => 'GPU Memory type (GDDR5, GDDR6, etc)'
            ],
            [
                'part_type_id' => 4,
                'name' => 'Bus Type',
                'data_type' => 'string',
                'details' => 'GPU Bus type (PCIe 4.0 x 16, PCIe 3.0 x 16, etc.)'
            ],
            [
                'part_type_id' => 4,
                'name' => 'Boost Clock',
                'data_type' => 'int',
                'details' => 'GPU Boost Clock in Megahertz (MHz)'
            ],
            [
                'part_type_id' => 4,
                'name' => 'Memory Clock',
                'data_type' => 'int',
                'details' => 'GPU Memory Clock in Megahertz (MHz)'
            ],
            [
                'part_type_id' => 5,
                'name' => 'Size',
                'data_type' => 'string',
                'details' => 'Motherboard Form Factor Size (Mini-ITX, Micro ATX, ATX, Extended ATX, etc.)'
            ],
            [
                'part_type_id' => 5,
                'name' => 'Chipset',
                'data_type' => 'string',
                'details' => 'Motherboard Chipset (AMD B550, AMD X570, Intel Z690, Intel Z590, etc.)'
            ],
            [
                'part_type_id' => 5,
                'name' => 'Socket Type',
                'data_type' => 'string',
                'details' => 'Motherboard Socket Type (AM4, AM3+, LGA 1700, LGA 1200, etc.)'
            ],
            [
                'part_type_id' => 5,
                'name' => 'Memory Standard',
                'data_type' => 'string',
                'details' => 'Motherboard RAM standard (DDR3, DDR4, DDR5)'
            ],
            [
                'part_type_id' => 5,
                'name' => 'RAM Slots',
                'data_type' => 'int',
                'details' => 'Motherboard available RAM slots'
            ],
            [
                'part_type_id' => 5,
                'name' => 'Bluetooth',
                'data_type' => 'boolean',
                'details' => 'Motherboard built in bluetooth'
            ],
            [
                'part_type_id' => 5,
                'name' => 'Wi-Fi',
                'data_type' => 'boolean',
                'details' => 'Motherboard built in Wi-Fi'
            ],
            [
                'part_type_id' => 5,
                'name' => 'SATA Ports',
                'data_type' => 'int',
                'details' => 'Motherboard SATA ports for storage'
            ],
            [
                'part_type_id' => 6,
                'name' => 'Maximum Power',
                'data_type' => 'int',
                'details' => 'Maximum PSU Power Supply in watts'
            ],
            [
                'part_type_id' => 6,
                'name' => 'Energy Efficiency Rating',
                'data_type' => 'string',
                'details' => 'Bronze, Silver, Gold, Platinum, Titanium'
            ],
            [
                'part_type_id' => 6,
                'name' => 'Modular Type',
                'data_type' => 'string',
                'details' => 'Full Modular, Part Modular, Semi Modular, Non Modular'
            ],
            [
                'part_type_id' => 7,
                'name' => 'Memory Configuration',
                'data_type' => 'string',
                'details' => '4 x 8Gb, 2 x 16Gb, 1 x 32Gb'
            ],
            [
                'part_type_id' => 7,
                'name' => 'Memory Type',
                'data_type' => 'string',
                'details' => 'DDR3, DDR4, DDR5'
            ],
            [
                'part_type_id' => 7,
                'name' => 'Memory Speed',
                'data_type' => 'int',
                'details' => '2400, 3000, 3600, 4000, 5200, etc.'
            ],
            [
                'part_type_id' => 7,
                'name' => 'CAS Latency',
                'data_type' => 'int',
                'details' => 'Memory CAS Latency value'
            ],
            [
                'part_type_id' => 7,
                'name' => 'RAM Timing',
                'data_type' => 'string',
                'details' => 'Memory Timings (x-x-x-x)'
            ],
            [
                'part_type_id' => 8,
                'name' => 'SSD',
                'data_type' => 'boolean',
                'details' => 'Storage Type: SSD or HDD'
            ],
            [
                'part_type_id' => 8,
                'name' => 'Memory Capactiy',
                'data_type' => 'int',
                'details' => 'Storage Max Capacity in megabytes (mb)'
            ],
            [
                'part_type_id' => 8,
                'name' => 'SSD Type',
                'data_type' => 'string',
                'details' => '2.5", M.2, PCIe, etc.'
            ],
            [
                'part_type_id' => 8,
                'name' => 'HDD RPM',
                'data_type' => 'int',
                'details' => '5600, 7200, etc.'
            ],
        ], ['part_type_id', 'name'], ['data_type', 'details']);
    }
}
