<?php
  
namespace App\Http\Controllers;
  
use App\Models\Desk;
use Illuminate\Http\Request;
  
class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desks = Desk::latest()->paginate(5);
    
        return view('admin.desks.index',compact('desks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.desks.create');
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
            'desk_number' => 'required',
            'desk_map' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($desk_map = $request->file('desk_map')) {
            $destinationPath = 'desks/';
            $profileImage = date('YmdHis') . "." . $desk_map->getClientOriginalExtension();
            $desk_map->move($destinationPath, $profileImage);
            $input['desk_map'] = "$profileImage";
        }
    
        Desk::create($input);
     
        return redirect()->route('desks.index')
                        ->with('success','New desk was added successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Desk  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Desk $desk)
    {
        return view('admin.desks.show',compact('desk'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function edit(Desk $desk)
    {
        return view('admin.desks.edit',compact('desk'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desk $desk)
    {
        $request->validate([
            'desk_number' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($desk_map = $request->file('desk_map')) {
            $destinationPath = 'desks/';
            $profileImage = date('YmdHis') . "." . $desk_map->getClientOriginalExtension();
            $desk_map->move($destinationPath, $profileImage);
            $input['desk_map'] = "$profileImage";
        }else{
            unset($input['desk_map']);
        }
          
        $desk->update($input);
    
        return redirect()->route('desks.index')
                        ->with('success','Desk number and map was updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        $desk->delete();
     
        return redirect()->route('desks.index')
                        ->with('success','Desk was deleted successfully');
    }
}