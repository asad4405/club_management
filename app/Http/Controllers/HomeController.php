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
        $members = Member::latest()->get();
        $donations = Donation::latest()->get();
        $costs = Cost::latest()->get();
        return view('dashboard.admin',compact('members','donations','costs'));
    }
}
