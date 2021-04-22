<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PostController;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
