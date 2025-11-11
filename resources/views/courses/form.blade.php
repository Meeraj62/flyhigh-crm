<x-app-layout>
    <div class="space-y-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ isset($course) ? 'Edit Course' : 'Add New Course' }}</h1>
            <p class="mt-2 text-sm text-gray-700">{{ isset($course) ? 'Update course information' : 'Add a new training course' }}</p>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg">
            <div class="px-6 py-5 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">{{ isset($course) ? 'Edit Course' : 'Create New Course' }}</h2>
                <p class="mt-1 text-sm text-gray-600">{{ isset($course) ? 'Update course details' : 'Add new course information' }}</p>
            </div>

            <form action="{{ isset($course) ? route('courses.update', $course) : route('courses.store') }}" method="POST" class="p-6">
                @csrf
                @if(isset($course))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="title" class="block text-sm font-semibold leading-6 text-gray-900">Course Title <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="title" id="title" value="{{ old('title', $course->title ?? '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('title') ring-red-500 @enderror">
                                @error('title')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="slug" class="block text-sm font-semibold leading-6 text-gray-900">Slug</label>
                            <div class="mt-2">
                                <input type="text" name="slug" id="slug" value="{{ old('slug', $course->slug ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('slug') ring-red-500 @enderror">
                                @error('slug')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="4" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('description') ring-red-500 @enderror">{{ old('description', $course->description ?? '') }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="price" class="block text-sm font-semibold leading-6 text-gray-900">Price</label>
                            <div class="mt-2">
                                <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $course->price ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('price') ring-red-500 @enderror" placeholder="99.00">
                                @error('price')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="currency" class="block text-sm font-semibold leading-6 text-gray-900">Currency</label>
                            <div class="mt-2">
                                <select name="currency" id="currency" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('currency') ring-red-500 @enderror">
                                    <option value="USD" {{ old('currency', $course->currency ?? 'USD') == 'USD' ? 'selected' : '' }}>USD</option>
                                    <option value="EUR" {{ old('currency', $course->currency ?? '') == 'EUR' ? 'selected' : '' }}>EUR</option>
                                    <option value="GBP" {{ old('currency', $course->currency ?? '') == 'GBP' ? 'selected' : '' }}>GBP</option>
                                </select>
                                @error('currency')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input type="hidden" name="is_published" value="0">
                        <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', $course->is_published ?? false) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-primary-900 focus:ring-primary-900">
                        <label for="is_published" class="block text-sm font-semibold leading-6 text-gray-900">Published</label>
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-end gap-x-4 border-t border-gray-200 pt-6">
                    <a href="{{ route('courses.index') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                    <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-primary-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-900">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        {{ isset($course) ? 'Update Course' : 'Create Course' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
