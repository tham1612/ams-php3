<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $categories = DB::table('categories')->get();
//        $categories2=DB::table('categories')->limit(6)->get();
        $catagories = DB::table('catagories')
            ->join('categories','catagories.category_id','=','categories.id')
            ->get();

//        dd($categories);
        return view('home', compact('categories','catagories'));
    }
}
