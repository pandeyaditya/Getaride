<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function save(Request $request){
        $trip = new \App\Trip();

        $request->validate([
            'source' => 'required',
            'destination' => 'required',
            'price' => 'required',            
            'is_expired' => 'required'
        ]);

        $trip->source = $request->source;
        $trip->destination = $request->destination;
        $trip->price = $request->price;
        $trip->is_expired = $request->is_expired;
        
        $trip->save();

        return redirect('/addtrip')->with('success','Trip added successfully');
    }


    public function alltrips(){
        $trips = \App\Trip::all();
        // $total_expense = $expenses->sum('expense_amount');

        $data = [
            'trips' => $trips
        ];

        return view('alltrips')->with('data',$data);
    }
}
