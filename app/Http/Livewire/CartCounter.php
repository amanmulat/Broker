<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = ['cart_updated' => 'render'];
    public function render()
    {
        $all_cart = \Cart::getContent() ;
        return view('livewire.cart-counter' , compact('all_cart'));
    }
    public function removeCart($unitId)
    {
        \Cart::remove($unitId);
        $this->emit('cart_updated');
        $this->emit('cart_update_list');

    }
}
