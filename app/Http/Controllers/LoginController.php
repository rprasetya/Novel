<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); 
        }
        
        return back()->with('loginError','The provided credentials do not match our records !');
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); 
    }

    public function deleteAccount(Request $request){
        $user = Auth::user();

        if ($user) {
            $user->delete();
            Auth::logout();
            return redirect('/')->with('success', 'Account Deleted');
        } 
        else {
            return redirect('/')->with('error', 'Delete Account Failed');
        }
    }

}
