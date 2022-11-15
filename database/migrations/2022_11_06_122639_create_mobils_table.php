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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("transaksi_id")->nullable();
            $table->string("pemilik");
            $table->string("kota");
            $table->text("gambar");
            $table->string("merk");
            $table->string("plat")->nullable();
            $table->string("warna")->nullable();
            $table->string("tahun")->nullable();
            $table->string("status")->default(true);
            $table->integer("harga");
            $table->string("transmisi");
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
        Schema::dropIfExists('mobils');
    }
};
