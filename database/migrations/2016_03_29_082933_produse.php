<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produse', function (Blueprint $table) {
            $table->increments('id_produs');
            $table->string('nume');
            $table->double('pret');
            $table->string('id_categorie');
            $table->string('descriere');
            $table->string('poza');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produse');
    }
}
