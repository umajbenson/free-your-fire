<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->get();
        return view('user.index', ['users' => $users]);
    }
}
