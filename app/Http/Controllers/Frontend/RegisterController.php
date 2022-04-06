<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index(){
        return view('frontend.register');
    }

    public function register_user(){
        return view('frontend.register');
     }


    //user Register  in main site
    public function register(Request $request){

        $auth = new Auth;
        $auth->name = $request['name'];

        $auth->email = $request['email'];
        $auth->password = Hash::make($request['password']);
        $request->validate([
                        'name'=>'required|string|',
                        'email'=>'required|unique:users',
                        'password' => ['required',Password::min(8)],
        ]);
        $auth->save();
        //sendRegisterUserEmail($auth->name, $auth->email,$request['password']);

        //send notification to admin when new user registered
       // $user = Auth::first();
        //$notification = $user->notifications;
        //$user->notify(new NewAdminRegisterNotify($user));

        return redirect('/login')->with('status', 'You are Register successfully check your email id to login credentials!');
    }
}
