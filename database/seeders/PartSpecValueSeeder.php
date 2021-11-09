<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSpecValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('part_spec_values')->upsert([
            [
                'part_id' => 1,
                'part_spec_id' => 1, // Case Size
                'int_value' => null,
                'string_value' => 'Mini-ITX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 1,
                'part_spec_id' => 2, // Hard Drive Count
                'int_value' => 1,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 1,
                'part_spec_id' => 3, // SSD Count
                'int_value' => 2,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 1,
                'part_spec_id' => 4, // Fan Count
                'int_value' => 2,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 1,
                'part_spec_id' => 5, // RGB Ready
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 1,
                'part_spec_id' => 6, // Water cooling friendly
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 2,
                'part_spec_id' => 1, // Case Size
                'int_value' => null,
                'string_value' => 'Micro ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 2,
                'part_spec_id' => 2, // Hard Drive Slots
                'int_value' => 1,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 2,
                'part_spec_id' => 3, // SSD Slots
                'int_value' => 2,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 2,
                'part_spec_id' => 4, // Fan Count
                'int_value' => 2,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 2,
                'part_spec_id' => 5, // RGB 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 2,
                'part_spec_id' => 6, // Water cooling friendly
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 3,
                'part_spec_id' => 1, // Case size
                'int_value' => null,
                'string_value' => 'Mid ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 3,
                'part_spec_id' => 2, // Hard Drive Slots
                'int_value' => 4,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 3,
                'part_spec_id' => 3, // SSD Slots
                'int_value' => 2,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 3,
                'part_spec_id' => 4, // Fan Count
                'int_value' => 4,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 3,
                'part_spec_id' => 5, // RGB
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 3,
                'part_spec_id' => 6, // Water Cooling Friendly
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 4,
                'part_spec_id' => 1, // Case size
                'int_value' => null,
                'string_value' => 'Full ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 4,
                'part_spec_id' => 2, // Hard Drive Slots
                'int_value' => 5,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 4,
                'part_spec_id' => 3, // SSD Slots
                'int_value' => 4,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 4,
                'part_spec_id' => 4, // Fan Count
                'int_value' => 6,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 4,
                'part_spec_id' => 5, // RGB
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 4,
                'part_spec_id' => 6, // Water Cooling Friendly
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 5,
                'part_spec_id' => 1, // Case size
                'int_value' => null,
                'string_value' => 'XL ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 5,
                'part_spec_id' => 2, // Hard Drive Slots
                'int_value' => 6,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 5,
                'part_spec_id' => 3, // SSD Slots
                'int_value' => 4,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 5,
                'part_spec_id' => 4, // Fan Count
                'int_value' => 8,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 5,
                'part_spec_id' => 5, // RGB
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 5,
                'part_spec_id' => 6, // Water Cooling Friendly
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 6,
                'part_spec_id' => 1, // Case size
                'int_value' => null,
                'string_value' => 'Mid ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 6,
                'part_spec_id' => 2, // Hard Drive Slots
                'int_value' => 3,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 6,
                'part_spec_id' => 3, // SSD Slots
                'int_value' => 4,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 6,
                'part_spec_id' => 4, // Fan Count
                'int_value' => 5,
                'string_value' => null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 6,
                'part_spec_id' => 5, // RGB
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 6,
                'part_spec_id' => 6, // Water Cooling Friendly
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 7,
                'part_spec_id' => 7, // Air cooler?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 7,
                'part_spec_id' => 9, // CPU Cooler Fan Count
                'int_value' => 1,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 8,
                'part_spec_id' => 7, // Air cooler?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 8,
                'part_spec_id' => 9, // CPU Cooler Fan Count
                'int_value' => 1,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 9,
                'part_spec_id' => 7, // Air cooler?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 9,
                'part_spec_id' => 9, // CPU Cooler Fan Count
                'int_value' => 1,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 10,
                'part_spec_id' => 7, // Air cooler?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 10,
                'part_spec_id' => 9, // CPU Cooler Fan Count
                'int_value' => 2,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 11,
                'part_spec_id' => 7, // Air cooler?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 11,
                'part_spec_id' => 8, // Custom water cooling loop?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 11,
                'part_spec_id' => 9, // CPU Cooler Fan Count
                'int_value' => 2,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 11,
                'part_spec_id' => 10, // CPU Cooler Radiator Size
                'int_value' => 240,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 12,
                'part_spec_id' => 7, // Air cooler?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 12,
                'part_spec_id' => 8, // Custom water cooling loop?
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 12,
                'part_spec_id' => 9, // CPU Cooler Fan Count
                'int_value' => 2,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 12,
                'part_spec_id' => 10, // CPU Cooler Radiator Size
                'int_value' => 240,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 13, // 3600X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 13, // 3600X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 12,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 13, // 3600X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 13, // 3600X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 13, // 3600X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 13, // 3600X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 13, // 3600X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 32,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 14, // 3700X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 14, // 3700X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 14, // 3700X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 14, // 3700X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 14, // 3700X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 14, // 3700X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 14, // 3700X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 32,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 15, // 3800X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 15, // 3800X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 15, // 3800X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 15, // 3800X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 15, // 3800X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.9,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 15, // 3800X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.5,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 15, // 3800X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 32,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 16, // 3900X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 12,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 16, // 3900X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 24,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 16, // 3900X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 16, // 3900X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 16, // 3900X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 16, // 3900X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.7,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 16, // 3900X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 64,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 17, // 5600X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 17, // 5600X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 12,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 17, // 5600X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 17, // 5600X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 17, // 5600X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.7,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 17, // 5600X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 17, // 5600X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 32,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 18, // 5800X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 18, // 5800X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 18, // 5800X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 18, // 5800X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 18, // 5800X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 18, // 5800X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.7,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 18, // 5800X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 32,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 19, // 5900X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 12,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 19, // 5900X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 24,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 19, // 5900X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 19, // 5900X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 19, // 5900X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.7,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 19, // 5900X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 19, // 5900X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 64,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 20, // 5950X
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 20, // 5950X
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 32,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 20, // 5950X
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 20, // 5950X
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 20, // 5950X
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 20, // 5950X
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.9,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 20, // 5950X
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 64,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 21, // 11600K
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 21, // 11600K
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 12,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 21, // 11600K
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 21, // 11600K
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 21, // 11600K
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.9,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 21, // 11600K
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.9,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 21, // 11600K
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 12,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 22, // 11700K
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 22, // 11700K
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 22, // 11700K
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 22, // 11700K
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 22, // 11700K
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 22, // 11700K
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 5.0,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 22, // 11700K
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 23, // 11900K
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 23, // 11900K
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 23, // 11900K
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 23, // 11900K
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 23, // 11900K
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.5,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 23, // 11900K
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 5.2,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 23, // 11900K
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 24, // 12600K
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 24, // 12600K
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 24, // 12600K
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 24, // 12600K
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 24, // 12600K
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.7,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 24, // 12600K
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 4.9,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 24, // 12600K
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 20,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 25, // 12700K
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 25, // 12700K
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 20,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 25, // 12700K
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 25, // 12700K
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 25, // 12700K
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 25, // 12700K
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 5.0,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 25, // 12700K
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 25,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 26, // 12900K
                'part_spec_id' => 11, // CPU Physical Core Count
                'int_value' => 8,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 26, // 12900K
                'part_spec_id' => 12, // CPU Thread Count
                'int_value' => 24,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 26, // 12900K
                'part_spec_id' => 13, // Overclockable
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 26, // 12900K
                'part_spec_id' => 14, // Integrated Graphics
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 26, // 12900K
                'part_spec_id' => 15, // Base Clock
                'int_value' => 3.2,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 26, // 12900K
                'part_spec_id' => 16, // Boost Clock
                'int_value' => 5.2,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 26, // 12900K
                'part_spec_id' => 17, // L3 Cache
                'int_value' => 30,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 27, // 3060
                'part_spec_id' => 18, // Memory Size
                'int_value' => 12288,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 27, // 3060
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 27, // 3060
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 16',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 27, // 3060
                'part_spec_id' => 21, // Base Clock
                'int_value' => 1320,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 27, // 3060
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 1777,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 27, // 3060
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 15000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 28, // 3070
                'part_spec_id' => 18, // Memory Size
                'int_value' => 8192,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 28, // 3070
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 28, // 3070
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 16',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 28, // 3070
                'part_spec_id' => 21, // Base Clock
                'int_value' => 1500,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 28, // 3070
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 1725,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 28, // 3070
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 14000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 29, // 3080
                'part_spec_id' => 18, // Memory Size
                'int_value' => 10240,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 29, // 3080
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6X',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 29, // 3080
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 16',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 29, // 3080
                'part_spec_id' => 21, // Base Clock
                'int_value' => 1440,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 29, // 3080
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 1710,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 29, // 3080
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 19000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 30, // 3090
                'part_spec_id' => 18, // Memory Size
                'int_value' => 24576,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 30, // 3090
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6X',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 30, // 3090
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 16',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 30, // 3090
                'part_spec_id' => 21, // Base Clock
                'int_value' => 1968,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 30, // 3090
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 2359,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 30, // 3090
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 14000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 31, // 6600XT
                'part_spec_id' => 18, // Memory Size
                'int_value' => 8192,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 31, // 6600XT
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 31, // 6600XT
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 8',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 31, // 6600XT
                'part_spec_id' => 21, // Base Clock
                'int_value' => 1395,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 31, // 6600XT
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 1695,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 31, // 6600XT
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 14000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 32, // 6700XT
                'part_spec_id' => 18, // Memory Size
                'int_value' => 12288,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 32, // 6700XT
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 32, // 6700XT
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 16',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 32, // 6700XT
                'part_spec_id' => 21, // Base Clock
                'int_value' => 2321,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 32, // 6700XT
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 2581,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 32, // 6700XT
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 16000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 33, // 6800XT
                'part_spec_id' => 18, // Memory Size
                'int_value' => 16384,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 33, // 6800XT
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 33, // 6800XT
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 16',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 33, // 6800XT
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 2250,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 33, // 6800XT
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 16000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 34, // 6900XT
                'part_spec_id' => 18, // Memory Size
                'int_value' => 16384,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 34, // 6900XT
                'part_spec_id' => 19, // Bus Type
                'int_value' => null,
                'string_value' =>  'GDDR6',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 34, // 6900XT
                'part_spec_id' => 20, // Interface
                'int_value' => null,
                'string_value' =>  'PCIe 4.0 x 16',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 34, // 6900XT
                'part_spec_id' => 22, // Boost Clock
                'int_value' => 2250,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 34, // 6900XT
                'part_spec_id' => 23, // Memory Clock
                'int_value' => 16000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 24, // Size
                'int_value' => null,
                'string_value' =>  'ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 25, // Chipset
                'int_value' => null,
                'string_value' =>  'X570',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 26, // Socket Type
                'int_value' => null,
                'string_value' =>  'AM4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 27, // Memory Standard
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 28, // RAM Slots
                'int_value' => 4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 29, // Bluetooth 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 30, // Wi-Fi 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 35, // Aorus X570 Master
                'part_spec_id' => 31, // SATA Ports
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 24, // Size
                'int_value' => null,
                'string_value' =>  'ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 25, // Chipset
                'int_value' => null,
                'string_value' =>  'B550',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 26, // Socket Type
                'int_value' => null,
                'string_value' =>  'AM4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 27, // Memory Standard
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 28, // RAM Slots
                'int_value' => 4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 29, // Bluetooth 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 30, // Wi-Fi 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 36, // ROG Strix B550-F Gaming
                'part_spec_id' => 31, // SATA Ports
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 24, // Size
                'int_value' => null,
                'string_value' =>  'ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 25, // Chipset
                'int_value' => null,
                'string_value' =>  'B550',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 26, // Socket Type
                'int_value' => null,
                'string_value' =>  'AM4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 27, // Memory Standard
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 28, // RAM Slots
                'int_value' => 4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 29, // Bluetooth 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 30, // Wi-Fi 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 37, // MAG B550 Tomahawk
                'part_spec_id' => 31, // SATA Ports
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 24, // Size
                'int_value' => null,
                'string_value' =>  'ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 25, // Chipset
                'int_value' => null,
                'string_value' =>  'Z590',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 26, // Socket Type
                'int_value' => null,
                'string_value' =>  'LGA 1200',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 27, // Memory Standard
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 28, // RAM Slots
                'int_value' => 4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 29, // Bluetooth 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 30, // Wi-Fi 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 38, // Aorus Z590 Master
                'part_spec_id' => 31, // SATA Ports
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 24, // Size
                'int_value' => null,
                'string_value' =>  'ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 25, // Chipset
                'int_value' => null,
                'string_value' =>  'Z590',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 26, // Socket Type
                'int_value' => null,
                'string_value' =>  'LGA 1200',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 27, // Memory Standard
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 28, // RAM Slots
                'int_value' => 4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 29, // Bluetooth 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 30, // Wi-Fi 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 39, // ROG Strix Z590-E Gaming
                'part_spec_id' => 31, // SATA Ports
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 24, // Size
                'int_value' => null,
                'string_value' =>  'ATX',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 25, // Chipset
                'int_value' => null,
                'string_value' =>  'Z490',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 26, // Socket Type
                'int_value' => null,
                'string_value' =>  'LGA 1200',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 27, // Memory Standard
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 28, // RAM Slots
                'int_value' => 4,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 29, // Bluetooth 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 30, // Wi-Fi 
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 40, // PRO Z490-A Pro
                'part_spec_id' => 31, // SATA Ports
                'int_value' => 6,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 41, // RMx Series RM850x
                'part_spec_id' => 32, // Maximum Power
                'int_value' => 850,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 41, // RMx Series RM850x
                'part_spec_id' => 33, // Energy Efficiency Rating
                'int_value' => null,
                'string_value' =>  'gold',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 41, // RMx Series RM850x
                'part_spec_id' => 34, // Modular Type
                'int_value' => null,
                'string_value' =>  'full modular',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 42, // TUF Gaming 650W
                'part_spec_id' => 32, // Maximum Power
                'int_value' => 650,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 42, // TUF Gaming 650W
                'part_spec_id' => 33, // Energy Efficiency Rating
                'int_value' => null,
                'string_value' =>  'bronze',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 42, // TUF Gaming 650W
                'part_spec_id' => 34, // Modular Type
                'int_value' => null,
                'string_value' =>  'non-modular',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 43, // SuperNOVA 1000 G6
                'part_spec_id' => 32, // Maximum Power
                'int_value' => 1000,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 43, // SuperNOVA 1000 G6
                'part_spec_id' => 33, // Energy Efficiency Rating
                'int_value' => null,
                'string_value' =>  'gold',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 43, // SuperNOVA 1000 G6
                'part_spec_id' => 34, // Modular Type
                'int_value' => null,
                'string_value' =>  'full modular',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 44, // Ripjaws V Series
                'part_spec_id' => 35, // Memory Configuration
                'int_value' => null,
                'string_value' =>  '16GB (2 x 8GB)',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 44, // Ripjaws V Series
                'part_spec_id' => 36, // Memory Type
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 44, // Ripjaws V Series
                'part_spec_id' => 37, // Memory Speed
                'int_value' => 3600,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 44, // Ripjaws V Series
                'part_spec_id' => 38, // CAS Latency
                'int_value' => 18,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 44, // Ripjaws V Series
                'part_spec_id' => 39, // RAM Timing
                'int_value' => null,
                'string_value' =>  '18-22-22-42',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 45, // Corsair Vengeance
                'part_spec_id' => 35, // Memory Configuration
                'int_value' => null,
                'string_value' =>  '32GB (2 x 16GB)',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 45, // Corsair Vengeance
                'part_spec_id' => 36, // Memory Type
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 45, // Corsair Vengeance
                'part_spec_id' => 37, // Memory Speed
                'int_value' => 3200,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 45, // Corsair Vengeance
                'part_spec_id' => 38, // CAS Latency
                'int_value' => 16,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 45, // Corsair Vengeance
                'part_spec_id' => 39, // RAM Timing
                'int_value' => null,
                'string_value' =>  '16-18-18-36',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 46, // Trident Z
                'part_spec_id' => 35, // Memory Configuration
                'int_value' => null,
                'string_value' =>  '64GB (4 x 16GB)',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 46, // Trident Z
                'part_spec_id' => 36, // Memory Type
                'int_value' => null,
                'string_value' =>  'DDR4',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 46, // Trident Z
                'part_spec_id' => 37, // Memory Speed
                'int_value' => 3600,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 46, // Trident Z
                'part_spec_id' => 38, // CAS Latency
                'int_value' => 18,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 46, // Trident Z
                'part_spec_id' => 39, // RAM Timing
                'int_value' => null,
                'string_value' =>  '18-22-22-42',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 47, // Generic 7200 rpm HDD
                'part_spec_id' => 40, // SSD
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 47, // Generic 7200 rpm HDD
                'part_spec_id' => 41, // Memory Capacity
                'int_value' => 4096,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 47, // Generic 7200 rpm HDD
                'part_spec_id' => 43, // HDD RPM
                'int_value' => 7200,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 48, // Generic 5600 rpm HDD
                'part_spec_id' => 40, // SSD
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => false
            ],
            [
                'part_id' => 48, // Generic 5600 rpm HDD
                'part_spec_id' => 41, // Memory Capacity
                'int_value' => 2048,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 48, // Generic 5600 rpm HDD
                'part_spec_id' => 43, // HDD RPM
                'int_value' => 5600,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 49, // Generic 2.5" SSD
                'part_spec_id' => 40, // SSD
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 49, // Generic 2.5" SSD
                'part_spec_id' => 41, // Memory Capacity
                'int_value' => 1024,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 49, // Generic 2.5" SSD
                'part_spec_id' => 42, // SDD Type
                'int_value' => null,
                'string_value' =>  '2.5 inch',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 50, // Generic M.2 SSD
                'part_spec_id' => 40, // SSD
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 50, // Generic M.2 SSD
                'part_spec_id' => 41, // Memory Capacity
                'int_value' => 512,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 50, // Generic M.2 SSD
                'part_spec_id' => 42, // SDD Type
                'int_value' => null,
                'string_value' =>  'M.2 NVME',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 51, // Generic PCIe SSD
                'part_spec_id' => 40, // SSD
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => true
            ],
            [
                'part_id' => 51, // Generic PCIe SSD
                'part_spec_id' => 41, // Memory Capacity
                'int_value' => 4096,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 51, // Generic PCIe SSD
                'part_spec_id' => 42, // SDD Type
                'int_value' => null,
                'string_value' =>  'PCIe',
                'text_value' => null,
                'boolean_value' => null
            ],
            [
                'part_id' => 47, // Product
                'part_spec_id' => 40, // Spec
                'int_value' => null,
                'string_value' =>  null,
                'text_value' => null,
                'boolean_value' => null
            ],
        ], ['part_id', 'part_spec_id'], ['int_value', 'string_value', 'boolean_value', 'text_value']);
    }
}
