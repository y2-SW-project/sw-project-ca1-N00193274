<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $home = 'home';

        if($user->hasRole('manager')){
            $home = 'manager.home';
        }
        else if ($user->hasRole('employee')){
            $home = 'employee.home';
        }
        else if ($user->hasRole('owner')){
            $home = 'owner.home';
        }
        else if ($user->hasRole('warehousestaff')){
            $home = 'warehouse.home';
        }
        return redirect()->route($home);
    }
}
