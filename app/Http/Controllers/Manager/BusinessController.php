<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:manager');
    }

    /**
     * resource list
     * 
     * @return \illuminate\Http\Response
     */

    public function index()
    {
        $inventories = Inventory::all();
        return view('manager.businesses.index' , [ 'inventories' => $inventory ]);
    }

    /**
     * 
     * 
     * @return \illuminate\Http\Response
     */

    public function create()
    {
        return view('manager.businesses.create');
    }

    /**
    * 
    * 
    * @param \illuminate\Http\Request
    * @return \illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);
        /*  store function */

        $inventory = new Inventory();
        $inventory->name = $request->input('name');
        $inventory->description = $request->input('description');
        $inventory->quantity = $request->input('quantity');
        $inventory->save();

        return redirect()->route('manager.businesses.index');
    }

    /**
    * 
    * 
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function show($id)
    {
        $business = Business::findorFail($id);

       return view('manager.businesses.show', [
           'inventory' => $inventory
       ]);
    }

     /**
    * show function
    * 
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function edit($id)
    {
        $inventory = Inventory::findorFail($id);

        return view('manager.businesses.edit', [ 'inventory' => $inventory]);
    }

    /**
    * 
    * 
    * @param \illuminate\Http\Request
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function update(Request $request, $id)
    {
        $inventory = Inventory::findorFail($id);
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'quantity' => 'required',
        ]);

        $inventory = new Inventory();
        $inventory->name = $request->input('name');
        $inventory->location = $request->input('location');
        $inventory->Contact_phone = $request->input('Contact_phone');
        $inventory->Contact_email = $request->input('Contact_email');
        $inventory->save();

        return redirect()->route('manager.businesses.index');
    }

    /**
    * update function
    * 
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function destroy($id)
    {
        $business = Business::findorFail($id);
        $business->delete();

        return redirect()->route('manager.businesses.index');
    }
    /* delete function */
}
