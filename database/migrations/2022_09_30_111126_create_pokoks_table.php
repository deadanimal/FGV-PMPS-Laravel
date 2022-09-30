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
        Schema::create('pokoks', function (Blueprint $table) {
            $table->id();
            
            $table->char('no_pokok', 128)->nullable();
            $table->char('jantina', 128)->nullable();
            $table->char('baka', 128)->nullable();
            $table->char('progeny', 128)->nullable();
            $table->char('blok', 128)->nullable();
            $table->char('trial', 128)->nullable();
            $table->char('status_pokok', 128)->nullable();

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
        Schema::dropIfExists('pokoks');
    }
};
