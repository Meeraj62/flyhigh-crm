<x-app-layout>
    <div class="space-y-6">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Leads</h1>
                <p class="mt-1 text-sm text-gray-600">Manage and track all your potential clients</p>
            </div>
            <div class="mt-4 flex gap-3 sm:mt-0">
                <button type="button" class="inline-flex items-center gap-x-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    Export
                </button>
                <a href="{{ route('leads.form') }}" class="inline-flex items-center gap-x-2 rounded-lg bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Lead
                </a>
            </div>
        </div>

        <div class="rounded-xl bg-white shadow-soft">
            <div class="border-b border-gray-200 px-6 py-4">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="relative flex-1">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                        <input type="search" class="block w-full rounded-lg border-gray-300 pl-10 focus:border-primary-500 focus:ring-primary-500 sm:text-sm" placeholder="Search leads by name, email, or phone...">
                    </div>
                    <div class="flex gap-2">
                        <select class="rounded-lg border-gray-300 text-sm focus:border-primary-500 focus:ring-primary-500">
                            <option>All Status</option>
                            <option>New</option>
                            <option>Contacted</option>
                            <option>Qualified</option>
                            <option>Converted</option>
                            <option>Lost</option>
                        </select>
                        <select class="rounded-lg border-gray-300 text-sm focus:border-primary-500 focus:ring-primary-500">
                            <option>All Sources</option>
                            <option>Website</option>
                            <option>Referral</option>
                            <option>Social Media</option>
                            <option>Event</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">
                                <div class="flex items-center gap-2">
                                    Lead
                                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Contact</th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Source</th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Status</th>
                            <th scope="col" class="px-6 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Created</th>
                            <th scope="col" class="px-6 py-3.5 text-right text-xs font-semibold uppercase tracking-wider text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse($leads as $lead)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-100 text-sm font-semibold text-primary-700">
                                            {{ substr($lead->first_name, 0, 1) }}{{ substr($lead->last_name, 0, 1) }}
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-semibold text-gray-900">{{ $lead->first_name }} {{ $lead->last_name }}</div>
                                        <div class="text-sm text-gray-500">ID: #{{ $lead->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $lead->email }}</div>
                                <div class="text-sm text-gray-500">{{ $lead->phone }}</div>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">
                                    {{ ucfirst($lead->source ?? 'N/A') }}
                                </span>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                @php
                                    $statusMap = [
                                        'new' => 'bg-info-100 text-info-800 ring-info-600/20',
                                        'contacted' => 'bg-warning-100 text-warning-800 ring-warning-600/20',
                                        'qualified' => 'bg-success-100 text-success-800 ring-success-600/20',
                                        'converted' => 'bg-success-500 text-white ring-success-600/20',
                                        'lost' => 'bg-gray-100 text-gray-800 ring-gray-600/20',
                                    ];
                                @endphp
                                <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset {{ $statusMap[$lead->status] ?? 'bg-gray-100 text-gray-800 ring-gray-600/20' }}">
                                    {{ ucfirst($lead->status) }}
                                </span>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                {{ $lead->created_at->format('M d, Y') }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('leads.form', $lead) }}" class="text-primary-600 hover:text-primary-900">Edit</a>
                                    <form action="{{ route('leads.destroy', $lead) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger-600 hover:text-danger-900">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-14 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <h3 class="mt-2 text-sm font-semibold text-gray-900">No leads found</h3>
                                <p class="mt-1 text-sm text-gray-500">Get started by creating your first lead.</p>
                                <div class="mt-6">
                                    <a href="{{ route('leads.form') }}" class="inline-flex items-center gap-x-2 rounded-lg bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                        Add Lead
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($leads->hasPages())
            <div class="border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-semibold">{{ $leads->firstItem() }}</span> to <span class="font-semibold">{{ $leads->lastItem() }}</span> of <span class="font-semibold">{{ $leads->total() }}</span> results
                    </div>
                    <div>
                        {{ $leads->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
