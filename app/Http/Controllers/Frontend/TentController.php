<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentController extends Controller
{
    public function index(){
        return view('frontend.tent');
    }

    //function to view the tent details
    public function single_tent_details(){
        return view('frontend.single-tent-detail');
    }
}
