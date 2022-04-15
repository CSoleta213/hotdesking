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

    public function my_profile()
    {
        return view('my_profile');
    }

    // Calendar

    public function my_bookings()
    {
        // $my_bookings = \App\Models\Book::all();

        // $firstname = DB::table('users')->get('firstname');
        // $lastname = DB::table('users')->get('lastname');
        // $fullname = $firstname." ".$lastname;

        // Hidden search bar

        $my_bookings = DB::table('books')
        ->where('name','=','Carlo Soleta') // Dapat magawa natin itong dynamic
        ->get();

        // SELECT * FROM `books` WHERE name = {{ Auth::user()->firstname }} {{ Auth::user()->lastname }};
        return view('features.my_bookings',compact('my_bookings'));
    }

    public function demo()
    {
        return view('demo');
    }

    public function features()
    {
        return view('features');
    }

    // Office View

    public function desk_map()
    {
        return view('features.desk_map');
    }

    public function adminHome()
    {
        return view('admin.admin');
    }

    public function adminUsersList()
    {
        return view('admin.users_list');
    }

    public function adminBookings()
    {
        $bookings = \App\Models\Book::all();
        return view('admin.bookings',compact('bookings'));
    }
}
