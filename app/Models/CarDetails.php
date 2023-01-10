<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'neve',
        'szine',
        'evjarat',
        'motorTipus',
        'muszakiAlkalmas'
    ];
}
