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
    public function index(Request $request)
    {
        $date = $request->input('date');
        
        $number_of_book = DB::table('books')->count();
        $number_of_books = DB::table('books')->count();
        return view('home',compact('number_of_books','number_of_book'));
    }

    public function my_profile()
    {
        return view('my_profile');
    }

    public function my_calendar_monthly()
    {
        return view('my_calendar.monthly');
    }

    public function my_calendar_weekly()
    {
        return view('my_calendar.weekly');
    }

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
        return view('my_bookings',compact('my_bookings'));
    }

    public function demo()
    {
        return view('demo');
    }

    public function features()
    {
        return view('features');
    }

    public function office_map()
    {
        return view('office_map');
    }

    public function adminHome()
    {
        return view('admin.admin');
    }

    public function adminUsersList()
    {
        $users = \App\Models\User::all();
        return view('admin.users_list',compact('users'));
        // return view('admin.users_list');
    }

    public function adminBookings()
    {
        $bookings = \App\Models\Book::all();
        return view('admin.bookings',compact('bookings'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function adminAvailableDesks()
    {
        return view('admin.available_desks');
    }
}
