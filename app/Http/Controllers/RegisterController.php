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
            'Pesel' => ''
        ],[
            'Email.required' => "Wprowadź adres email",
            'password.required' => "Wprowadź haslo",
            'Imie.required' => "Wprowadź imie",
            'NumerTelefonu.required' => "Wprowadź numer telefonu",
            'Miasto.required' => "Wprowadź miasto zamieszkania",
            'Ulica.required' => "Wprowadź ulicę zamieszkania",
            'NumerMieszkania.required' => "Wprowadź numer swojego mieszkania",
            'Pesel.required' => "Wprowadź pesel"
        ]);
        


        $user = User::create(request(['Email', 'password', 'Imie','NumerTelefonu','Miasto','Ulica','NumerMieszkania','Pesel']));

        
        auth()->login($user);
        
        return redirect()->to('/');
    }
}
