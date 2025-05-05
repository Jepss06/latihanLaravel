<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
// App\Models\Post::factory(100)->recycle(User::factory(5)->create())->create()