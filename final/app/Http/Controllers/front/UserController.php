<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password)) {
            if ($request->current_password === $request->password) {
                return back()->with('password_mismatch', 'New password must be different from the current password.');
            }
            

            $user->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('client.home')->with('success', 'Password updated successfully.');
        } else {
            return back()->with('password_mismatch', 'Current password is incorrect.');
        }
    }
}
