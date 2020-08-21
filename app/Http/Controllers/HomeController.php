<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calon;

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
        $halaman ='calon';
        $calon = calon::all();
        
        return view('home',compact('halaman','calon'));
    }
}
