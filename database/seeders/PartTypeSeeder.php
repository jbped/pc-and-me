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
                'type_short' => 'specName',
                'type_long' => 'int'
            ]
        ], ['type_short'], ['type_long']);
    }
}
