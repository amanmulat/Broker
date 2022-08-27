<?php

namespace App\Http\Controllers;
use App\Models\Unit;
// use Darryldecode\Cart\Facades\Cart;

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
        return $units;
        
    }
    
    public function getSell(Request $request)
    {
        $units = Unit::get();
        $cart = \Cart::getContent() ;
        // dd($cart);
        // dd($units);
        $units = [];
        
        return view('welcome' , ['units' => $units , 'carts' => $cart]);
    }
    public function compare(Request $request)
    {
       
        // $cart = \Cart::getContent() ;

        
        $units = Unit::findMany(\Cart::getContent()->pluck('id') );
        // dd($cart);
        // dd($units);
        return view('guest.compare' , ['carts' => $units]);
    }
    public function search(Request $request)
    {
        // dd();
        $units = Unit::query();
        if($request->filled('region')){

        }
        if($request->filled('catagory')){
            $units->whereJsonContains('kind' , $request->catagory);
        }
        if($request->filled('minBed')){
            $units->where('bed' , '>=' , $request->minBed);
        }
        if($request->filled('maxBed')){
            $units->where('bed' , '<=' , $request->maxBed);
        }
        if($request->filled('minBath')){
            $units->where('bath' , '>=' , $request->minBath);
        }
        if($request->filled('maxBath')){
            $units->where('bath' , '<=' , $request->maxBath);
        }
        if($request->filled('areaLower')){
            $units->where('area' , '>=' , $request->areaLower);
        }
        if($request->filled('areaHigher')){
            $units->where('area' , '<=' , $request->areaHigher);
        }
        if($request->filled('priceLower')){
            $units->where('sell->sell' , '>=' , $request->priceLower);
        }
        if($request->filled('priceHigher')){
            $units->where('sell->sell' , '<=' , $request->priceHigher);
        }
        // $units = Unit::whereBetween('rent->rent' , [$request->minBed , $request->maxBed])->get();
        // dd($units->get());
        $some = $units->get() ;
        $cart = \Cart::getContent() ;
        // dd($some);
        return view('welcome', ['units' => $some , 'carts'=> $cart]);

    }
    public function store(Request $request)
    {
        dd($request);
        $unit= Unit::findOrFail($request->unit_id);
       \Cart::add($unit->id ,$unit->unit_name , $unit->sell['sell'], 2, array());
       return redirect()->route('home')->with('message' , 'added succesfully');
    }
    public function catagory(Request $request){
        $units = Unit::query();

    }
    // public function removeCart(Request $request)
    // {
    //     // dd('this');
    //     \Cart::remove($request->input('unit_remove_id'));
    //    return redirect()->route('home')->with('message' , 'removed succesfully');

    // }
    

}
