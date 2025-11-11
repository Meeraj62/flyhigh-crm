<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Leads</h1>
            <a href="{{ route('leads.form') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Add Lead</a>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Source</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse($leads as $lead)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $lead->first_name }} {{ $lead->last_name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->email }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->phone }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium {{ $lead->status === 'converted' ? 'bg-green-50 text-green-700' : ($lead->status === 'new' ? 'bg-blue-50 text-blue-700' : 'bg-gray-50 text-gray-700') }}">
                                {{ ucfirst($lead->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->source }}</td>
                        <td class="px-6 py-4 text-sm text-right space-x-2">
                            <a href="{{ route('leads.form', $lead) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('leads.destroy', $lead) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No leads found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="px-6 py-4">
                {{ $leads->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
