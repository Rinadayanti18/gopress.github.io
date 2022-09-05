<?php

namespace App\Http\Controllers;
use App\Models\Post;
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

    public function edit()
    {
        return view('profileFolder.edit',[
            "title" => "Edit"
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $rules =[
            'name' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['id'] = auth()->user()->id;

        User::where('id', $post->id)
                ->update($validatedData);
                return redirect('/')->with('succes', 'update berhasil   ');
        
    }
}
