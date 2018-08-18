<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = [
		'title', 'year', 'runtime', 'rating', 'image', 'link', 'description', 'genre', 'trailer'
     ];
}
