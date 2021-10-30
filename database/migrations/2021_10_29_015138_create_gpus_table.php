<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')
                ->constrained('builds')
                ->onDelete('cascade');
            $table->string('manufacturer'); // AMD v nVidia (v Intel "Soon")
            $table->string('gpu_type'); // RTX 3090, RX 6900XT, etc
            $table->string('brand'); // Gigabyte, EVGA, MSI, ASUS, etc.
            $table->string('model'); // TUF Gaming OC, FTW3, Phantom Gaming, etc
            $table->boolean('overclocked')->default(false);
            $table->integer('core_voltage')->nullable();
            $table->integer('power_limit')->nullable();
            $table->integer('core_clock')->nullable();
            $table->integer('memory_clock')->nullable();
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
        Schema::dropIfExists('gpus');
    }
}
