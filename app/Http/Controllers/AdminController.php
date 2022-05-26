<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public $timestamps = false;
    public function create()
    {
        return redirect()->to('admin');
    }
    public function addCar(Request $request)
    {
        $Marka = $request->input('Marka');
        $Model = $request->input('Model');
        $Moc = $request->input('Moc');
        $Rok_Produkcji = $request->input('Rok_Produkcji');
        $Pojemnosc_silnika = $request->input('Pojemnosc_silnika');
        $Numer_rejestracyjny = $request->input('Numer_rejestracyjny');
        $Photo = $request->input('Photo');
        $Cena = $request->input('Cena');
        $Czas = $request->input('Czas');
        $Skrzynia = $request->input('Skrzynia');
        $Naped = $request->input('Naped');
        $Dokumenty_pojazdu_idDokumenty_pojazdu= $request->input('Dokumenty_pojazdu_idDokumenty_pojazdu');
        $data=array('Marka'=>$Marka, 'Model'=>$Model, 'Moc'=>$Moc,'Rok_Produkcji'=>$Rok_Produkcji,'Pojemnosc_silnika'=>$Pojemnosc_silnika,'Numer_rejestracyjny'=>$Numer_rejestracyjny,'Photo'=>$Photo,'Cena'=>$Cena,'Czas'=>$Czas,'Skrzynia'=>$Skrzynia,'Naped'=>$Naped,'Dokumenty_pojazdu_idDokumenty_pojazdu'=>$Dokumenty_pojazdu_idDokumenty_pojazdu);
        DB::table('samochod')->insert($data);

        
        return redirect()->to('admin');
    }
}
