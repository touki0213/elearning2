<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();

        return view('home', compact('auth'));
    }

    public function profile(){
        $auth = auth()->user();
        return view('setting.profile', compact('auth'));
    }

    public function profile_update(Request $request){
        $auth = auth()->user();

        $auth->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('home');
    }
}
