<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard ()
    {
        $members = Member::all();
        return view('dashboard.admin',compact('members'));
    }
}
