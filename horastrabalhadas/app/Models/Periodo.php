<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Periodo extends Model
{
    use HasApiTokens, HasFactory,Notifiable;

    protected $fillable = [
        'entrada',
        'saida',
    ];
// Faltando instrução na model.
    

}
