<?php

namespace App\Models;
use App\Models\movie_model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket_models extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable = ['ticket_ID','movie_ID','movie_name','time_slot','seat_no','contact','date'];

    

}

