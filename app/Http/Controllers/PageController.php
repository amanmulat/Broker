<?php

namespace App\Http\Controllers;
use App\Models\Unit;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        // dd('this is nice ');
        $units = Unit::whereId($request->input('unit') )->first();
        // dd($units);
        return view('some' , ['unit' => $units]);
        
    }

    

}
