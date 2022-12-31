<?php

namespace App\Models;

use App\Models\tickets_models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie_model extends Model
{
    protected $table = 'movies';
    
    protected $fillable = ['venue','movie_ID','ticket_price'];

    

    
}
