<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainStops extends Model
{
    protected $table = 'train_stops';
    protected $primaryKey = 'id';
    protected $fillable = ['train_id', 'station', 'time_arrival', 'time_departure', 'created_at', 'updated_at'];
    use HasFactory;

    public function Train()
    {
        return $this->belongsTo('Train');
    }
}
