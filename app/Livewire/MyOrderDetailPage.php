<?php

namespace App\Livewire;

use App\Models\OrderItem;
use App\Models\Order; // Added based on usage in render
use App\Models\Address; // Added based on usage in render
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Order Detail')]
class MyOrderDetailPage extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $order_items = OrderItem::with('product')->where('order_id', $this->order_id)->get();
        $address = Address::where('order_id', $this->order_id)->first();
        $order = Order::where('id', $this->order_id)->first(); 

        return view('livewire.my-order-detail-page', [
            'order_items' => $order_items,
            'address' => $address,
            'order' => $order
        ]);
    }
}