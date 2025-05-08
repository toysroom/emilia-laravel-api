<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    protected static function booted(): void
    {
        self::saving(static function (Category $category): void {
            $category->slug = Str::slug($category->name);
        });
    }
}
