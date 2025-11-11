<x-app-layout>
    <div class="space-y-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ isset($appointment) ? 'Edit Appointment' : 'Schedule New Appointment' }}</h1>
            <p class="mt-2 text-sm text-gray-700">{{ isset($appointment) ? 'Update appointment details' : 'Schedule a new meeting with a student' }}</p>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg">
            <div class="px-6 py-5 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">{{ isset($appointment) ? 'Edit Appointment' : 'Create New Appointment' }}</h2>
                <p class="mt-1 text-sm text-gray-600">{{ isset($appointment) ? 'Update appointment information' : 'Add new appointment details' }}</p>
            </div>

            <form action="{{ isset($appointment) ? route('appointments.update', $appointment) : route('appointments.store') }}" method="POST" class="p-6">
                @csrf
                @if(isset($appointment))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="student_id" class="block text-sm font-semibold leading-6 text-gray-900">Student</label>
                            <div class="mt-2">
                                <select name="student_id" id="student_id" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('student_id') ring-red-500 @enderror">
                                    <option value="">Select Student</option>
                                    @foreach(\App\Models\User::where('role', 'student')->orderBy('name')->get() as $student)
                                        <option value="{{ $student->id }}" {{ old('student_id', $appointment->student_id ?? '') == $student->id ? 'selected' : '' }}>
                                            {{ $student->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('student_id')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="consultant_id" class="block text-sm font-semibold leading-6 text-gray-900">Consultant <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <select name="consultant_id" id="consultant_id" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('consultant_id') ring-red-500 @enderror">
                                    <option value="">Select Consultant</option>
                                    @foreach(\App\Models\User::where('role', 'consultant')->orWhere('role', 'admin')->orderBy('name')->get() as $consultant)
                                        <option value="{{ $consultant->id }}" {{ old('consultant_id', $appointment->consultant_id ?? auth()->id()) == $consultant->id ? 'selected' : '' }}>
                                            {{ $consultant->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('consultant_id')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="start_at" class="block text-sm font-semibold leading-6 text-gray-900">Start Date & Time <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="datetime-local" name="start_at" id="start_at" value="{{ old('start_at', isset($appointment) ? $appointment->start_at->format('Y-m-d\TH:i') : '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('start_at') ring-red-500 @enderror">
                                @error('start_at')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="end_at" class="block text-sm font-semibold leading-6 text-gray-900">End Date & Time <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="datetime-local" name="end_at" id="end_at" value="{{ old('end_at', isset($appointment) ? $appointment->end_at->format('Y-m-d\TH:i') : '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('end_at') ring-red-500 @enderror">
                                @error('end_at')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="platform" class="block text-sm font-semibold leading-6 text-gray-900">Platform</label>
                            <div class="mt-2">
                                <select name="platform" id="platform" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('platform') ring-red-500 @enderror">
                                    <option value="">Select Platform</option>
                                    <option value="zoom" {{ old('platform', $appointment->platform ?? '') == 'zoom' ? 'selected' : '' }}>Zoom</option>
                                    <option value="google_meet" {{ old('platform', $appointment->platform ?? '') == 'google_meet' ? 'selected' : '' }}>Google Meet</option>
                                    <option value="teams" {{ old('platform', $appointment->platform ?? '') == 'teams' ? 'selected' : '' }}>Microsoft Teams</option>
                                    <option value="in_person" {{ old('platform', $appointment->platform ?? '') == 'in_person' ? 'selected' : '' }}>In Person</option>
                                </select>
                                @error('platform')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-semibold leading-6 text-gray-900">Status <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <select name="status" id="status" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('status') ring-red-500 @enderror">
                                    <option value="scheduled" {{ old('status', $appointment->status ?? 'scheduled') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                    <option value="confirmed" {{ old('status', $appointment->status ?? '') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                    <option value="cancelled" {{ old('status', $appointment->status ?? '') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    <option value="completed" {{ old('status', $appointment->status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                                @error('status')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="meeting_link" class="block text-sm font-semibold leading-6 text-gray-900">Meeting Link</label>
                        <div class="mt-2">
                            <input type="url" name="meeting_link" id="meeting_link" value="{{ old('meeting_link', $appointment->meeting_link ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('meeting_link') ring-red-500 @enderror" placeholder="https://zoom.us/j/123456789">
                            @error('meeting_link')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="notes" class="block text-sm font-semibold leading-6 text-gray-900">Notes</label>
                        <div class="mt-2">
                            <textarea name="notes" id="notes" rows="4" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('notes') ring-red-500 @enderror">{{ old('notes', $appointment->notes ?? '') }}</textarea>
                            @error('notes')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-end gap-x-4 border-t border-gray-200 pt-6">
                    <a href="{{ route('appointments.index') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                    <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-primary-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-900">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        {{ isset($appointment) ? 'Update Appointment' : 'Create Appointment' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
