<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Courses</h1>
            <a href="{{ route('courses.form') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Add Course</a>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            @forelse($courses as $course)
            <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-lg p-6">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-900">{{ $course->title }}</h3>
                        <p class="mt-1 text-sm text-gray-500">{{ $course->code }}</p>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $course->description }}</p>
                        <div class="mt-4 flex items-center gap-4">
                            <span class="text-xs text-gray-500">Duration: {{ $course->duration_hours }}h</span>
                            @if($course->is_published)
                            <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium bg-green-50 text-green-700">Published</span>
                            @else
                            <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium bg-gray-50 text-gray-700">Draft</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex items-center justify-end gap-x-2">
                    <a href="{{ route('courses.form', $course) }}" class="text-sm text-indigo-600 hover:text-indigo-900">Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm text-red-600 hover:text-red-900">Delete</button>
                    </form>
                </div>
            </div>
            @empty
            <div class="col-span-2 text-center py-12">
                <p class="text-sm text-gray-500">No courses found</p>
            </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $courses->links() }}
        </div>
    </div>
</x-app-layout>
