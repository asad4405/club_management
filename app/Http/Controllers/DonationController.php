<?php

namespace App\Http\Controllers;

use App\Mail\donation_club;
use App\Models\Donation;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::all();
        return view('backend.donations.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        return view('backend.donations.create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);
        $donation_id = Donation::insertGetId([
            'name' => $request->name,
            'donation_reason' => $request->donation_reason,
            'donation_amount' => $request->donation_amount,
            'address' => $request->address,
            'email' => $request->email,
            'club_member' => $request->club_member,
            'created_at' => Carbon::now(),
        ]);

        Mail::to($request->email)->send(new donation_club ($donation_id,$request->name,$request->donation_reason,$request->donation_amount,$request->address,$request->email,$request->club_member));
        return back()->with('add-donation-success', 'Donation Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }

    public function download_donation_invoice($id)
    {
        $donations = Donation::where('id',$id)->get();
        $pdf = Pdf::loadView('pdf.donation_invoice', compact('donations'));
        return $pdf->download('young_star_club_donation_invoice.pdf');
    }
}
