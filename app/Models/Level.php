<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public function cycle()
    {
        $this->belongsTo(Cycle::class);
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class);
    }
}
