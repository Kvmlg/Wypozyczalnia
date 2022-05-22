<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public $timestamps = false;
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        
        $this->validate(request(), [
            'Email' => 'required|email',
            'password' => 'required',
            'Imie' => 'required',
            'NumerTelefonu' => 'required',
            'Miasto' => 'required',
            'Ulica' => 'required',
            'NumerMieszkania' => 'required',
            'Pesel' => 'required'
        ]);
        
        $user = User::create(request(['Email', 'password', 'Imie','NumerTelefonu','Miasto','Ulica','NumerMieszkania','Pesel']));
        
        auth()->login($user);
        
        return redirect()->to('/');
    }
}
