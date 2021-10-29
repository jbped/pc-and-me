<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenchmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benchmarks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');
            $table->foreignId('build_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('game_title');
            $table->string('game_service');
            $table->string('operating_system');
            $table->string('resolution');
            $table->json('game_settings');
            $table->float('average_fps', 6, 2);
            $table->float('one_percent_low', 6, 2)->nullable();
            $table->float('point_one_percent_low')->nullable();
            $table->float('average_gpu_temp', 5, 2)->nullable();
            $table->float('high_gpu_temp', 5, 2)->nullable();
            $table->float('average_cpu_temp', 5, 2)->nullable();
            $table->float('high_cpu_temp', 5, 2)->nullable();
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
        Schema::dropIfExists('benchmarks');
    }
}
