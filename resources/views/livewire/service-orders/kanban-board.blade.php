<div class="flex gap-4 overflow-x-auto pb-4">
    @foreach($statuses as $status)
        <div class="flex-shrink-0 w-80">
            <div class="bg-gray-100 rounded-lg p-4">
                <h3 class="font-semibold text-gray-900 mb-4 capitalize">{{ str_replace('_', ' ', $status) }}</h3>
                <div class="space-y-3">
                    @foreach($orders->get($status, collect()) as $order)
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 cursor-move">
                            <h4 class="font-medium text-gray-900">{{ $order->service->name }}</h4>
                            <p class="text-sm text-gray-500 mt-1">{{ $order->user->name }}</p>
                            @if($order->due_date)
                                <p class="text-xs text-gray-400 mt-2">Due: {{ $order->due_date->format('M d, Y') }}</p>
                            @endif
                        </div>
                    @endforeach
                    @if($orders->get($status, collect())->isEmpty())
                        <p class="text-sm text-gray-400 text-center py-4">No orders</p>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>