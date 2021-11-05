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
                'part_type_id' => 0,
                'manufacturer' => 'CompanyName',
                'product_name' => 'ProductName'
            ]
        ], ['part_type_id', 'product_name'], ['manufacturer']);
    }
}
