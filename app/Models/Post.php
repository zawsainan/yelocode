<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'content',
        'title',
        'slug',
        'thumbnail',
        'color',
        'published',
        'tags'
    ];
    protected $casts = [
        'tags' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class)->withDefault(['name' => 'Unknown']);
    }
}
