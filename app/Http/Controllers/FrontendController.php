<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('index',compact('members'));
    }

    public function contact_post(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('contact-success','Message send Successfull!');
    }
}
