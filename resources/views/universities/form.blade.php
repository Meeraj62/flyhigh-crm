<x-app-layout>
    <div class="space-y-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ isset($university) ? 'Edit University' : 'Add New University' }}</h1>
            <p class="mt-2 text-sm text-gray-700">{{ isset($university) ? 'Update university information' : 'Add a new partner university to your system' }}</p>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg">
            <div class="px-6 py-5 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">{{ isset($university) ? 'Edit University' : 'Create New University' }}</h2>
                <p class="mt-1 text-sm text-gray-600">{{ isset($university) ? 'Update university information' : 'Add partner institution details' }}</p>
            </div>

            <form action="{{ isset($university) ? route('universities.update', $university) : route('universities.store') }}" method="POST" class="p-6">
                @csrf
                @if(isset($university))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">University Name <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" value="{{ old('name', $university->name ?? '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('name') ring-red-500 @enderror">
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="slug" class="block text-sm font-semibold leading-6 text-gray-900">Slug</label>
                            <div class="mt-2">
                                <input type="text" name="slug" id="slug" value="{{ old('slug', $university->slug ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('slug') ring-red-500 @enderror">
                                @error('slug')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="4" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('description') ring-red-500 @enderror">{{ old('description', $university->description ?? '') }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                        <div>
                            <label for="country" class="block text-sm font-semibold leading-6 text-gray-900">Country <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="country" id="country" value="{{ old('country', $university->country ?? '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('country') ring-red-500 @enderror">
                                @error('country')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="state" class="block text-sm font-semibold leading-6 text-gray-900">State/Province</label>
                            <div class="mt-2">
                                <input type="text" name="state" id="state" value="{{ old('state', $university->state ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('state') ring-red-500 @enderror">
                                @error('state')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="city" class="block text-sm font-semibold leading-6 text-gray-900">City <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="city" id="city" value="{{ old('city', $university->city ?? '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('city') ring-red-500 @enderror">
                                @error('city')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="website" class="block text-sm font-semibold leading-6 text-gray-900">Website URL</label>
                            <div class="mt-2">
                                <input type="url" name="website" id="website" value="{{ old('website', $university->website ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('website') ring-red-500 @enderror" placeholder="https://university.edu">
                                @error('website')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="ranking" class="block text-sm font-semibold leading-6 text-gray-900">World Ranking</label>
                            <div class="mt-2">
                                <input type="number" name="ranking" id="ranking" value="{{ old('ranking', $university->ranking ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('ranking') ring-red-500 @enderror" placeholder="e.g., 100">
                                @error('ranking')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="flex items-center gap-x-3">
                            <input type="hidden" name="is_featured" value="0">
                            <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $university->is_featured ?? false) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-primary-900 focus:ring-primary-900">
                            <label for="is_featured" class="block text-sm font-semibold leading-6 text-gray-900">Featured University</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $university->is_active ?? true) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-primary-900 focus:ring-primary-900">
                            <label for="is_active" class="block text-sm font-semibold leading-6 text-gray-900">Active</label>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-end gap-x-4 border-t border-gray-200 pt-6">
                    <a href="{{ route('universities.index') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                    <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-primary-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-900">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        {{ isset($university) ? 'Update University' : 'Create University' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
