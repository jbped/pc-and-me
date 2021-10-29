<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooler', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')
                ->constrained('builds')
                ->onDelete('cascade');
            $table->boolean('air_cooled')->default(true);
            $table->boolean('custom_loop')->default(false);
            $table->text('description')->nullable(); //intended for custom cooler
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
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
        Schema::dropIfExists('cooler');
    }
}
