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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::latest()->paginate(5);
    
        return view('books.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('features.desk_map');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'office_name' => 'required',
            'desk_number' => 'required',
            'date' => 'required',
        ]);
    
        Book::create($request->all());
     
        return redirect()->route('books.index')
                        ->with('success','Booked successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'office_name' => 'required',
            'desk_number' => 'required',
            'date' => 'required',
        ]);
    
        $book->update($request->all());
    
        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
    
        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }
}
// Check the duplicate entry via two criteria: desk_number and date
// SELECT * FROM `books` WHERE name="Carlo Soleta" && date="2022-04-03";
