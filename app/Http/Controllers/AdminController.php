<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::all();
       //dd($users);
        return view('admin.index')->with(compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::where('id', $id)->first();
        $delete = User::destroy($id);

        if ($delete) {
            return back();
        }
        dd($user);
    }
}
