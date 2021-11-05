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
                'part_type_id' => 0,
                'name' => 'specName',
                'data_type' => 'int',
                'details' => 'string'
            ]
        ], ['part_type_id', 'name'], ['data_type', 'details']);
    }
}
