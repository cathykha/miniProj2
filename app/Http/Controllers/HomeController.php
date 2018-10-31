<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','contact', 'about']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        return view('pages.home');
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        return redirect()->route('thanks', ['name' =>$name]);
    }

    public function thanks($name, Request $request){

        return view('pages.thankyou')->with(compact('name'));
    }

    public function profile()
    {
        $users=User::all();

        return view('pages.profile', ['users'=> $users]);
    }


}
