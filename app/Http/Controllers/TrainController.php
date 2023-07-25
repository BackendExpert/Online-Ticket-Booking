<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\TrainStops;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_trians = Train::all();
        return view('Trains.index')->with('all_trians', $all_trians);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Trains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'train_name' => 'required|string',
            'departure_station' => 'required|string',
            'departure_time' => 'required|string',
            'arrival_station' => 'required|string',
            'arrival_time' => 'required|string',
            'weekly_schedule' => 'required|string',
            'stops' => 'required|string',
            'is_active' => 'required|string',
            'station' => 'required|string',

            'arrival_time' => 'required|string',
            'departure_time' => 'required|string',

        ]);

        $train = Train::create([
            'train_name' => $request->input('train_name'),
            'departure_station' => $request->input('departure_station'),
            'departure_time' => $request->input('departure_time'),
            'arrival_station' => $request->input('arrival_station'),
            'arrival_time' => $request->input('arrival_time'),
            'weekly_schedule' => $request->input('weekly_schedule'),
            'stops' => $request->input('stops'),
            'is_active' => $request->input('is_active'),
        ]);

        $train_stops = TrainStops::create([
            'train_id' => $train->id,
            'station' => $request->input('station'),
            'arrival_time' => $request->input('arrival_time'),
            'departure_time' => $request->input('departure_time'),
        ]);

        return redirect('/Trains')

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
