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

    public function deleteRent($id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }
        DB::delete('DELETE FROM szczegoly_najmu WHERE idSzczegoly_najmu = ?', [$id]);
        return redirect()->to('editRent');
    }

    public function modRent(Request $request, $id)
    {
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
        return redirect()->to('login');
        }

        $Data_wypozyczenia = $request->input('Data_wypozyczenia');
        $Data_zwrotu = $request->input('Data_zwrotu');
        $Samochod_idSamochod = $request->input('Samochod_idSamochod');
        $Users_idUsers = $request->input('Users_idUsers');
        $Stan = $request->input('Stan');
        $data=array('Data_wypozyczenia'=>$Data_wypozyczenia, 'Data_zwrotu'=>$Data_zwrotu, 'Samochod_idSamochod'=>$Samochod_idSamochod, 'Users_idUsers'=>$Users_idUsers, 'Stan'=>$Stan);
        
        DB::table('szczegoly_najmu')->where('idSzczegoly_najmu', $id)->update($data);
        return redirect()->to('editRent');

    }
}
