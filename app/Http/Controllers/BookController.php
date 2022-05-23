<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DB;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateToday = now();
        $books = DB::table('books')->orderBy('date')->paginate(100);
        $desks = \App\Models\Desk::all();
    
        return view('books.index',compact('books', 'desks', 'dateToday'))
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

        $dateToday = now();
        $codeNameDate = $request->input('name').$request->input('date');
        $codeNumDate = $request->input('desk_number').$request->input('date');

            $book = new Book;

            $book->name = request('name');
            $book->office_name = request('office_name');
            $book->desk_number = request('desk_number');
            $book->date = request('date');
            $book->codeNameDate = $codeNameDate;
            $book->codeNumDate = $codeNumDate;


            $check1 = Book::where([
                ['codeNameDate', "=", $codeNameDate],
            ])->first();

            $check2 = Book::where([
                ['codeNumDate', "=", $codeNumDate],
            ])->first();

            $check3 = $dateToday > $request->input('date');
    
            if($check1)
            {
                $request->session()->flash('error', 'You cannot book two desks with the same date!');
                return redirect()->route('books.index');
            } elseif($check2)
            {
                $request->session()->flash('error', 'The desk is already taken!');
                return redirect()->route('books.index');
            } elseif($check3)
            {
                $request->session()->flash('error', 'The date is already passed!');
                return redirect()->route('books.index');
            } else{
                $book->save();

                $startTime = Carbon::parse($request->input('date').' ' . $request->input('time'));
                $endTime = (clone $startTime)->addHour(9);

                // Event::create([
                //     'name' => $request->input('name').' - '.$request->input('desk_number'),
                //     'startDateTime' => $startTime,
                //     'endDateTime' => $endTime,
                // ]);

                //create a new event
                $event = new Event;
                
                $event->name = $request->input('name').' - '.$request->input('desk_number');
                $event->description = 'Event description';
                $event->startDateTime = $startTime;
                $event->endDateTime = $endTime;
                
                $event->save();
            
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
        $desks = \App\Models\Desk::all();
        return view('books.show',compact('book', 'desks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $desks = \App\Models\Desk::all();
        return view('books.edit',compact('book', 'desks'));
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
        // $request->validate([
        //     'name' => 'required',
        //     'office_name' => 'required',
        //     'desk_number' => 'required',
        //     'date' => 'required',
        //     'codeNameDate' => 'required',
        //     'codeNumDate' => 'required',
        // ]);
        
        $dateToday = now();
        $codeNameDate = $request->input('name').$request->input('date');
        $codeNumDate = $request->input('desk_number').$request->input('date');

        $book->name = request('name');
        $book->office_name = request('office_name');
        $book->desk_number = request('desk_number');
        $book->date = request('date');
        $book->codeNameDate = $codeNameDate;
        $book->codeNumDate = $codeNumDate;

        // $check1 = Book::where([
        //     ['codeNameDate', "=", $codeNameDate],
        // ])->first();

        $check2 = Book::where([
            ['codeNumDate', "=", $codeNumDate],
        ])->first();

        $check3 = $dateToday > $request->input('date');
    
        if($check2)
        {
            $request->session()->flash('error', 'The desk is already taken!');
            return redirect()->route('books.index');
        }  elseif($check3)
        {
            $request->session()->flash('error', 'The date is already passed!');
            return redirect()->route('books.index');
        }
        else{
    
            $book->save();

            $startTime = Carbon::parse($request->input('date').' ' . $request->input('time'));
            $endTime = (clone $startTime)->addHour(9);
            
            // get all future events on a calendar
            $events = Event::get();

            // update existing event
            $firstEvent = $events->first();
            $firstEvent->name = $request->input('name').' - '.$request->input('desk_number');
            $firstEvent->startDateTime = $startTime;
            $firstEvent->endDateTime = $endTime;
            $firstEvent->save();
            
            $firstEvent->update([
                'name' => $request->input('name').' - '.$request->input('desk_number'),
                'startDateTime' => $startTime,
                'endDateTime' => $endTime,
            ]);
    
        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
        }
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
