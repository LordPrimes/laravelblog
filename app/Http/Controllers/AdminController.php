<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Policies\AuthPolicy;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    

    public function index()
    {
        return view('login');
    }

    public function adminpages()
    {
        return AuthPolicy::guest();
    }

    public function cheked(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');

        if (Auth::attempt(['name' => $name, 'password' => $password]))
        {
            return redirect()->route('admin');
        }
        else 
        {
            return 1233;
        }

     
    }
}
