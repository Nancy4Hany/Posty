<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->password);
        //validation
        //?why there's a dollar sign before this
        $this->validate($request, [
            'name'=> 'required|max:255',
            'username'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'password'=> 'required|confirmed'
        ]);
        //?dd meant to be like an else condition after if, but i see it as a line that will be executed anyway
        dd('store');
        //store user
        //sign the user in
        //redirect
    }
}
