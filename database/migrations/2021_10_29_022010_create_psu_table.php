<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')
                ->constrained('builds')
                ->onDelete('cascade');
            $table->string('brand'); // Seasonic, EVGA, etc
            $table->string('type')->nullable();  // ATX, SFX, etc
            $table->string('model');
            $table->integer('max_power'); // 750, 1000, 1200
            $table->string('energy_rating')->nullable(); // 80 Plus Gold, 80 Plus Platinum, etc
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
        Schema::dropIfExists('psu');
    }
}
