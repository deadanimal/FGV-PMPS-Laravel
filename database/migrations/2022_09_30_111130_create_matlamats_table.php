<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matlamats', function (Blueprint $table) {
            $table->id();
            $table->char('proses', 128)->nullable();
            $table->integer('tahun')->nullable();
            $table->char('matlamat_tahunan', 128)->nullable();
            $table->integer('bulan')->nullable();
            $table->char('matlamat_bulanan', 128)->nullable();            
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
        Schema::dropIfExists('matlamats');
    }
};
