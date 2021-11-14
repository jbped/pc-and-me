<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('part_type_id')
                ->constrained();
            $table->string('name');
            $table->string('data_type'); // integer, string, text, boolean
            $table->string('unit_type')->nullable(); // mm, Mhz, Ghz, etc
            $table->string('details') // Help text to better understand the spec
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('part_specs');
    }
}
