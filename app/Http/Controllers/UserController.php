<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->get();
        return view('user.index', ['users' => $users]);
    }

    public function getProfile()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $updated = $user->update($request->except('_token'));

        if ($updated) {
            return redirect('/members');
        }
        
        return back();
    }

}