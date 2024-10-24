<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
