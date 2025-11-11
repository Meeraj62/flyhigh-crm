<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Programs</h1>
            <a href="{{ route('programs.form') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Add Program</a>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Program Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">University</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Level</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Duration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tuition Fee</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse($programs as $program)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $program->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $program->university->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ ucfirst($program->level) }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $program->duration_years }} years</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $program->tuition_fee_currency }} {{ number_format($program->tuition_fee) }}</td>
                        <td class="px-6 py-4 text-sm text-right space-x-2">
                            <a href="{{ route('programs.form', $program) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('programs.destroy', $program) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No programs found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="px-6 py-4">
                {{ $programs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
