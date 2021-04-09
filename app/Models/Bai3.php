<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bai3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'content',
    ];
}
