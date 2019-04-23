<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('Code');
            $table->string('civilite');
            $table->string('typecl');
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
            $table->decimal('Solde', 18, 3);
            $table->string('matfiscal');
            $table->string('Raison_Social');

            $table->string('datecrea');


            $table->timestamps();



            // jointure avec la table secteur
          /*  $table->unsignedInteger('Sec_Id');
            $table->foreign('Sec_Id')->references('Sec_Id')->on('secteurs');

          */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
