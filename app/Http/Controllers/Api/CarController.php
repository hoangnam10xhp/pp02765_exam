<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return response()->json([
            'message'=>'Lấy hết dữ liệu staff từ DB thành công',
            'data' => $cars
        ],
        Response::HTTP_OK);
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
        $request->validate([
            'car_model'=>'required',
            'manufacturer'=>'required',
            'price'=>'required|numeric',
            'year'=>'required|integer|min:1900|max:2024'.date('Y'),
        ]);

        $car_model=$request->car_model;
        $manufacturer=$request->manufacturer;
        $price=$request->price;
        $year=$request->year;

        Car::create([
            'car_model'=>$car_model,
            'manufacturer'=>$manufacturer,
            'price'=>$price,
            'year'=>$year,
        ]);
        return response()->json([
            'message'=> 'Them thanh cong',
        ],Response::HTTP_OK) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request -> id;
        $cars= Car::find($id);
        return response()->json([
            'message'=>'Lấy hết dữ liệu staff từ DB thành công',
            'data' => $cars
        ],
        Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cars = Car::findOrFail($id)
        ->update([
            'car_model' => $request->car_model,
            'manufacturer' => $request->manufacturer,
            'price'=>$request->price,
            'year'=>$request->year,
        ]);

        if($cars){
            return "Sửa người dùng thành công";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $cars = Car::findOrFail($id);
        $cars->delete();
        return response()->json(['message' => 'Xóa xe thành công']);
    }
}
