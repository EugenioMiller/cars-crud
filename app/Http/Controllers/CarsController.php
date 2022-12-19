<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller{


    public function index(){
        $cars = Car::all();
        return view('welcome',['autos'=>$cars]);
    }

    public function add(){
        return view('formAdd');
    }

    public function new(Request $request){

        $request->validate([
            'model'=>'required',
            'brand'=>'required', 
            'engine'=>'required', 
            'color'=>'required',
            'registration'=>'required',
            'doors'=>'required'
        ]);

        $car = new Car();
        $car->model = $request->model;
        $car->brand = $request->brand;
        $car->engine = $request->engine;
        $car->color = $request->color;
        $car->registration = $request->registration;
        $car->doors = $request->doors;
        $car->save();

        return redirect()->route('home');
    }

    public function edit($car_id){
        $car = Car::find($car_id);

        return view('formEdit', ['auto'=>$car]);
    }

    public function update(Request $request){
        
        $request->validate([
            'model'=>'required',
            'brand'=>'required', 
            'engine'=>'required', 
            'color'=>'required',
            'registration'=>'required',
            'doors'=>'required'
        ]);


        $car = Car::find($request->id);

        $car->model = $request->model;
        $car->brand = $request->brand;
        $car->engine = $request->engine;
        $car->color = $request->color;
        $car->registration = $request->registration;
        $car->doors = $request->doors;
        $car->save();

        return redirect()->route('home');
    }

    public function delete($id){
       
        $car = Car::find($id);

        $car->delete();

        return redirect()->route('home');
    }
}
