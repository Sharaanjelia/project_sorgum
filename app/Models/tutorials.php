<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class tutorials extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'video_url', 'status', 'user_id', 'tutorial_category_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(TutorialCategory::class, 'tutorial_category_id');
    }

    public function comments(): MorphMany // Ini adalah review
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}