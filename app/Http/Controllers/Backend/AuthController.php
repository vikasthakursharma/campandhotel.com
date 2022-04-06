<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Backend\BannerController;
use Mail;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

use App\Notifications\NewAdminRegisterNotify;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    //
    public function index(){
        return view('backend.login');
    }

    public function login(Request $request){

        $email = $request['email'];

        $password = $request['password'];

        $result = Auth::where(['email'=>$email])->first();


        if(!empty($result)){

            if(Hash::check($password, $result->password))
            {
                $user = array(
                    'user_name' => $result->name,
                    'user_email' => $result->email,
                    'active' => true
                );

                // put user data into session after login
                $request->session()->put('user', $user);

               return redirect('/admin/home');

            }else{

                $request->session()->flash('error','Please enter valid password');
                return redirect('/admin');
            }

        }else{
            $request->session()->flash('error','Invalid credentails');
        }

        return redirect('/admin');
    }

    public function logout(request $request){
        // delete user data from session after logout
        $request->session()->forget('user');
        return redirect('/admin');
    }

    public function register_user(){
       return view('backend.register');
    }

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
        $auth->role= 1;
        $auth->save();
        sendRegisterUserEmail($auth->name, $auth->email,$request['password']);

        //send notification to admin when new user registered
        $user = Auth::first();
        $notification = $user->notifications;
        $user->notify(new NewAdminRegisterNotify($user));

        return redirect('/admin')->with('status', 'Admin Register successfully check your email id to login credentials!');
    }

    //notifcation to the admin mark as read function

    public function notificationMarkAsRead($id){
        if($id){
             $user = Auth::first();
             $notification = $user->notifications;

             $user->notifications->where('id',$id)->markAsread();
              return redirect()->back();
        }
    }

}
