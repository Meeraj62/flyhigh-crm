<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Students</h1>
            <a href="{{ route('students.create') }}" class="rounded-md bg-primary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500">Add Student</a>
        </div>

        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Student ID</th>
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nationality</th>
                        <th class="relative py-3.5 pl-3 pr-4 sm:pr-6">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr>
                        <td colspan="5" class="px-3 py-4 text-sm text-gray-500 text-center">No students found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>