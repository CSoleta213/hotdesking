<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::latest()->paginate(100);
    
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
        return view('office_map');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //     // 'name' => 'required',
        //     // 'office_name' => 'required',
        //     // 'desk_number' => 'required',
        //     // 'date' => 'required',
        //     'code' => 'required|unique',
        // ]);

        // if(true === $code) {
        //     return back()->with('error','Duplicated');
        // }
    
        // Book::create($request->all());

        $codeNameDate = $request->input('name').$request->input('date');
        $codeNumDate = $request->input('desk_number').$request->input('date');

            $book = new Book;

            $book->name = request('name');
            $book->office_name = request('office_name');
            $book->desk_number = request('desk_number');
            $book->date = request('date');
            $book->codeNameDate = $codeNameDate;
            $book->codeNumDate = $codeNumDate;


            $check = Book::where([
                ['codeNameDate', "=", $codeNameDate],
            ])->first();
    
            if($check)
            {
                $request->session()->flash('error', 'Your input is not allowed. Either the desk is taken or you have two entry for today.');
                return redirect('/office-map');
            }
            else{
                $book->save();
            
            return redirect()->route('books.index',compact('book'))
                            ->with('success','Booked successfully.');
            }
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
