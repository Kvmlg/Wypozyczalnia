<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function admin(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $car=DB::table('samochod')->get();
        return view('panelAdmin',compact('car'));
    }
}
