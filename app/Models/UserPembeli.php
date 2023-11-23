<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPembeli extends Model
{
    use HasFactory;
    protected $table = 'userpembeli';
    protected $fillable = [
        "name",
        "email",
        "password",
        "asalkota",
    ];
}
