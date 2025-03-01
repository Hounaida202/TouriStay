<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class favoris extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
     protected $table = 'favoris'; 

    protected $fillable = [
        'utilisateur_id',
        'annance_id',
        
    ];



    public function annance()
    {
        return $this->belongsTo(Annance::class, 'annance_id');
    }



}
