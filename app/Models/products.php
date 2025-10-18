<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class products extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'price', 'image', 'status',
    ];

    public function comments(): MorphMany // Ini adalah review
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}