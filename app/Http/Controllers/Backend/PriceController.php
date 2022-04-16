<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\PriceModel;

class PriceController extends Controller
{
    public function index(){
        $title = "Add Price";
        $url = url('/admin/banner/add/');
        $data = compact('url', 'title');
        return view('backend.add-price')->with($data);
    }

    public function add_price(Request $request){

        $price = new PriceModel;
        $price->food_type = $request['food_type'];

        $price->tent_type = $request['tent_type'];
        $price->price = $request['price'];
        $price->save();
        return redirect('/admin/price/');
    }

    public function view_price(){
        $search = $request['search'] ?? "";
        if ($search != '') {
            $price = PriceModel::where('price', 'LIKE', "%$search%")->paginate(5);
        } else {
            $price = PriceModel::paginate(5);
        }
        $data = compact('price');
        return view('backend.view-price')->with($data);
    }

}
