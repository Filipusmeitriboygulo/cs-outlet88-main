<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyNowController extends Controller
{
    public function buy_now () {
        return view('buy_now');
    }
}
