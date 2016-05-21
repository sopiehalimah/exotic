<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisKecilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_kecils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('codemerk');
            $table->string('codejenis');
            $table->string('jenis');
            $table->string('ket');
            $table->string('harga');
            $table->string('gambar1');
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
        Schema::drop('jenis_kecils');
    }
}
