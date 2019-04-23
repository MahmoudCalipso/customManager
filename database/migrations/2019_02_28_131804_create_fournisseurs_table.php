<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->increments('Four_Id');
            $table->string('civilite');
            $table->string('typefr');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('email');
            $table->string('fax');
            $table->string('gsm');
            $table->string('adresse');
            $table->string('codePostal');
            $table->string('ville');
            $table->string('pays');

            $table->string('matfiscal');
            $table->string('Raison_Social');

            $table->string('datecrea');
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
        Schema::dropIfExists('fournisseurs');
    }
}
