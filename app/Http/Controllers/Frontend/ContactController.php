<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\ContactModel;


class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }

    //
    public function contact_us_query(Request $request){
        $Contact = new ContactModel;
        $Contact->name = $request['name'];

        $Contact->email = $request['email'];
        $Contact->subject = $request['subject'];
        $Contact->phone = $request['phone'];
        $Contact->msg = $request['msg'];
        $Contact->save();
        return redirect('contact-us')->with('status','Your Query Send Successfully!');

    }
}
