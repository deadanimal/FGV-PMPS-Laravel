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
        Schema::create('tugasans', function (Blueprint $table) {
            $table->id();

            $table->char('no_tugasan', 128)->nullable();
            $table->char('nama_tugasan', 128)->nullable();

            $table->foreignId('assignee_id')->constrained('users');   
            $table->foreignId('assigner_id')->constrained('users');  
            
            $table->timestamp('tarikh_kerja_mula')->nullable();
            $table->timestamp('tarikh_kerja_habis')->nullable();

            $table->boolean('siap_kerja');
            $table->char('catatan_siap_kerja', 128)->nullable();              

            $table->boolean('sah');
            $table->foreignId('pengesah_id')->constrained('users')->nullable();
            $table->char('catatan_pengesah', 128)->nullable();              

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
        Schema::dropIfExists('tugasans');
    }
};
