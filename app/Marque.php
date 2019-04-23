<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Marque extends Model
{
    use Notifiable;
    protected $primaryKey ="Marque_Id";
    protected $fillable = [
        'Marque_Intitule'
    ];
    public function article(){
        return $this->hasMany('articles');
    }
}
