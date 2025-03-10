<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations'; 

    protected $fillable = [
        'reservation_id',
        'debut',
        'fin',
        'utilisateur_id',
         'annance_id',
    ];

}
