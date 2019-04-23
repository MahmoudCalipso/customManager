<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    protected $fillable = [
        'civilite','typefr','nom','prenom',
        'tel1','tel2','email','fax','gsm',
        'adresse','codePostal','ville','pays','matfiscal','Raison_Social','datecrea'
    ];
    protected $primaryKey = 'Four_Id';
    public function article()
    {
        return $this->hasMany('article');
    }
}
