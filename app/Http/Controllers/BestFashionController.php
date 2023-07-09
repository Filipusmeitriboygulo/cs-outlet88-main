<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BestFashionController extends Controller
{
    public function best_fashion () {
        return view('best_fashion');
    }
}
