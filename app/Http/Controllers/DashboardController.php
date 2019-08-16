<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
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
        $user_id = auth()->user()->id; #mostrando id
        $user = User::find($user_id); #pegando o id
        return view('dashboard')->with('listings',$user->listings);
        #User pode usar elementos e metodos da classe Listing(Model)
    }
}
