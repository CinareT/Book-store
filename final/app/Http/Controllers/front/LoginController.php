<?php

namespace App\Http\Controllers\front;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('front.login');
    }
    // public function login(Request $request){
    //     //$created = User::create($request->all());
    //     // dd($request->all());

    // }

     public function login(Request $request)
 {
 $credentials = $request->only('email', 'password');
//  $credentials['is_active']=0;
 $remember = $request->has('remember');

 if (Auth::attempt($credentials, $remember)) {
 return redirect()->route('client.home');
 } else {
 return back()->with('error', "email or password invalid");
 }
 }

 
}