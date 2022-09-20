<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;

class Streaming extends Model
{
    public function movies(){
        return $this->hasMany(Movie::class);
    }
}