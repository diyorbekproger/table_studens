<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\support\Facades\Auth;
use App\Models\User;
class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/index');

    }

    public function store(Request $request){
        $user = User::create([
            'fullname' =>$request-> name,
            'email' =>$request-> email,
            'password'=>$request->password
         ]);

        Auth::login($user);

        return redirect('/dashboard');

    }
}
