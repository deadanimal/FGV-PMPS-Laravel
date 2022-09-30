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
        Schema::create('kerosakans', function (Blueprint $table) {
            $table->id();
            $table->char('nama', 128)->nullable();
            $table->char('jenis', 128)->nullable();
            $table->foreignId('tandan_id')->constrained('tandans')->nullable();
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
        Schema::dropIfExists('kerosakans');
    }
};
