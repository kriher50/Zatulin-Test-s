<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Связь с моделью Article
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
