<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    /**
     * @var mixed
     */

    public function getNameAttribute($name){
        return ucwords($name);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
