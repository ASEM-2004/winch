<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{
    public function comments():MorphMany{
        return $this->morphMany(Comment::class,'commentable');
    }
}
