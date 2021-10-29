<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')
                ->constrained('builds')
                ->onDelete('cascade');
            $table->string('manufacturer'); // AMD v Intel
            $table->string('model'); // R9 5600, I9 11900K
            $table->boolean('overclocked')->default(false);
            $table->integer('core_ratio')->nullable();
            $table->integer('core_voltage')->nullable();
            $table->integer('cache_ratio')->nullable();
            $table->integer('cache_voltage')->nullable();
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
        Schema::dropIfExists('cpu');
    }
}
