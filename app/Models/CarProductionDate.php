<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarProductionDate extends Model
{
    use HasFactory;
    protected $table = 'car_production_dates';
    protected $primaryKey = 'id';

    public function carModel()
    {
        return $this->belongsTo(Car_Model::class, 'car__model_id', 'id',);
    }
}