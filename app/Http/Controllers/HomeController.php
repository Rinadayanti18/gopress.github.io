<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;

class HomeController extends Controller
{
    public function index()
    {
        return view('profileFolder.dashboard',[
            "title" => "Dashboard"
        ]);
    }

    public function profil()
    {
        return view('profileFolder.profil',[
            "title" => "Profil"
        ]);
    }

    public function update($id)
    {
        return Member::find($id);
    }
}
