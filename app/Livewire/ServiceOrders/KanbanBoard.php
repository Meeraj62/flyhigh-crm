<?php

namespace App\Livewire\ServiceOrders;

use App\Models\ServiceOrder;
use Livewire\Component;

class KanbanBoard extends Component
{
    public $statuses = ['pending', 'in_progress', 'completed', 'cancelled'];

    public function render()
    {
        $orders = ServiceOrder::with(['user', 'service'])
            ->get()
            ->groupBy('status');

        return view('livewire.service-orders.kanban-board', compact('orders'));
    }

    public function updateStatus($orderId, $newStatus)
    {
        $order = ServiceOrder::find($orderId);
        $order->update(['status' => $newStatus]);
    }
}
