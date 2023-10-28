<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request){
        $existingUserEmail = User::where('email', $request['email'])->first();
        if ($existingUserEmail) {
            $request->session()->flash('error', 'Email already registered.');
            // return redirect()->back();
        }

        $existingUser = User::where('username', $request['username'])->first();
        if ($existingUser) {
            $request->session()->flash('error', 'Username already taken.');
            // return redirect()->back(); 
        }

        $validated = $request->validate([
            'fullName' => 'required|max:255',
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:8|max:255'
        ]);


        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        $request->session()->flash('success', "Register Succesfully !");

        return redirect('/login');
    }
}
