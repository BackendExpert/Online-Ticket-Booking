<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class ViewTrainController extends Controller
{
    public function viewAllTrains(){
        $trains = Train::all();
        
    }
}
