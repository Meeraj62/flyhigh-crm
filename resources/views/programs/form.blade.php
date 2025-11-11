<x-app-layout>
    <div class="space-y-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ isset($program) ? 'Edit Program' : 'Add New Program' }}</h1>
            <p class="mt-2 text-sm text-gray-700">{{ isset($program) ? 'Update program information' : 'Add a new academic program' }}</p>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg">
            <div class="px-6 py-5 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">{{ isset($program) ? 'Edit Program' : 'Create New Program' }}</h2>
                <p class="mt-1 text-sm text-gray-600">{{ isset($program) ? 'Update program details' : 'Add new academic program information' }}</p>
            </div>

            <form action="{{ isset($program) ? route('programs.update', $program) : route('programs.store') }}" method="POST" class="p-6">
                @csrf
                @if(isset($program))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="university_id" class="block text-sm font-semibold leading-6 text-gray-900">University <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <select name="university_id" id="university_id" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('university_id') ring-red-500 @enderror">
                                    <option value="">Select University</option>
                                    @foreach(\App\Models\University::orderBy('name')->get() as $university)
                                        <option value="{{ $university->id }}" {{ old('university_id', $program->university_id ?? '') == $university->id ? 'selected' : '' }}>
                                            {{ $university->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('university_id')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="title" class="block text-sm font-semibold leading-6 text-gray-900">Program Title <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="title" id="title" value="{{ old('title', $program->title ?? '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('title') ring-red-500 @enderror">
                                @error('title')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="4" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('description') ring-red-500 @enderror">{{ old('description', $program->description ?? '') }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                        <div>
                            <label for="degree_type" class="block text-sm font-semibold leading-6 text-gray-900">Degree Type <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <select name="degree_type" id="degree_type" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('degree_type') ring-red-500 @enderror">
                                    <option value="">Select Degree Type</option>
                                    <option value="bachelor" {{ old('degree_type', $program->degree_type ?? '') == 'bachelor' ? 'selected' : '' }}>Bachelor</option>
                                    <option value="master" {{ old('degree_type', $program->degree_type ?? '') == 'master' ? 'selected' : '' }}>Master</option>
                                    <option value="phd" {{ old('degree_type', $program->degree_type ?? '') == 'phd' ? 'selected' : '' }}>PhD</option>
                                    <option value="diploma" {{ old('degree_type', $program->degree_type ?? '') == 'diploma' ? 'selected' : '' }}>Diploma</option>
                                </select>
                                @error('degree_type')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="duration" class="block text-sm font-semibold leading-6 text-gray-900">Duration</label>
                            <div class="mt-2">
                                <input type="text" name="duration" id="duration" value="{{ old('duration', $program->duration ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('duration') ring-red-500 @enderror" placeholder="e.g., 2 years">
                                @error('duration')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="currency" class="block text-sm font-semibold leading-6 text-gray-900">Currency</label>
                            <div class="mt-2">
                                <select name="currency" id="currency" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('currency') ring-red-500 @enderror">
                                    <option value="USD" {{ old('currency', $program->currency ?? 'USD') == 'USD' ? 'selected' : '' }}>USD</option>
                                    <option value="EUR" {{ old('currency', $program->currency ?? '') == 'EUR' ? 'selected' : '' }}>EUR</option>
                                    <option value="GBP" {{ old('currency', $program->currency ?? '') == 'GBP' ? 'selected' : '' }}>GBP</option>
                                </select>
                                @error('currency')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="tuition_fee" class="block text-sm font-semibold leading-6 text-gray-900">Tuition Fee</label>
                        <div class="mt-2">
                            <input type="number" step="0.01" name="tuition_fee" id="tuition_fee" value="{{ old('tuition_fee', $program->tuition_fee ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('tuition_fee') ring-red-500 @enderror" placeholder="25000.00">
                            @error('tuition_fee')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="flex items-center gap-x-3">
                            <input type="hidden" name="is_featured" value="0">
                            <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $program->is_featured ?? false) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-primary-900 focus:ring-primary-900">
                            <label for="is_featured" class="block text-sm font-semibold leading-6 text-gray-900">Featured Program</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $program->is_active ?? true) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-primary-900 focus:ring-primary-900">
                            <label for="is_active" class="block text-sm font-semibold leading-6 text-gray-900">Active</label>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-end gap-x-4 border-t border-gray-200 pt-6">
                    <a href="{{ route('programs.index') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                    <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-primary-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-900">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        {{ isset($program) ? 'Update Program' : 'Create Program' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
