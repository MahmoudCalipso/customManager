<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class tva extends Model
{
    use Notifiable;
    protected $primaryKey = "TVA_Id";
    protected $fillable = [
        'TVA_Des'
    ];

    public function article()
    {
        return $this->hasMany('article');
    }
}
