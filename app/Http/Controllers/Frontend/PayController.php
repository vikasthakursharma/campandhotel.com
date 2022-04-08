<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PayController extends Controller
{
    //
    public function index()
    {
        return view('frontend.checkout');
    }

    public function paymentProcess(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required|digits:10'
        ]);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                array("X-Api-Key:test_27a0bbdea98cefffcf1304edc22",
                "X-Auth-Token:test_67d1f1a9751a1c44afcf60dac0d"));
        $payload = Array(
            'purpose' => 'Tent Booking',
            'amount' => 10,
            'phone' => $request->phone,
            'name' => $request->name,
            'redirect_url' => 'http://localhost:8000/payment-success',
            'send_email' => true,
            'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => $request->email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response);

        return redirect($response->payment_request->longurl);
    }

    public function paymentSuccess(Request $request){

        $input = $request->all();

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payments/'.$request->get('payment_id'));
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:test_27a0bbdea98cefffcf1304edc22",
                    "X-Auth-Token:test_67d1f1a9751a1c44afcf60dac0d"));

        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            \Session::put('error','Payment Failed, Try Again!!');
            return redirect()->route('payment');
        } else {
            $data = json_decode($response);
        }

        if($data->success == true) {
            if($data->payment->status == 'Credit') {

                // Here Your Database Insert Login
                $input['name'] = $data->payment->buyer_name;
                $input['email'] = $data->payment->buyer_email;
                $input['mobile'] = $data->payment->buyer_phone;
                $input['amount'] = $data->payment->amount;
                Payment::create($input);

                \Session::put('success','Your payment has been pay successfully, Enjoy!!');
                return redirect()->route('payment');

            } else {
                \Session::put('error','Payment Failed, Try Again!!');
                return redirect()->route('payment');
            }
        }
    }

}
