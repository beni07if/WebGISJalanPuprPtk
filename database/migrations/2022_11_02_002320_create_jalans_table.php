<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jalans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nomor_ruas');
            $table->string('nama_ruas');
            $table->float('panjang');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->float('koordinat_pangkal');
            $table->float('koordinat_ujung');
            $table->float('kondisi_baik');
            $table->float('kondisi_sedang');
            $table->float('kondisi_rusak_ringan');
            $table->float('kondisi_rusak_berat');
            $table->integer('jp_aspal');
            $table->integer('jp_beton');
            $table->integer('jp_kerikil');
            $table->integer('jp_tanah');
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
        Schema::dropIfExists('jalans');
    }
}
