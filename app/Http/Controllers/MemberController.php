<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('backend.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
            // 'member_photo' => 'required|file|mimes:png,jpg,jpeg',
        ]);

        // photo upload start

        // $member_photo = 'Member_' . date('d_m_Y_') . Str::random(5) . '.' . $request->file('member_photo')->getClientOriginalExtension();
        // Image::make($request->file('member_photo'))->save(base_path('public/uploads/member_photo/' . $member_photo));

        Member::insert([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'id_no' => $request->id_no,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'profession' => $request->profession,
            'blood_group' => $request->blood_group,
            'education' => $request->education,
            'donation_amount_numbers' => $request->donation_amount_numbers,
            'donation_amount_words' => $request->donation_amount_words,
            // 'member_photo' => $member_photo,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('add-member-success', 'New Member Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('backend.members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('backend.members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $member->name = $request->name;
        $member->father_name = $request->father_name;
        $member->mother_name = $request->mother_name;
        $member->phone_number = $request->phone_number;
        $member->email = $request->email;
        $member->date_of_birth = $request->date_of_birth;
        $member->present_address = $request->present_address;
        $member->permanent_address = $request->permanent_address;
        $member->id_no = $request->id_no;
        $member->nationality = $request->nationality;
        $member->religion = $request->religion;
        $member->profession = $request->profession;
        $member->blood_group = $request->blood_group;
        $member->education = $request->education;
        $member->donation_amount_numbers = $request->donation_amount_numbers;
        $member->donation_amount_words = $request->donation_amount_words;
        $member->created_at = Carbon::now();
        $member->save();
        return redirect('member')->with('member-update-success','Member Update Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return back();
    }
}
