<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use App\Models\post;

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

    public function add_post(Request $request)
    {
       $post=new post; //from post model

       $post->title=$request->title;
       $post->description=$request->description;
       $post->save();
       return redirect()->back();
    }
}