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
        Schema::create('pollens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokok_id')->constrained('pokoks');
            $table->foreignId('tandan_id')->constrained('tandans');  

            $table->char('catatan_pollen', 128)->nullable();
            $table->char('status_pollen', 128)->nullable();          
            $table->char('viabiliti_pollen', 128)->nullable();  
            $table->timestamp('masa_masuk_pertama')->nullable();        
            $table->timestamp('masa_masuk_kedua')->nullable();       
            $table->timestamp('masa_keluar_pertama')->nullable();        
            $table->timestamp('masa_keluar_kedua')->nullable();                    
            $table->timestamp('tarikh_ayak')->nullable();   
            $table->timestamp('tarikh_uji')->nullable();  
            $table->integer('bil_uji')->nullable();   
            
            $table->foreignId('quality_control_id')->constrained('quality_controls');  
            
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
        Schema::dropIfExists('pollens');
    }
};
