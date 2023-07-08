<?php

namespace App\Http\Controllers;

use App\Models\CheckoutModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        return view('checkout');
    }

    
    public function processCheckout(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
            'credit_card_name' => 'required',
            'credit_card_number' => 'required',
            'credit_card_expiration' => 'required',
            'credit_card_cvv' => 'required',
        ]);

        // Simpan data ke database
        $order = new CheckoutModel();
        $order->user_id = auth()->user()->id;
        $order->first_name = $validatedData['first_name'];
        $order->last_name = $validatedData['last_name'];
        $order->username = $validatedData['username'];
        $order->email = auth()->user()->email;
        $order->address = $validatedData['address'];
        $order->address2 = $request->input('address2');
        $order->payment_method = $validatedData['payment_method'];
        $order->credit_card_name = $validatedData['credit_card_name'];
        $order->credit_card_number = $validatedData['credit_card_number'];
        $order->credit_card_expiration = $validatedData['credit_card_expiration'];
        $order->credit_card_cvv = $validatedData['credit_card_cvv'];
        $order->save();

        // Tampilkan pesan berhasil dan redirect ke halaman sukses
        return redirect()->route('success')->with('success', 'Checkout successful.');
    }

    public function success()
    {
        return view('success');
    }


}
