<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Appointments</h1>
            <a href="{{ route('appointments.form') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Add Appointment</a>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Student</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Consultant</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date & Time</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse($appointments as $appointment)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $appointment->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $appointment->student->first_name ?? 'N/A' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $appointment->consultant->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $appointment->start_at->format('M d, Y H:i') }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium {{ $appointment->status === 'completed' ? 'bg-green-50 text-green-700' : ($appointment->status === 'confirmed' ? 'bg-blue-50 text-blue-700' : 'bg-gray-50 text-gray-700') }}">
                                {{ ucfirst($appointment->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-right space-x-2">
                            <a href="{{ route('appointments.form', $appointment) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No appointments found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="px-6 py-4">
                {{ $appointments->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
