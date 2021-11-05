<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('part_types')->upsert([
            [
                'type_short' => 'case',
                'type_long' => 'Computer Case',
                'descriptor' => 'Computer Case'
            ],
            [
                'type_short' => 'cooler',
                'type_long' => 'CPU Cooler',
                'descriptor' => 'CPU Cooler (Air Cooler, AIO, Custom liquid cooling)'
            ],
            [
                'type_short' => 'cpu',
                'type_long' => 'Central Processing Unit',
                'descriptor' => 'Processor'
            ],
            [
                'type_short' => 'gpu',
                'type_long' => 'Graphics Processing Unit',
                'descriptor' => 'Graphics/Video Card'
            ],
            [
                'type_short' => 'mobo',
                'type_long' => 'Motherboard',
                'descriptor' => 'Motherboard'
            ],
            [
                'type_short' => 'psu',
                'type_long' => 'Power Supply Unit',
                'descriptor' => 'Power Supply'
            ],
            [
                'type_short' => 'ram',
                'type_long' => 'Random Access Memory',
                'descriptor' => 'Memory'
            ],
            [
                'type_short' => 'storage',
                'type_long' => 'Computer Storage',
                'descriptor' => 'Computer Storage (HDD/SSD)'
            ],
        ], ['type_short'], ['type_long']);
    }
}
