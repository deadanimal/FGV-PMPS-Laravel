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
        Schema::create('quality_controls', function (Blueprint $table) {
            $table->id();
            $table->char('jenis', 6)->default('FATHER');
            $table->char('no_qc', 128)->nullable();
            $table->foreignId('pokok_id')->constrained('pokoks');
            $table->foreignId('tandan_id')->constrained('tandans');
            $table->char('catatan_qc', 128)->nullable();

            $table->char('status_bunga', 128)->nullable();
            $table->char('status_qc', 128)->nullable();
            $table->integer('jumlah_bagging')->nullable();
            $table->integer('jumlah_bagging_lulus')->nullable();
            $table->integer('jumlah_bagging_rosak')->nullable();
            $table->integer('peratus_rosak')->nullable();
            
            $table->foreignId('tugasan_id')->constrained('tugasans');            
                                  
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
        Schema::dropIfExists('quality_controls');
    }
};
