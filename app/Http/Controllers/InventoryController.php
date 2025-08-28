<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    //buat function index
    public function index()
    {
// query from table  inventories using model 

      //$inventories = Inventory::all();

      $inventories = Inventory::latest()->get(); // ini untuk paling latest 

  //return to view with $inventories (dlm inventoris ada recources/views/inventories/index.blade.php)
  return view('inventories.index', compact('inventories'));
    }

   public function create()
   {
     return view('inventories.create');
   }

   public function store(Request $request)
   {
    //store in the table inventoriesusing model 
    // POPO - olain old object
    $inventory = new Inventory();
    $inventory->name = $request->name;
    $inventory->quantity = $request->quantity;
     $inventory->color = $request->color;
      $inventory->serial_no = $request->serial_no;
      $inventory->user_id = auth()->user()->id;
       $inventory->save();

       return redirect('/inventories');
   }

   public function show(Inventory $inventory)  //laravel model binding, auto cari. x mcm laravel 5
   {
    
    $this->authorize('view', $inventory); //untuk athorise polisi pengguna 
    return view('inventories.show', compact('inventory'));

    
   }

   public function edit(Inventory $inventory)  //laravel model binding, auto cari. x mcm laravel 5
   {
    $this->authorize('update', $inventory);
    return view('inventories.edit', compact('inventory'));
   }


public function update(Request $request, Inventory $inventory)  
{
    // update using model
    $inventory->name = $request->name;
     $inventory->quantity = $request->quantity;
     $inventory->color = $request->color;
      $inventory->serial_no = $request->serial_no;
     $inventory->save();

    return redirect('/inventories');

  }


public function destroy(Request $request, Inventory $inventory)  
{
    // delete  using model
    
    $this->authorize('update', $inventory);

    $inventory->delete();
    
     
    //return 
    //return redirect('/inventories');
    return view('inventories.edit', compact('inventory'));

  }
   
}
