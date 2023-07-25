<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member_profile = Member::find($id);
        return view('profile.show')->with('member_profile', $member_profile);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member_profile = Member::find($id);
        return view('profile.edit')->with('member_profile', $member_profile);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // dd($request->all());

        $this->validate($request, [
            'profile_img' => ['required', 'image', 'mimes:jpeg,jpg,png,gif,svg'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'address' => ['required', 'string', 'min:5', 'max:300'],
        ]);

        $update_member = Member::find($id);

        if($request->hasFile('profile_img')){
            $profile_img_path = $request->file('profile_img')->store('profile_img', ['disk' => 'my_files']);
            $update_member->profile_img = $profile_img_path;
        }

        $update_member->name = $request->name;
        $update_member->email = $request->email;
        $update_member->address = $request->address;
        
        // dd($update_member);

        $update_member->update();

        return redirect('/profile/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
