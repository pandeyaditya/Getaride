<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function save(Request $request){
        $car = new Car();

        $request->validate([
            'car_name' => 'required',
            'price_per_hour' => 'required',
            'is_available' => 'required',            
            'is_ac' => 'required'
        ]);

        $car->car_name = $request->car_name;
        $car->price_per_hour = $request->price_per_hour;
        $car->is_available = $request->is_available;
        $car->is_ac = $request->is_ac;
        
        $car->save();

        return redirect('/addcar')->with('success','Car added successfully');
    }


    public function allcars(){
        $cars = \App\Car::all();
        // $total_expense = $expenses->sum('expense_amount');

        $data = [
            'cars' => $cars
        ];

        return view('allcars')->with('data',$data);
    }
}
