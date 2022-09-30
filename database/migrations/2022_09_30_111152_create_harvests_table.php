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
        Schema::create('harvests', function (Blueprint $table) {
            $table->id();
            $table->char('jenis', 6)->default('FATHER');
            $table->char('no_harvest', 128)->nullable();
            $table->foreignId('pokok_id')->constrained('pokoks');
            $table->foreignId('tandan_id')->constrained('tandans');
            $table->char('catatan_harvest', 128)->nullable();

            $table->integer('berat_tandan')->nullable();
            $table->integer('jumlah_tandan')->nullable();
                    
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
        Schema::dropIfExists('harvests');
    }
};
