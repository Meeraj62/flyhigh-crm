<div class="space-y-4">
    <div class="flex gap-4">
        <input wire:model.live="search" type="text" placeholder="Search leads..." class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
        <select wire:model.live="status" class="block rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm">
            <option value="">All Statuses</option>
            <option value="new">New</option>
            <option value="contacted">Contacted</option>
            <option value="qualified">Qualified</option>
            <option value="converted">Converted</option>
        </select>
    </div>

    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                    <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                    <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Phone</th>
                    <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                    <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Score</th>
                    <th class="relative py-3.5 pl-3 pr-4 sm:pr-6">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($leads as $lead)
                    <tr>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900">{{ $lead->first_name }} {{ $lead->last_name }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->email }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->phone }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm">
                            <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">{{ $lead->status }}</span>
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->score }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            <a href="{{ route('leads.show', $lead) }}" class="text-primary-600 hover:text-primary-900">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-3 py-4 text-sm text-gray-500 text-center">No leads found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $leads->links() }}
    </div>
</div>