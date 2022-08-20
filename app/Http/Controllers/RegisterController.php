<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
   public function index()
   {
    return view('loginFolder.signUp', [
        'title' => 'Sign Up'
    ]);
   }

   public function store(Request $request)
   {
    $validatedData = $request -> validate([
        'name' => 'required|max:255',
        'username' => ['required', 'min:3' ,'max:15', 'unique:users'],
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:8|max:255'
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);
    // dd('registrasi berhasil');
    User::create($validatedData);

    
    return redirect('/signin')->with('succes', 'Registration succesfull! Please login');
   }

   //perintah with('succes', 'Registration succesfull! Please login')
   //bisa diganti dengan perintah $request->session()->flash('success','Registration successfull! Please Login');

}
