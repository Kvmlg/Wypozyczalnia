<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $timestamps = false;
    public function create()
    {
        return redirect()->to('admin');
    }
    public function addCar(Request $request)
    {
        $Email = $request->input('Email');
        $password = $request->input('password');
        $Imie = $request->input('Imie');
        $NumerTelefonu = $request->input('NumerTelefonu');
        $Miasto = $request->input('Miasto');
        $Ulica = $request->input('Ulica');
        $NumerMieszkania = $request->input('NumerMieszkania');
        $Pesel = $request->input('Pesel');
        $Ranga = $request->input('Ranga');
        $Skrzynia = $request->input('Skrzynia');
        $Naped = $request->input('Naped');
        $Dokumenty_pojazdu_idDokumenty_pojazdu= $request->input('Dokumenty_pojazdu_idDokumenty_pojazdu');
        $data=array('Email'=>$Email, 'password'=>$password, 'Imie'=>$Imie,'NumerTelefonu'=>$NumerTelefonu,'Miasto'=>$Miasto,'Ulica'=>$Ulica,'NumerMieszkania'=>$NumerMieszkania,'Pesel'=>$Pesel,'Ranga'=>$Ranga,'Skrzynia'=>$Skrzynia,'Naped'=>$Naped,'Dokumenty_pojazdu_idDokumenty_pojazdu'=>$Dokumenty_pojazdu_idDokumenty_pojazdu);
        DB::table('samochod')->insert($data);

        
        return redirect()->to('admin');
    }

    public function deleteCar($id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }
        DB::delete('DELETE FROM samochod WHERE idSamochod = ?', [$id]);
        return redirect()->to('edit');
    }

    public function modCar(Request $request, $id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }

        $Email = $request->input('Email');
        $password = $request->input('password');
        $Imie = $request->input('Imie');
        $NumerTelefonu = $request->input('NumerTelefonu');
        $Miasto = $request->input('Miasto');
        $Ulica = $request->input('Ulica');
        $NumerMieszkania = $request->input('NumerMieszkania');
        $Pesel = $request->input('Pesel');
        $Ranga = $request->input('Ranga');
        $Skrzynia = $request->input('Skrzynia');
        $Naped = $request->input('Naped');
        $Dokumenty_pojazdu_idDokumenty_pojazdu= $request->input('Dokumenty_pojazdu_idDokumenty_pojazdu');
        $data=array('Email'=>$Email, 'password'=>$password, 'Imie'=>$Imie,'NumerTelefonu'=>$NumerTelefonu,'Miasto'=>$Miasto,'Ulica'=>$Ulica,'NumerMieszkania'=>$NumerMieszkania,'Pesel'=>$Pesel,'Ranga'=>$Ranga,'Skrzynia'=>$Skrzynia,'Naped'=>$Naped,'Dokumenty_pojazdu_idDokumenty_pojazdu'=>$Dokumenty_pojazdu_idDokumenty_pojazdu);

        DB::table('samochod')->where('idSamochod', $id)->update($data);
        return redirect()->to('edit');

    }

    public function deleteUser($id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }
        DB::delete('DELETE FROM users WHERE id = ?', [$id]);
        return redirect()->to('editUser');
    }

    public function modUser(Request $request, $id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }

        $Email = $request->input('Email');
        $password = $request->input('password');
        $password = bcrypt($password);
        $Imie = $request->input('Imie');
        $NumerTelefonu = $request->input('NumerTelefonu');
        $Miasto = $request->input('Miasto');
        $Ulica = $request->input('Ulica');
        $NumerMieszkania = $request->input('NumerMieszkania');
        $Pesel = $request->input('Pesel');
        $Ranga = $request->input('Ranga');
        $data=array('Email'=>$Email, 'password'=>$password, 'Imie'=>$Imie,'NumerTelefonu'=>$NumerTelefonu,'Miasto'=>$Miasto,'Ulica'=>$Ulica,'NumerMieszkania'=>$NumerMieszkania,'Pesel'=>$Pesel,'Ranga'=>$Ranga);

        DB::table('users')->where('id', $id)->update($data);
        return redirect()->to('editUser');

    }

    public function createDoc(Request $request)
    {
        $Rodzaj_ubezpieczenia = $request->input('Rodzaj_ubezpieczenia');
        $Waznosc_ubezpieczenia = $request->input('Waznosc_ubezpieczenia');
        $Koszt_ubezpieczenia = $request->input('Koszt_ubezpieczenia');
        $data=array('Rodzaj_ubezpieczenia'=>$Rodzaj_ubezpieczenia, 'Waznosc_ubezpieczenia'=>$Waznosc_ubezpieczenia, 'Koszt_ubezpieczenia'=>$Koszt_ubezpieczenia);
        DB::table('dokumenty_pojazdu')->insert($data);

        
        return redirect()->to('addDoc');
    }

    public function deleteDoc($id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }
        DB::delete('DELETE FROM dokumenty_pojazdu WHERE idDokumenty_pojazdu = ?', [$id]);
        return redirect()->to('editDoc');
    }

    public function modDoc(Request $request, $id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }

        $Rodzaj_ubezpieczenia = $request->input('Rodzaj_ubezpieczenia');
        $Waznosc_ubezpieczenia = $request->input('Waznosc_ubezpieczenia');
        $Koszt_ubezpieczenia = $request->input('Koszt_ubezpieczenia');
        $data=array('Rodzaj_ubezpieczenia'=>$Rodzaj_ubezpieczenia, 'Waznosc_ubezpieczenia'=>$Waznosc_ubezpieczenia, 'Koszt_ubezpieczenia'=>$Koszt_ubezpieczenia);
        DB::table('dokumenty_pojazdu')->where('idDokumenty_pojazdu', $id)->update($data);
        return redirect()->to('editDoc');

    }
}
