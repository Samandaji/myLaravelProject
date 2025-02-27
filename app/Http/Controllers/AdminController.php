<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth; 

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype; 

            if ($usertype == 'user') {
                return view('dashboard');
            } elseif ($usertype == 'admin') {
                return view('admin.index'); 
            } else {
                return redirect()->back();
            }
        }

         Auth::logout();
         return redirect('/login');
        // return redirect('/login'); 
    }
    public function post_page()
    {
        return view('admin.post_page');

    }
}
