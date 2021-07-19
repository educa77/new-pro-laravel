<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'founded', 'description', 'image_path'];
    // protected $hidden = ['updated_at'];
    //protected $visible = ['name', 'founded', 'description'];

    /* car hasMany car_models */
    public function carmodels()
    {
        return $this->hasMany(Car_Model::class);
    }

    /* hasManyThrough relation */
    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class,
            Car_Model::class,
            'car_id', /* Foreign key on Car_Model table */
            'model_id' /* Foreign key on Engine table */
        );
    }

    /* hasOne through relationship */

    public function productionDate()
    {
        return $this->hasManyThrough(
            CarProductionDate::class,
            Car_Model::class,
            'car_id',   /* Foreign key on Car_Model table */
            'model_id', /* Foreign key on CarProductionDate table  corresponde al id en car__models*/
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}