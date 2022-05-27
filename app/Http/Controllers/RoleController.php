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
        return view('addCar',compact('car'));
    }

    public function editCar(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $car=DB::table('samochod')->get();
        return view('managCar',compact('car'));
    }

    public function modCar($id){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $car=DB::table('samochod')->where('idSamochod', $id)->get();
        return view('editCar', compact('car'));
    }

    public function editUser(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $user=DB::table('users')->get();
        return view('managUser', compact('user'));
    }

    public function modUser($id){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $user=DB::table('users')->where('id', $id)->get();
        return view('editUser', compact('user'));
    }

    public function createDoc(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $doc=DB::table('dokumenty_pojazdu')->get();
        return view('addDocuments',compact('doc'));
    }

    public function editDoc(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $doc=DB::table('dokumenty_pojazdu')->get();
        return view('manageDocuments',compact('doc'));
    }

    public function modDoc($id){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $doc=DB::table('dokumenty_pojazdu')->where('idDokumenty_pojazdu', $id)->get();
        return view('editDocuments', compact('doc'));
    }
}

