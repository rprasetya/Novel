<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BookshelfController extends Controller
{
    public function bookshelf(){
        $books = DB::select('select * from velshelf');
        $comments = DB::select('select * from userComments');
        return view (
            'bookshelf',['books' => $books],['comments' => $comments]
        );
    }

    public function comment(Request $request){ 
        $user = auth()->user();

        $validated = $request->validate([
            'comment' => 'required|string',
        ]);
        $validated['username'] = $user->username;
        $validated['email'] = $user->email;  
        $validated['date'] = now()->format('d-m-Y');
        $validated['created_at'] = now()->format('H:i:s');

        DB::table('userComments')->insert([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'comment' => $validated['comment'],
            'date' => $validated['date'],
            'created_at' => $validated['created_at'],
        ]);
        return redirect('/bookshelf');
    }
}
