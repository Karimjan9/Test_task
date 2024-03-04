<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersLevelModel extends Model
{
    use HasFactory;

    protected $table = "users_level";
    protected $fillable = ['name', 'level'];
}
