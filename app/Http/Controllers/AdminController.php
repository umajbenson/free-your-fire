<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
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
    
        return view('admin.index');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersIndex()
    {
    $users = User::all();
    //dd($users);
        return view('admin.users-index')->with(compact('users'));
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

    public function editUser($id) {
        $user = User::where('id', $id)->first();
        $rolesArray = [];
        $roles = Role::all();

        foreach($roles as $role) {
            $rolesArray = $rolesArray + [$role->id => $role->name];
        }

        return view('admin.users-edit')->with(compact('user'))->with(compact('rolesArray'));
    }

    public function updateUser($id, Request $request)
    {
        $user = User::where('id', $id)->first();
        $update = $user->update($request->except('_token'));

        if($update) {
            return back()->with('message', 'Successfully Updated');
        }
        dd($request);
    }
}
