<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        return view('front.faq');
    }
}
