<div class="space-y-6">
    <div class="flex gap-4">
        <input wire:model.live="search" type="text" placeholder="Search universities..." class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
        <select wire:model.live="country" class="block rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
            <option value="">All Countries</option>
            @foreach($countries as $country)
                <option value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($universities as $university)
            <div class="overflow-hidden rounded-lg bg-white shadow">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $university->name }}</h3>
                    <div class="mt-2 text-sm text-gray-500">
                        <p>{{ $university->city }}, {{ $university->country }}</p>
                        @if($university->ranking)
                            <p class="mt-1">Ranking: {{ $university->ranking }}</p>
                        @endif
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('universities.show', $university) }}" class="text-primary-600 hover:text-primary-900 text-sm font-medium">View Details →</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-500">No universities found</p>
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $universities->links() }}
    </div>
</div>