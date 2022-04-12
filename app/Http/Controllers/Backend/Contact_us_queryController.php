<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\ContactModel;

class Contact_us_queryController extends Controller
{
    //
    public function Contact_us_queries()
    {
        // get all banner
        $queries = ContactModel::paginate(5);
        $data = compact('queries');

        return view('backend.contact_queries')->with($data);
    }

}
