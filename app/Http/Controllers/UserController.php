<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register(){
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request){
        $request -> validate([
            'name' => 'required|min:3',
            'email' => 'email|required|unique:tb_user',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|same:password',
            'address' => 'required|min:5',
            'Gender' => 'accepted',
            'Term of Service' => 'accepted'
        ]);

        $user = new User([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request -> email),
            'address' => $request -> address,
        ]);

        $user -> save();
        return redirect() -> route('login') -> with('success', 'Registration success!');
    }

    public function login(){
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request){
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if(Auth::attempt (['email' => $request -> email, 'password' => $request -> password])){
            $request -> session() -> regenerate();
            return redirect() -> intended('/');
        }
        return back() -> withErrors(['password' => 'Wrong Email or password!']);
    }
}
