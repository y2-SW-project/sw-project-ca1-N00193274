<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_role');
       /*  the belongs to many tells the database that the user and role table are connected, we specify user_role because Laravel
       auto assigns link tables in alphabetical order. Using this function saves time and effort */
    }
}
