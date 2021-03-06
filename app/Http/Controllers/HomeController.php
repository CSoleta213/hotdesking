<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Book;
use Carbon\Carbon;

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

    public function my_calendar()
    {
        return view('my_calendar');
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
        $data = Book::latest()->paginate(100);
    
        return view('features',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function office_map()
    {
        return view('office_map');
    }

    public function adminHome()
    {
        $dateToday = Carbon::now();
        $stringDateToday=$dateToday->toDateString();
        $number_of_desks = DB::table('desks')->count();

        $users = DB::table('users')->orderBy('lastname')->paginate(100);
        $number_of_bookings = DB::table('books')->where('date','>=', $stringDateToday)->count();
        $occupiedDesks = DB::table('books')->where('date','=', $stringDateToday)->count();
        $availableDesks = $number_of_desks - $occupiedDesks;
        
        return view('admin.admin',compact('users','number_of_bookings', 'occupiedDesks', 'availableDesks'));
    }

    public function adminMyProfile()
    {
        return view('admin.my_profile_admin');
    }

    public function adminUsersList()
    {
        $users = \App\Models\User::all();
        return view('admin.users_list',compact('users'));
        // return view('admin.users_list');
    }

    public function adminBookings()
    {
        $dateToday = Carbon::now();
        $stringDateToday=$dateToday->toDateString();
        $bookings = DB::table('books')->orderBy('date')->paginate(100);
        return view('admin.bookings',compact('bookings', 'stringDateToday'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function adminCalendarView()
    {
        return view('admin.calendar_view');
    }

    public function adminAvailableDesks()
    {
        $dateToday = Carbon::now();
        $stringDateToday=$dateToday->toDateString();
        $todaysBookings = DB::table('books')->where('date','=', $stringDateToday)->get('desk_number');
        $desks = \App\Models\Desk::all();
        return view('admin.available_desks', compact('desks', 'todaysBookings'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
