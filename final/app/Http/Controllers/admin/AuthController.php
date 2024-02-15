<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        
        return view('admin.adminLogin');
    }

    public function auth(Request $request)
    {
     $credentials = $request->only('email', 'password');

     $credentials['is_active']=1;
     $credentials['is_admin']=1;
$remember = $request->has('remember');




if (Auth::attempt($credentials, $remember)) {
    $request->session()->regenerate();
return redirect()->intended('store.dashboard');
} else {
return back()->with('error', "email or password invalid");
};
       
    }

    public function logout(Request $request){
         $request->session()->invalidate();
         $request->session()->regenerateToken();
        return redirect('/store');
    }
}