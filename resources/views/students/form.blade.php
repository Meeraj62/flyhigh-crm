<x-app-layout>
    <div class="space-y-6">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">{{ isset($student) ? 'Edit Student' : 'Create Student' }}</h1>
                <p class="mt-1 text-sm text-gray-600">{{ isset($student) ? 'Update student information' : 'Add a new student to your system' }}</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <a href="{{ route('students.index') }}" class="inline-flex items-center gap-x-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    Back to Students
                </a>
            </div>
        </div>

        <form action="{{ isset($student) ? route('students.update', $student) : route('students.store') }}" method="POST" class="space-y-6">
            @csrf
            @if(isset($student))
                @method('PUT')
            @endif

            <div class="rounded-xl bg-white shadow-soft">
                <div class="border-b border-gray-200 px-6 py-5">
                    <h3 class="text-lg font-semibold text-gray-900">Student Information</h3>
                    <p class="mt-1 text-sm text-gray-500">Personal and contact details</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-gray-900">First Name <span class="text-danger-500">*</span></label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $student->first_name ?? '') }}" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-gray-900">Last Name <span class="text-danger-500">*</span></label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $student->last_name ?? '') }}" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-900">Email Address <span class="text-danger-500">*</span></label>
                            <input type="email" name="email" id="email" value="{{ old('email', $student->email ?? '') }}" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-900">Phone Number</label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone', $student->phone ?? '') }}" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <div>
                            <label for="date_of_birth" class="block text-sm font-semibold text-gray-900">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', isset($student) ? $student->date_of_birth?->format('Y-m-d') : '') }}" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-semibold text-gray-900">Status <span class="text-danger-500">*</span></label>
                            <select name="status" id="status" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                <option value="new" {{ old('status', $student->status ?? 'new') == 'new' ? 'selected' : '' }}>New</option>
                                <option value="contacted" {{ old('status', $student->status ?? '') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                <option value="qualified" {{ old('status', $student->status ?? '') == 'qualified' ? 'selected' : '' }}>Qualified</option>
                                <option value="converted" {{ old('status', $student->status ?? '') == 'converted' ? 'selected' : '' }}>Converted</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-4">
                <a href="{{ route('students.index') }}" class="rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center gap-x-2 rounded-lg bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    {{ isset($student) ? 'Update Student' : 'Create Student' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
