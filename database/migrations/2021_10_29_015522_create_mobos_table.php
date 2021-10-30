<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')
                ->constrained('builds')
                ->onDelete('cascade');
            $table->string('cpu_type'); // AMD v Intel, 
            $table->string('chipset'); // AMD B550, AMD X570, Intel 600 series, Intel 500 Series
            $table->string('socket_type')->nullable(); // AM4, LGA 1700
            $table->string('size')->nullable(); // Mid-ATX, Full-ATX
            $table->string('manufacturer'); // MSI, Gigabyte, ASUS, etc.
            $table->string('model')->nullable(); // Aorus Master, Gaming Carbon WIFI, etc
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
        Schema::dropIfExists('mobos');
    }
}
