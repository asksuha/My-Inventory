<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
  // function untuk middleware , login sahaja boleh guna 
  public function __construct()
  {
    $this->middleware('auth');
  }
  
  //buat function index
    public function index()
    {
// query from table  inventories using model 

  $vehicles = Vehicle::all();

  //return to view with $inventories (dlm inventoris ada recources/views/inventories/index.blade.php)
  return view('vehicles.index', compact('vehicles'));
    }

//function create
  public function create()
   {
     return view('vehicles.create');
   }

   //function store
   public function store(Request $request)
   {
    //store in the table inventoriesusing model 
    // POPO - olain old object
    $vehicles = new Vehicle();
    $vehicles->jenis = $request->jenis;
    $vehicles->model = $request->model;
     $vehicles->color = $request->color;
      $vehicles->plat_no = $request->plat_no;
      $vehicles->user_id = auth()->user()->id;
       $vehicles->save();

       return redirect('/vehicles');
   }


   public function show(Vehicle $vehicle)  //laravel model binding, auto cari. x mcm laravel 5
   {
    return view('vehicles.show', compact('vehicle'));
   }

   public function edit(Vehicle $vehicle)  //laravel model binding, auto cari. x mcm laravel 5
   {
    return view('vehicles.edit', compact('vehicle'));
   }

 public function update(Request $request, Vehicle $vehicles)   //$vehicles ikut apa yg kita declare dekatsini 
   {
    //store in the table inventoriesusing model 
    // POPO - olain old object
  
    $vehicles->jenis = $request->jenis;
    $vehicles->model = $request->model;
     $vehicles->color = $request->color;
      $vehicles->plat_no = $request->plat_no;
      $vehicles->user_id = auth()->user()->id; //inipanggil parameter utk update
       $vehicles->save();

       return redirect('/vehicles');
   }

   public function destroy(Request $request, Vehicle $vehicle)  
   {
    // delete  using model
    $vehicle->delete();
     
    //return 
    return redirect('/vehicles');

   }

}



