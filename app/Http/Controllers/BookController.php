<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DB;

class BookController extends Controller
{
    public function save_book(Request $request)
    {
        $book = new Book;

        $book->name = request('name');
        $book->office_name = request('office_name');
        $book->desk_number = request('desk_number');
        $book->date = request('date');

        $book->save();

        return redirect('/');
    }

    public function index() {
        $number_of_books = DB::table('books')->count();
        return view('welcome',compact('number_of_books'));
    }
}
