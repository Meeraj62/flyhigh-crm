<x-app-layout>
    <div class="space-y-6" x-data="{ searchQuery: '' }">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Universities Management</h1>
                <p class="mt-2 text-sm text-gray-700">Manage partner universities and institutions</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <a href="{{ route('universities.form') }}" class="inline-flex items-center gap-x-2 rounded-md bg-primary-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-900 transition-colors duration-150">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add University
                </a>
            </div>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg overflow-hidden">
            <div class="p-4 border-b border-gray-200 bg-gray-50">
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </div>
                            <input type="search" id="search" x-model="searchQuery" class="block w-full rounded-md border-0 py-2 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6" placeholder="Search universities...">
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <select class="block rounded-md border-0 py-2 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-primary-900 sm:text-sm sm:leading-6">
                            <option>All Countries</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Location</th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Website</th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Ranking</th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3.5 text-right text-xs font-semibold text-gray-900 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($universities as $university)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <div class="h-10 w-10 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-sm font-medium text-primary-900">{{ substr($university->name, 0, 2) }}</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-gray-900">{{ $university->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $university->city }}, {{ $university->country }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($university->website)
                                <a href="{{ $university->website }}" target="_blank" class="text-sm text-primary-900 hover:text-primary-700">Visit Website</a>
                                @else
                                <span class="text-sm text-gray-400">N/A</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $university->ranking ?? 'N/A' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($university->is_active)
                                <span class="inline-flex items-center rounded-md px-2.5 py-1 text-xs font-semibold bg-green-100 text-green-800 ring-1 ring-inset ring-green-600/20">
                                    Active
                                </span>
                                @else
                                <span class="inline-flex items-center rounded-md px-2.5 py-1 text-xs font-semibold bg-gray-100 text-gray-800 ring-1 ring-inset ring-gray-600/20">
                                    Inactive
                                </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('universities.form', $university) }}" class="inline-flex items-center gap-x-1 text-primary-900 hover:text-primary-700 font-medium">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('universities.destroy', $university) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this university?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center gap-x-1 text-red-600 hover:text-red-900 font-medium">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <h3 class="mt-2 text-sm font-semibold text-gray-900">No universities found</h3>
                                <p class="mt-1 text-sm text-gray-500">Get started by adding a new university.</p>
                                <div class="mt-6">
                                    <a href="{{ route('universities.form') }}" class="inline-flex items-center gap-x-2 rounded-md bg-primary-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-800">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                        Add University
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($universities->hasPages())
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-3">
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-semibold">{{ $universities->firstItem() }}</span> to <span class="font-semibold">{{ $universities->lastItem() }}</span> of <span class="font-semibold">{{ $universities->total() }}</span> results
                    </div>
                    <div>
                        {{ $universities->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
