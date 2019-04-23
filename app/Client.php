<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    protected $primaryKey = "Code";
    use Notifiable;
    protected $fillable = [
        'civilite','typecl','nom','prenom',
        'tel1','tel2','email','fax','gsm',
        'adresse','codePostal','ville','pays','Solde','matfiscal','Raison_Social','datecrea'
    ];


}
