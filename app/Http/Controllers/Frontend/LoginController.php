<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.login');
    }

    public function UserDashboard(){
        return view('frontend.user-dashboard');
    }

    public function login(Request $request){

        $email = $request['email'];

        $password = $request['password'];

            $request->validate([
                        'password'=>'required',
                        'email'=>'required'
            ]);

        $result = Auth::where(['email'=>$email])->first();


        if(!empty($result)){

            if(Hash::check($password, $result->password))
            {
                $user = array(
                    'user_name' => $result->name,
                    'user_email' => $result->email,
                    'user_role'=>$result->role,
                    'active' => true
                );

                // put user data into session after login
                $request->session()->put('user', $user);
            }else{

                $request->session()->flash('error','Please enter valid password');
                return redirect('/login');
            }

        }else{
            $request->session()->flash('error','Invalid credentails');
            return redirect('/login');
        }
        return redirect('/user/dashboard');

    }

    public function logout(request $request){
        // delete user data from session after logout
        $request->session()->forget('user');
        return redirect('/admin');
    }
}
