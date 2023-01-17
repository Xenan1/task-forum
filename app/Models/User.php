<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;

class User extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    use HasFactory;

    public function posts() {
        return $this->hasMany(Post::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
}
