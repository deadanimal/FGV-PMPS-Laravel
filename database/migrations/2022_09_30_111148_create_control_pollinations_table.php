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
        Schema::create('control_pollinations', function (Blueprint $table) {
            $table->id();
            $table->char('jenis', 6)->default('FATHER');
            $table->char('no_cp', 128)->nullable();
            $table->foreignId('pokok_id')->constrained('pokoks');
            $table->foreignId('tandan_id')->constrained('tandans');
            $table->char('catatan_cp', 128)->nullable();

            $table->char('bil_pemeriksaan', 128)->nullable();
            $table->integer('tambahan_hari')->nullable();
            $table->integer('no_pollen')->nullable();
            $table->integer('peratus_pollen')->nullable();
                    
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
        Schema::dropIfExists('control_pollinations');
    }
};
