<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Annance extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */



     protected $table = 'annance'; 

    protected $fillable = [
        'utilisateur_id',
        'titre',
        'description',
        'debut',
        'fin',
        'prix',
        'image1',
        'image2',
        'image3',
        'adresse',
        'equipement',
    ];


    public function favoris()
    {
        return $this->hasMany(Favoris::class);
    }

}
