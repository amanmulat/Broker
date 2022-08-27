<?php

namespace App\Http\Livewire;
use App\Models\Unit;
use Livewire\Component;

class Search extends Component
{
    public $region ;
    public $catagory ;
    public $minBed ;
    public $maxBed ;
    public $minBath ;
    public $maxBath ;
    public $areaLower ;
    public $areaHigher ;
    public $priceLower ;
    public $priceHigher ;
    public function render()
    {
        return view('livewire.search');
    }
    public function search(){
        // dd($this->catagory);
        $unit = Unit::query();
        
        if($this->catagory){
            $unit->whereJsonContains('kind' , 'vl');
        }
        if($this->minBed){
            $unit->where('bed' , '>=' , $this->minBed);
        }
        if($this->maxBed){
            $unit->where('bed' , '<=' , $this->maxBed);
        }
        if($this->minBath){
            $unit->where('bath' , '>=' , $this->minBath);
        }
        if($this->maxBath){
            $unit->where('bath' , '<=' , $this->maxBath);
        }
        if($this->areaLower){
            $unit->where('area' , '>=' , $this->areaLower);
        }
        if($this->areaHigher){
            $unit->where('area' , '<=' , $this->areaHigher);
        }
        if($this->priceLower){
            $unit->where('sell->sell' , '>=' , $this->priceLower);
        }
        if($this->priceHigher){
            $unit->where('sell->sell' , '<=' ,$this->priceHigher);
        }
        // $unit = Unit::whereBetween('rent->rent' , [$request->minBed , $request->maxBed])->get();
        // dd($unit->get());
        $units = $unit->get() ;

        // dd($units);
        $cart = \Cart::getContent() ;

        // dd($units);
        return view('welcome', ['units' => $units , 'carts' => $cart ]);
        //this is not working need fixing 
        // dd('this');
    }
}
