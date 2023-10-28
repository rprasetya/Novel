<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\user_comments;

class BookshelfController extends Controller
{
    public function bookshelf(){
        $books = DB::select('select * from velshelf');
        $comments = user_comments::all();
        $users = User::all();
        return view (
            'bookshelf',[
                'books' => $books,
                'comments' => $comments,
                'users' => $users
            ]
        );
    }

    public function comment(Request $request){ 
        $user = auth()->user();

        $validated = $request->validate([
            'comment' => 'required|string',
        ]);
        $validated['user_id'] = $user->id;
        $validated['date'] = now()->format('d-m-Y');
        $validated['created_at'] = now()->format('H:i:s');

        DB::table('user_comments')->insert([
            'user_id' => $validated['user_id'],
            'comment' => $validated['comment'],
            'date' => $validated['date'],
            'created_at' => $validated['created_at'],
        ]);
        return redirect('/bookshelf');
    }
}
