<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    const POSTS_PER_PAGE = 8;

    use HasFactory;

    public function getImagesAttribute($images){
        if($images)
            return json_decode($images, true);

        return ['/img/post-9.jpg'];
    }

    public function setImagesAttribute($images){
        $this->attributes['images'] = json_encode($images);
    }

    public function scopeFilter($query){
        if(request('search'))
        {
            $query
                ->where('header', 'like', '%'.request('search').'%')
                ->orWhere('body', 'like', '%'.request('search').'%');
        }

    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
