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
        // $all_trians = Train::all();
        // return view('Trains.index')->with('all_trians', $all_trians);

        $trains = Train::all();
        return view('Trains.index')->with('trains', $trains);

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
            'weekly_schedule' => 'required',
            'stops' => 'required|string',
            'is_active' => 'required|string',
            'station' => 'required|string',

            'time_arrival' => 'required|string',
            'time_departure' => 'required|string',

        ]);

        $train = New Train;
        $train->train_name = $request->train_name;
        $train->departure_station = $request->departure_station;
        $train->departure_time = $request->departure_time;
        $train->arrival_station = $request->arrival_station;
        $train->arrival_time = $request->arrival_time;
        $train->weekly_schedule = json_encode($request->weekly_schedule);
        $train->stops = $request->stops;
        $train->is_active = $request->is_active;

        $train->save();

        // dd($train);

        $train_stops = New TrainStops;
        $train_stops->train_id = $train->id;
        $train_stops->station = $request->station;     
        $train_stops->time_arrival = $request->time_arrival;      
        $train_stops->time_departure = $request->time_departure;   

        // dd($train_stops);

        $train_stops->save();

        // $train = Train::create([
        //     'train_name' => $request->input('train_name'),
        //     'departure_station' => $request->input('departure_station'),
        //     'departure_time' => $request->input('departure_time'),
        //     'arrival_station' => $request->input('arrival_station'),
        //     'arrival_time' => $request->input('arrival_time'),
        //     'weekly_schedule' => $request->input(json_encode('weekly_schedule')),
        //     'stops' => $request->input('stops'),
        //     'is_active' => $request->input('is_active'),
        // ]);

        // $train_stops = TrainStops::create([
        //     'train_id' => $train->id,
        //     'station' => $request->input('station'),
        //     'time_arrival' => $request->input('time_arrival'),
        //     'time_departure' => $request->input('time_departure'),
        // ]);

        return redirect('/Trains');

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
        
    }
}
