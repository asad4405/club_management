<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Donation;
use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard ()
    {
        $members = Member::all();
        $donations = Donation::latest()->get();
        $costs = Cost::all();
        return view('dashboard.admin',compact('members','donations','costs'));
    }
}
