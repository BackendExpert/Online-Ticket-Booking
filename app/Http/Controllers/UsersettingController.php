<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class UsersettingController extends Controller
{
    public function account_settings(String $id){
        $member_setting = Member::find($id);
        return view('Usersettings.settings')->with('member_setting', $member_setting);
    }
}
