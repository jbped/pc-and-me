<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('part_type_id')
                ->constrained();
            $table->foreignId('part_id')
                ->constrained();
            $table->text('description')
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
        Schema::dropIfExists('build_parts');
    }
}
