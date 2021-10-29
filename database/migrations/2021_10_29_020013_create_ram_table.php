<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ram', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')
                ->constrained('builds')
                ->onDelete('cascade');
            $table->string('manufacturer'); // Corsair, G. Skill, Crucial, etc.
            $table->string('memory_configuration'); // 1x32Gb, 2x16Gb, 4x8Gb
            $table->string('memory_type'); // DDR5, DDR4, DDR3
            $table->string('memory_speed'); // 3000, 3200, 3600, etc
            $table->string('cas_latency')->nullable();
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
        Schema::dropIfExists('ram');
    }
}
