<x-app-layout>
    <div class="max-w-2xl">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">{{ isset($program) ? 'Edit Program' : 'Create Program' }}</h1>

        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-lg p-6">
            <form action="{{ isset($program) ? route('programs.update', $program) : route('programs.store') }}" method="POST">
                @csrf
                @if(isset($program))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div>
                        <label for="university_id" class="block text-sm font-medium text-gray-700">University</label>
                        <select name="university_id" id="university_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="">Select University</option>
                            @foreach($universities as $university)
                            <option value="{{ $university->id }}" {{ old('university_id', $program->university_id ?? '') == $university->id ? 'selected' : '' }}>
                                {{ $university->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('university_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Program Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $program->name ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                        <select name="level" id="level" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="foundation" {{ old('level', $program->level ?? '') === 'foundation' ? 'selected' : '' }}>Foundation</option>
                            <option value="undergraduate" {{ old('level', $program->level ?? '') === 'undergraduate' ? 'selected' : '' }}>Undergraduate</option>
                            <option value="postgraduate" {{ old('level', $program->level ?? '') === 'postgraduate' ? 'selected' : '' }}>Postgraduate</option>
                            <option value="doctorate" {{ old('level', $program->level ?? '') === 'doctorate' ? 'selected' : '' }}>Doctorate</option>
                        </select>
                        @error('level')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="duration_years" class="block text-sm font-medium text-gray-700">Duration (Years)</label>
                        <input type="number" step="0.5" name="duration_years" id="duration_years" value="{{ old('duration_years', $program->duration_years ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('duration_years')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="tuition_fee" class="block text-sm font-medium text-gray-700">Tuition Fee</label>
                            <input type="number" step="0.01" name="tuition_fee" id="tuition_fee" value="{{ old('tuition_fee', $program->tuition_fee ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('tuition_fee')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tuition_fee_currency" class="block text-sm font-medium text-gray-700">Currency</label>
                            <input type="text" name="tuition_fee_currency" id="tuition_fee_currency" value="{{ old('tuition_fee_currency', $program->tuition_fee_currency ?? 'USD') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('tuition_fee_currency')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('description', $program->description ?? '') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $program->is_active ?? true) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">Active</label>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-3">
                    <a href="{{ route('programs.index') }}" class="text-sm font-semibold text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                        {{ isset($program) ? 'Update' : 'Create' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
