<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalonSiswaModel;
use App\Models\OrderModel;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function index ()
    {
        return view('user.order');
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();
        $id_user = $user->id;

        $dataOrder = OrderModel::where('id_user', $id_user)->first();

        if($dataOrder)
        {
            $order = OrderModel::where('id_user', $id_user)->first();
        } else {
            $order = OrderModel::create([
                'id_user' => $id_user,
                'total_price' => 200000,
                'status' => "Unpaid"
            ]);
        }
        

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'id_user' => $order->id_user,
                'name' => $user->nama_lengkap,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('user.checkout', compact('snapToken', 'order'));
    }

    public function callback(Request $request)
    {
         $serverKey = config('midtrans.server_key');
         $hashed = hash('sha512', $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
         if($hashed == $request->signature_key)
         {
            if($request->transaction_status == 'capture')
            {
                $order = OrderModel::find($request->order_id);
                $order->update(['status'=>'Paid']);
            }
         }
    }
}
