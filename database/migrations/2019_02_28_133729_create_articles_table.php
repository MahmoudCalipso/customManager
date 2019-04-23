<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('Art_Id');
            $table->string('Art_Ref');
            $table->string('Art_Designation');
            $table->string('Art_CodeBarre');
            $table->integer('Qte');
            $table->string('DateAchat');


            // jointure avec la table marque
            $table->unsignedInteger('Marque_Id');
            $table->foreign('Marque_Id')->references('Marque_Id')->on('marques');
            //

            // jointure avec la table type article
            $table->unsignedInteger('idTypeArt');
            $table->foreign('idTypeArt')->references('idTypeArt')->on('type_articles');
            //

            $table->string('Art_Image');


            // jointure avec la table fournisseur
            $table->unsignedInteger('Four_Id');
            $table->foreign('Four_Id')->references('Four_Id')->on('fournisseurs');
            //
            // jointure avec la table tva
            $table->unsignedInteger('TVA_Id');
            $table->foreign('TVA_Id')->references('TVA_Id')->on('tvas');
            //


            $table->double('ArtA_HT');
            $table->double('ArtA_TTC');

            $table->double('ArtV_HT');
            $table->double('ArtV_TTC');

            $table->double('Art_PrixUht');
            $table->double('Art_PrixUTtc');
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
        Schema::dropIfExists('articles');
    }
}
