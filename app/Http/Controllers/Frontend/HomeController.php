<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {
        // get active banner
        $banner = Banner::where('active', true)->first();

        $data = compact('banner');
        
        return view('frontend.index')->with($data);
    }
}
