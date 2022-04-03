<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $number_of_books = DB::table('books')->count();
        return view('home',compact('number_of_books'));
    }

    public function features()
    {
        return view('features');
    }

    public function desk_map()
    {
        return view('features.desk_map');
    }

    public function book_a_desk()
    {
        return view('features.forms.book_a_desk');
    }

    public function demo()
    {
        return view('demo');
    }

    public function profile()
    {
        return view('profile');
    }

    public function privacy()
    {
        return view('privacy.privacy');
    }

    public function terms()
    {
        return view('privacy.terms');
    }

    public function adminHome()
    {
        return view('admin');
    }
}
