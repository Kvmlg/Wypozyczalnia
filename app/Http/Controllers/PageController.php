<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function showCars(){
        $show=DB::table('samochod')->orderBy('idSamochod', 'desc')->get();
        
            $ilosc = 0;
            foreach ($show as $wynik)
            {
                $ilosc=$ilosc+1;
            }
        return view('welcome', compact('show','ilosc'));
    }

    public function showCarsView(){
        $show=DB::table('samochod')->paginate(6);;

        return view('overview', compact('show'));
    }

    public function detail($id){
        $car=DB::table('samochod')->where('idSamochod', $id)->get();
        return view('detail', compact('car'));
    }
}