<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function getImageAttribute($value)
    {
        return asset(Storage::url($value ? : 'avatar/default.png'));
    }

}
