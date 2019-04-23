<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Articles extends Model
{
    use Notifiable;
    protected $primaryKey = "Art_Id";
    protected $fillable = [

        'Art_Ref','Art_Designation','Art_CodeBarre','Qte','DateAchat','Marque_Id','TVA_Id','Four_Id','idTypeArt',
        'Art_Image', 'ArtA_HT','ArtA_TTC','ArtV_HT','ArtV_TTC','Art_PrixUht','Art_PrixUTtc'
    ];
    public function marques()
    {
        return $this->hasOne('marques');
    }

    public function Type_articles()
    {
        return $this->hasOne('Type_articles');
    }

    public function tva()
    {
        return $this->hasOne('tva');
    }
    public function fournisseur()
    {
        return $this->hasOne('fournisseur');
    }
}
