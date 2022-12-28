<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_presensis', function (Blueprint $table) {
            $table->id();
            $table->char('code_presensi');
            $table->foreignId('jadwal_id')->constrained('jadwal_mapels');
            $table->integer('minggu_ke');
            $table->dateTime('waktu_awal');
            $table->dateTime('waktu_akhir');
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
        Schema::dropIfExists('code_presensis');
    }
}
