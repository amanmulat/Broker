<?php

namespace App\Http\Livewire;
use App\Models\Unit;
use Livewire\Component;

class UnitList extends Component
{
    // public array $quantity=[];
    public $units;
    protected $listeners = ['cart_update_list' => 'render'];
    public function mount()
    {
        // dd($this->units);
        if(empty( $this->units)){
            $this->units = Unit::get();
        }
    }
    public function render()
    {
        //  $units = Unit::get();
        $carts = \Cart::getContent() ;
        // dd($cart);
        // dd($this->units);
        // dd
        // return view('welcome' , ['units' => $units , 'carts' => $cart]);
        return view('livewire.unit-list',  ['units' => $this->units , 'carts' => $carts] );
    }

    public function addToCart($unitId)
    {
          // dd($request);
        //   dd($this->quantity[$unitId]);
        $unit= Unit::findOrFail($unitId);
       \Cart::add($unit->id ,$unit->unit_name , $unit->sell['sell'], 2, array());
    //    return redirect()->route('home')->with('message' , 'added succesfully');
    $this->emit('cart_updated');
    }
    public function removeCart($unitId)
    {
        \Cart::remove($unitId);
        $this->emit('cart_updated');
    }
    public function search(){
        dd('this is');
    }
}
