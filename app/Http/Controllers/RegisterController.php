<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
       
        return view('register.index',[

            'title'=>'Register'
        ]);
    }

    public function store(Request $request){

        // return $request -> all();
        
        $validatedData = $request -> validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd('Register Berhasil');
        User::create($validatedData);

        return redirect('/login')->with('success', 'Data berhasil disimpan!');
    }
}
