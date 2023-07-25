<?php

namespace App\Http\Controllers;

use App\Models\VehiclesM;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = VehiclesM::all();
        return view('vehicles.index')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'frant_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'back_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'left_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'right_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'in_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'owner' => ['required'],
            'vehicle_plate_no' => ['required', 'min:10', 'max:11', 'unique:vehicles'],
            'vehicle_chassis_no' => ['required', 'min:12', 'max:15', 'unique:vehicles'],
            'vehicle_registed_no' => ['required', 'min:12', 'max:15', 'unique:vehicles'],
            'vehicle_type' => ['required', 'min:2', 'max:10'],
            'vehicle_model' => ['required', 'min:1', 'max:30'],
            'vehicle_color' => ['required', 'min:2', 'max:10'],
            'seats' => ['required'],
        ]);

        $new_vechicle = new VehiclesM();
        if($request->hasFile('frant_ing')){
            $frant_img_path = $request->file('frant_ing')->store('frant_ing', ['disk' => 'my_files']);
            $new_vechicle->frant_ing = $frant_img_path;
        }
        if($request->hasFile('back_ing')){
            $back_img_path = $request->file('back_ing')->store('back_ing', ['disk' => 'my_files']);
            $new_vechicle->back_ing = $back_img_path;
        }
        if($request->hasFile('left_ing')){
            $left_img_path = $request->file('left_ing')->store('left_ing', ['disk' => 'my_files']);
            $new_vechicle->left_ing = $left_img_path;
        }
        if($request->hasFile('right_ing')){
            $right_img_path = $request->file('right_ing')->store('right_ing', ['disk' => 'my_files']);
            $new_vechicle->right_ing = $right_img_path;
        }
        if($request->hasFile('in_ing')){
            $in_img_path = $request->file('in_ing')->store('in_ing', ['disk' => 'my_files']);
            $new_vechicle->in_ing = $in_img_path;
        }

        // $new_vechicle->frant_ing = $request->frant_ing;
        // $new_vechicle->back_ing = $request->back_ing;
        // $new_vechicle->left_ing = $request->left_ing;
        // $new_vechicle->right_ing = $request->right_ing;
        // $new_vechicle->in_ing = $request->in_ing;
        $new_vechicle->vehicle_plate_no = $request->vehicle_plate_no;
        $new_vechicle->vehicle_chassis_no = $request->vehicle_chassis_no;
        $new_vechicle->vehicle_registed_no = $request->vehicle_registed_no;
        $new_vechicle->owner = $request->owner;
        $new_vechicle->vehicle_type = $request->vehicle_type;
        $new_vechicle->vehicle_model = $request->vehicle_model;
        $new_vechicle->vehicle_color = $request->vehicle_color;
        $new_vechicle->seats = $request->seats;

        // dd($new_vechicle);
        $new_vechicle->save();
        return redirect('/vehicles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $view_vehicle = VehiclesM::find($id);
        return view('vehicles.show')->with('view_vehicle', $view_vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit_vehicle = VehiclesM::find($id);
        return view('vehicles.edit')->with('edit_vehicle', $edit_vehicle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'frant_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'back_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'left_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'right_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'in_ing' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'vehicle_plate_no' => ['required', 'min:10', 'max:11'],
            'vehicle_chassis_no' => ['required', 'min:12', 'max:15'],
            'vehicle_type' => ['required', 'min:2', 'max:10'],
            'vehicle_model' => ['required', 'min:1', 'max:30'],
            'vehicle_color' => ['required', 'min:2', 'max:10'],
            'seats' => ['required'],
        ]);

        $update_vechicle = VehiclesM::find($id);

        if($request->hasFile('frant_ing')){
            $frant_img_path = $request->file('frant_ing')->store('frant_ing', ['disk' => 'my_files']);
            $update_vechicle->frant_ing = $frant_img_path;
        }
        if($request->hasFile('back_ing')){
            $back_img_path = $request->file('back_ing')->store('back_ing', ['disk' => 'my_files']);
            $update_vechicle->back_ing = $back_img_path;
        }
        if($request->hasFile('left_ing')){
            $left_img_path = $request->file('left_ing')->store('left_ing', ['disk' => 'my_files']);
            $update_vechicle->left_ing = $left_img_path;
        }
        if($request->hasFile('right_ing')){
            $right_img_path = $request->file('right_ing')->store('right_ing', ['disk' => 'my_files']);
            $update_vechicle->right_ing = $right_img_path;
        }
        if($request->hasFile('in_ing')){
            $in_img_path = $request->file('in_ing')->store('in_ing', ['disk' => 'my_files']);
            $update_vechicle->in_ing = $in_img_path;
        }

        $update_vechicle->vehicle_plate_no = $request->vehicle_plate_no;
        $update_vechicle->vehicle_chassis_no = $request->vehicle_chassis_no;
        $update_vechicle->vehicle_type = $request->vehicle_type;
        $update_vechicle->vehicle_model = $request->vehicle_model;
        $update_vechicle->vehicle_color = $request->vehicle_color;
        $update_vechicle->seats = $request->seats;

        // dd($update_vechicle);

        $update_vechicle->update();

        return redirect('/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_vehicle = VehiclesM::find($id);
        $delete_vehicle->delete();
        return back();
    }
}
