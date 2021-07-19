<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_Model extends Model
{
    use HasFactory;
    protected $table = 'car__models';
    protected $primaryKey = 'id';

    /* car model belogns to a car */
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function productionDate()
    {
        return $this->hasOne(CarProductionDate::class);
    }
}