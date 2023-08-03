<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewTrainController extends Controller
{
    public function viewAllTrains(){
        view('/ViewTrain.index');
    }
}
