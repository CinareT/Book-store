<?php

namespace App\Http\Controllers\front;

use App\Models\User;

use App\Http\Requests\register\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index() {
        return view('front.register');
    }


    public function register(RegisterRequest $request) {
        $created = User::create($request->all());
      
        if($created) {
            return redirect()->route('auth.signin');
           
        } else {
            dd('error');
        }
        
    }
}
