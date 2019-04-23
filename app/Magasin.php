<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Magasin extends Model
{
    protected $primaryKey = 'Mag_Id';
    use Notifiable;
    protected $fillable = [
       'Mag_Intitule','Tel','Adresse'
    ];

}
