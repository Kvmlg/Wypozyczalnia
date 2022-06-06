<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $car=DB::table('samochod')->orderBy('idSamochod', 'desc')->paginate(6);
        return view('addCar',compact('car'));
    }

    public function editCar(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $car=DB::table('samochod')->orderBy('idSamochod', 'desc')->paginate(6);
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
        $user=DB::table('users')->orderBy('id', 'desc')->paginate(6);
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
        $doc=DB::table('dokumenty_pojazdu')->orderBy('idDokumenty_pojazdu', 'desc')->paginate(6);
        return view('addDocuments',compact('doc'));
    }

    public function editDoc(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $doc=DB::table('dokumenty_pojazdu')->orderBy('idDokumenty_pojazdu', 'desc')->paginate(6);
        return view('manageDocuments',compact('doc'));
    }

    public function modDoc($id){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $doc=DB::table('dokumenty_pojazdu')->where('idDokumenty_pojazdu', $id)->get();
        return view('editDocuments', compact('doc'));
    }

    public function reserve(Request $request,$id){
        if((Auth::check() && (Auth::user()->Ranga  == "Admin" || Auth::user()->Ranga  == "User"))==false){
            return back()->withErrors([
                'message' => 'Aby zarezerwować pojazd musisz się zalogować!'
            ]);
        }
        
        $Data_wypozyczenia = $request->input('Data_wypozyczenia');
        $Data_zwrotu = $request->input('Data_zwrotu');
        $Data_wypozyczeniaa=$Data_wypozyczenia;
        $Data_zwrotu1=date('Y-m-d', strtotime("+1 day", strtotime(str_replace('/', '-', $Data_zwrotu))));
        str_replace('/', '-', $Data_wypozyczeniaa);
        $date=DB::table('szczegoly_najmu')->where('Samochod_idSamochod', $id)->get();

        foreach($date as $dates){ 
            while($Data_wypozyczeniaa !== $Data_zwrotu1){ 
                if(($Data_wypozyczeniaa >= str_replace('/', '-', $dates->Data_wypozyczenia))&&($Data_wypozyczeniaa <= str_replace('/', '-', $dates->Data_zwrotu))){
                    return back()->withErrors([
                        'message' => 'Termin zajety!'
                    ]);
                }
                $Data_wypozyczeniaa=date('Y-m-d', strtotime("+1 day", strtotime($Data_wypozyczeniaa)));
            }
        }
            $Samochod_idSamochod=$id;
            $Users_idUsers=auth()->user()->id;
            $data=array('Data_wypozyczenia'=>$Data_wypozyczenia, 'Data_zwrotu'=>$Data_zwrotu, 'Samochod_idSamochod'=>$Samochod_idSamochod,'Users_idUsers'=>$Users_idUsers);
            DB::table('szczegoly_najmu')->insert($data);
            return back();
        
    }

    public function editRent(){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $show=DB::table('szczegoly_najmu')->join('samochod', 'szczegoly_najmu.Samochod_idSamochod', '=', 'samochod.idSamochod')->join('users', 'szczegoly_najmu.Users_idUsers', '=', 'users.id')->select('szczegoly_najmu.*', 'samochod.Marka','samochod.Model','users.Imie','users.Miasto','users.NumerTelefonu','users.Email')->orderBy('idSzczegoly_najmu', 'desc')->paginate(6);
        return view('manageRent',compact('show'));
    }

    public function modRent($id){
        if((Auth::check() && Auth::user()->Ranga == "Admin")==false){
            return redirect()->to('/login');
        }
        $rent=DB::table('szczegoly_najmu')->where('idSzczegoly_najmu', $id)->get();
        return view('editRent', compact('rent'));
    }
}

