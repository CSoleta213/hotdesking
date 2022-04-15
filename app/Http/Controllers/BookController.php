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

        return redirect('/home');
    }
}
// Check the duplicate entry via two criteria: desk_number and date
// SELECT * FROM `books` WHERE name="Carlo Soleta" && date="2022-04-03";
