<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Universities</h1>
            <a href="{{ route('universities.form') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Add University</a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($universities as $university)
            <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-lg overflow-hidden">
                @if($university->logo_url)
                <div class="h-48 bg-gray-100 flex items-center justify-center">
                    <img src="{{ $university->logo_url }}" alt="{{ $university->name }}" class="h-32 object-contain">
                </div>
                @endif
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $university->name }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $university->city }}, {{ $university->country }}</p>
                    <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $university->description }}</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium bg-indigo-50 text-indigo-700">
                            Rank: {{ $university->ranking ?? 'N/A' }}
                        </span>
                    </div>
                    <div class="mt-4 flex items-center justify-end gap-x-2">
                        <a href="{{ route('universities.form', $university) }}" class="text-sm text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form action="{{ route('universities.destroy', $university) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-sm text-gray-500">No universities found</p>
            </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $universities->links() }}
        </div>
    </div>
</x-app-layout>
