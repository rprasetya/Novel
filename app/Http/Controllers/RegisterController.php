<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class RegisterController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'fullName' => 'required|max:255',
            'email' => 'required|unique:Accounts|email|max:255',
            'username' => 'required|unique:Accounts|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        Account::create($validated);
        return redirect('/login');
    }
}
