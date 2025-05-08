<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        self::saving(static function (Post $post): void {
            $post->slug = Str::slug($post->title);
        });
    }
}
