<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclesM extends Model
{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $fillable = ['frant_ing', 'back_ing', 'left_ing', 'right_ing', 'in_ing', 'vehicle_plate_no', 'vehicle_chassis_no', 'vehicle_registed_no', 'owner', 'vehicle_type', 'vehicle_model', 'vehicle_color', 'seats', 'created_at', 'updated_at'];
    use HasFactory;
}
