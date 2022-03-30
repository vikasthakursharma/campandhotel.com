<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Auth;

class BackendController extends Controller
{

    public function index(){
        $user = Auth::first();

        $data = compact('user');

        return view('backend.index')->with($data);
    }
}
