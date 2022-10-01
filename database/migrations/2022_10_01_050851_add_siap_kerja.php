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

        Schema::table('bagging_data', function (Blueprint $table) {
            $table->foreignId('tugasan_id')->constrained('tugasans')->nullable();            
        });

        Schema::table('gambars', function (Blueprint $table) {
            $table->string('jalan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
