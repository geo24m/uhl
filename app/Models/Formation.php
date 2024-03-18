<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }

    public function centers()
    {
        return $this->belongsToMany(Center::class);
    }
}
