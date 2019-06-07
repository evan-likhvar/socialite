<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserImage extends Model
{

    protected $fillable = [
        'user_id', 'image_user_name', 'image_hash_name','unproved','public','main',
    ];

}
