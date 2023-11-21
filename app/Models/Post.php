<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'slug', 'pretext', 'tags', 'location', 'photo', 'content','user_id'];

    public function scopeFilter($query, array $filters) {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
    }

    // Relationship with user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
