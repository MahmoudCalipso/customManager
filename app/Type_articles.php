<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Type_articles extends Model
{
    use Notifiable;
    protected $primaryKey = "idTypeArt";
    protected $fillable = [
        'libelleTypeArt'
    ];
    public function articles(){
        return $this->hasMany('articles');
    }
}
