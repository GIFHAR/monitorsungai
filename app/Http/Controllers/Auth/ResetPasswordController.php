<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('resetpassword')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }


}
