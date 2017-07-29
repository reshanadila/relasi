<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrangtuaaasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtuaaas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ibu');
             $table->string('nama_ayah');
            $table->integer('umur_ibu');
                $table->integer('umur_ayah');
                $table->text('alamat');

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
        Schema::dropIfExists('orangtuaaas');
    }
}
