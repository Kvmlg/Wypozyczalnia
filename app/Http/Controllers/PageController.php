<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

    public function detaill($id){

        if(isset($_POST['value'])){
            $date=DB::table('szczegoly_najmu')->where('Samochod_idSamochod', $id)->get();
            $data = new DateTime(date("Y").$value);
            foreach($date as $dates){  
            $wypo=$dates->Data_wypozyczenia;
            $newDate = date("Y-m", strtotime($wypo));
            if($newDate==$data){
            $return=$dates->Data_zwrotu;
            $newDateRet = date("Y-m", strtotime($return));
                if($newDateRet==$data){
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
                    echo json_encode($all);
                }
            
        
        }
        
        return view('login');
    }}

    public function rents(){
        Auth::check();
        $idUs= Auth::user()->id;
        $days = array();
        $show=DB::table('szczegoly_najmu')->where('Users_idUsers', $idUs)->join('samochod', 'szczegoly_najmu.Samochod_idSamochod', '=', 'samochod.idSamochod')->select('szczegoly_najmu.*', 'samochod.Marka','samochod.Model','samochod.Cena')->get();
        
        foreach($show as $shows){
            $wypo=Carbon::create($shows->Data_wypozyczenia);
            $zwrot=Carbon::create($shows->Data_zwrotu);
            $diff=$wypo->diffInDays($zwrot);
            array_push($days, $diff);
        }

        return view('Rents', compact('show', 'days'));
    }

    public function search(Request $request){
        $ask=$request->input('ask');
        $show=DB::table('samochod')->where('Marka', $ask)->paginate(6);
        if(count($show)==0){
            $show=DB::table('samochod')->where('Model', $ask)->paginate(6);
            return view('overview', compact('show')); 
        }
        return view('overview', compact('show'));
    }
}