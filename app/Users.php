<?php

namespace App;
use App\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    use Notifiable;
    protected $primaryKey = "User_Id";
    protected $fillable = [
        'name','email','email_verified_at','password','remember_token','user_role'
    ];
}
