<?php

namespace App\Models;

use App\Models\Streaming;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
   public $timestamps = false;

   protected $fillable = [
     'name',
     'type',
     'year',
     'synopsis',
     'genre',
     'path',
     'streaming_id'
   ];

   public function streaming(){
      return $this->BelongsTo(Streaming::class);
   }
}