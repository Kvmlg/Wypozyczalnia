<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public $loginl;
    public $rola;
    public $ID;

    public function login(){
        $log=$_GET['login'];
        $haslo=$_GET['haslo'];

        $uzytkownik=DB::table('uzytkownicy')->where('Login', $log)->first();
        $this->login=$uzytkownik->Login;
        $hasloBaza=$uzytkownik->Haslo;
        $this->rola=$uzytkownik->Rola;
        $this->ID=$uzytkownik->ID_Uzytkownik;

        if($this->login == $log && $hasloBaza == $haslo){
            if(session_start()==PHP_SESION_NONE){
                session_start();
            }
            $_SESSION["newsession"]=$this->rola;
            $_SESSION["login"]=$this->login;
            $_SESSION["id"]=$this->ID;
            return view('login', ['rola=>$this->rola']);
        }else{
            return view('login');
        }
    }
}
