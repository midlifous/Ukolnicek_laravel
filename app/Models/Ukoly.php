<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ukoly extends Model
{
    protected $table = "ukoly";
    protected $fillable = ["nazev"];

   
}
