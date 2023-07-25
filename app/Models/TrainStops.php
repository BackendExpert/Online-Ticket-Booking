<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainStops extends Model
{
    protected $table = 'train_stops';
    protected $primaryKey = 'id';
    protected $fillable = ['train_id', 'station', 'arrival_time', 'departure_time', 'created_at', 'updated_at'];
    use HasFactory;

    public function Train()
    {
        
    }
}
