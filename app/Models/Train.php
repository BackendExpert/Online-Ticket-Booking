<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table = 'trains';
    protected $primaryKey = 'id';
    protected $fillable = ['train_name', 'departure_station', 'departure_time', 'arrival_station', 'address', 'created_at', 'updated_at'];
    use HasFactory;
}
