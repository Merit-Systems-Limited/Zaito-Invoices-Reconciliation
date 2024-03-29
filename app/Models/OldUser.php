<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldUser extends Model
{
    use HasFactory;

    protected $table = "users";


    public static function getUsers()
    {
        return self::all();
    }
}
