<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booker;
use Session;
use Crypt;

class BookerController extends Controller
{
  public function store(Request $req) {

    $booker = new Booker;
    
    $booker->firstname = $req->firstname;
    $booker->lastname = $req->lastname;
    $booker->phone_number = $req->phone_number;
    $booker->email = $req->email;
    $booker->password = Crypt::encrypt($req->password);
    $booker->department = $req->department;
    $booker->agree = $req->agree;
    
    $booker->save();
    
    $req->session()->put('booker',$req->firstname);
    return redirect('/');
    // return redirect('/log-in');
  }

  function login(Request $req) {

    $booker = Booker::where('email',$req->email)->get();
    return Crypt::decrypt($booker[0]->password);
  }
}
