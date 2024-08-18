<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        return view('cars.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_model'=>'required',
            'manufacturer'=>'required',
            'price'=>'required|numeric',
            'year'=>'required|integer|min:1900|max:2024'.date('Y'),
        ]);

        Car::create($request->all());
        return redirect()->route('CarsIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Car::findOrFail($id);
        return view('cars.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_model'=>'required',
            'manufacturer'=>'required',
            'price'=>'required|numeric',
            'year'=>'required|integer|min:1900|max:2024'.date('Y'),
        ]);

        $cars = Car::findOrFail($id);
        $cars->update($request->all());
        return redirect()->route('CarsIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cars = Car::findOrFail($id);
        $cars->delete();
        return redirect()->route('CarsIndex');
    }
}
