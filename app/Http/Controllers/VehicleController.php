<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
class VehicleController extends Controller
{
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
       $vehicles->save();

       return redirect('/vehicles');
   }
}

