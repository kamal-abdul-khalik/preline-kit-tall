<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'image',
        'title',
        'slug',
        'body',
        'featured',
        'is_active',
    ];

    public function scopeFeatured($query)
    {
        $query->where('featured', true);
    }

    public function scopeIsActive($query)
    {
        $query->where('is_active', true);
    }
}
