<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costs = Cost::all();
        return view('backend.costs.index',compact('costs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.costs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);

        Cost::insert([
            'cost_reason' => $request->cost_reason,
            'cost_amount' => $request->cost_amount,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('add-cost-success','Cost Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cost $cost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cost $cost)
    {
        return view('backend.costs.edit',compact('cost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cost $cost)
    {
        $cost->cost_reason = $request->cost_reason;
        $cost->cost_amount = $request->cost_amount;
        $cost->save();
        return redirect('cost')->with('update-cost-success','Costs Update Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cost $cost)
    {
        $cost->delete();
        return back();
    }
}
