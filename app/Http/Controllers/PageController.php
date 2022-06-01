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
        $units = Unit::whereId($request->input('unit') )->get();
        // dd($units);
        return view('welcome' , ['some' => $units])->render();
        
    }

}
