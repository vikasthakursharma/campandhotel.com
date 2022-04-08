<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentController extends Controller
{
    public function index(){
        return view('frontend.tent');
    }

    //function to view the faq page
    public function faq_page(){
        return view('frontend.faq');
    }
    //function to view the tent details
    public function single_tent_details_withfood(){

        return view('frontend.single-tent-detail-with-food');
    }
    public function single_tent_details_withouthfood(){

        return view('frontend.single-tent-detail-without-food');
    }
    public function single_tent_details_groupwithfood(){


        return view('frontend.single-tent-detail-group-with-food');
    }
    public function single_tent_details_groupedwithoutfood(){

        return view('frontend.single-tent-detail-group-without-food');
    }

}
