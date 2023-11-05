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
        return view('backend.members.index',compact('members'));
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
        ]);

        // photo upload start
        return $member_photo = 'Member_' . date('d_m_Y_'). Str::random(5). '.'. $request->file('member_photo')->getClientOriginalExtension();
        // return $member_photo = 'Member_' . date('d_m_Y_') . Str::random(5) . '.' . $request->file('member_photo')->getClientOriginalExtension();
        // Image::make($request->file('member_photo'))->save(base_path('public/uploads/members_photo/' . $member_photo));

        $member_signature = 'Member_signature_' . date('d_m_Y_') . Str::random(5) . '.' . $request->file('member_signature')->getClientOriginalExtension();
        // Image::make($request->file('member_signature'))->save(base_path('public/uploads/members_signature/' . $member_signature));

        Member::insert([
            'bangla_name' => $request->bangla_name,
            'english_name' => $request->english_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
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
            'member_photo' => $member_photo,
            'member_signature' => $member_signature,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('add-member-success','New Member Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('backend.members.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
