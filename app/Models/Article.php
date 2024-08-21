<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Добавляем связь с моделью Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
