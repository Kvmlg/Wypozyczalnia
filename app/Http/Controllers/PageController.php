<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $all = array();

        $date=DB::table('szczegoly_najmu')->where('Samochod_idSamochod', $id)->get();
        foreach($date as $dates){
        $wypo=$dates->Data_wypozyczenia;
        $return=$dates->Data_zwrotu;
        $wypoAr=str_split($wypo, 1);
        $returnAr=str_split($return, 1);
        $day=$wypoAr[8].$wypoAr[9];
        $dayRet=$returnAr[8].$returnAr[9];
        $da=(int)$day;
        $daRet=(int)$dayRet;
        for($i=$da; $i <=$daRet; $i++){
        array_push($all, $i);
        }
        sort($all);
        }
        
        return view('detail', compact('car','all'));
    }
}