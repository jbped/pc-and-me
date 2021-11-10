<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartSpecValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_spec_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('part_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('part_spec_id')
                ->constrained()
                ->onDelete('cascade');
            $table->integer('int_value')
                ->nullable();
            $table->string('string_value')
                ->nullable();
            $table->text('text_value')
                ->nullable();
            $table->boolean('boolean_value')
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
        Schema::dropIfExists('part_spec_values');
    }
}
