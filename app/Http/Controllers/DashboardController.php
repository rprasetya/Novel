<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    public function dashboard(){
        return view ('dashboard.user');
    }

    public function changePassword(){
        return view ('dashboard.changePassword');
    }
    
    public function changePasswordConfirm(Request $request){
        $password = $request->validate([
            'currentPassword' => 'required|min:8',
            'newPassword' => 'required|min:8',
        ]);

        $user = Auth::user();
        
        if (Hash::check($password['currentPassword'], $user->password)) {
            $user->update([
                'password' => bcrypt($password['newPassword'])
            ]);
            return redirect('/'); 
        }

        return back()->with('error', 'Your current password is incorrect');
        // User::update($password);
    }
}