<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Hash;
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

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $updated = $user->update($request->except('_token'));

        if ($updated) {
            return redirect('/members');
        }
        
        return back();
    }

    public function changePassword()
    {
        return view('user.change-password');
    }

    public function submitChangePassword(ChangePasswordRequest $request)
    {
        //dd($request);
        $credentials = [
            'email' => Auth::user()->email,
            'password' => $request->current_password
        ];

        if (Auth::attempt($credentials)) {
            Auth::user()->password = Hash::make($request->new_password);
            Auth::user()->save();

            return back()->with('message', 'Password Changed');
        }

        return back()->with('message', 'Please make sure that you entered your current password correctly.');
    }
}