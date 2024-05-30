<?php

namespace App\Http\Controllers;

use App\Models\truck_trucker;
use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $truckers= Trucker::all();
        $trucks= Truck::all();
        return view('trucks.asociar',compact('truckers','trucks'));
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
        $truck=Truck::find($request->truck_id);
        $truck->truckers()->attach($request->trucker_id);

        return 'echo';
    }

    /**
     * Display the specified resource.
     */
    public function show(truck_trucker $truck_trucker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(truck_trucker $truck_trucker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, truck_trucker $truck_trucker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(truck_trucker $truck_trucker)
    {
        //
    }
}
