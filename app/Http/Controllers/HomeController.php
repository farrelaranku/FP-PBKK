<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;
use App\Models\News;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            $doctors = doctor::all();
            $news = news::all();
            if(Auth::user()->usertype=='0')
            {
                return view('user.home', compact('doctors', 'news'));
            }
            else 
            {
                return view('admin.home', compact('doctors', 'news'));
            }
        }
        else{
            return redirect()->back();
        }
    }
public function index()
{
    if(Auth::id())
    {
        return redirect('home');
    }
    else
    {
     $doctors = doctor::all();
     $news = news::all();
     return view('user.home', compact('doctors', 'news'));
    }
    
}

}
