<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('universities.index') }}" class="inline-flex items-center gap-x-2 text-sm font-semibold text-primary-900 hover:text-primary-700">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Back to Universitys
            </a>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg">
            <div class="px-6 py-5 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">{{ isset($university) ? 'Edit University' : 'Create New University' }}</h2>
                <p class="mt-1 text-sm text-gray-600">{{ isset($university) ? 'Update lead information' : 'Add a new potential client to your pipeline' }}</p>
            </div>

            <form action="{{ isset($university) ? route('leads.update', $university) : route('leads.store') }}" method="POST" class="p-6">
                @csrf
                @if(isset($university))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold leading-6 text-gray-900">First Name <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $university->first_name ?? '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('first_name') ring-red-500 @enderror">
                            </div>
                            @error('first_name')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-semibold leading-6 text-gray-900">Last Name <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $university->last_name ?? '') }}" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('last_name') ring-red-500 @enderror">
                            </div>
                            @error('last_name')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email Address</label>
                            <div class="mt-2">
                                <input type="email" name="email" id="email" value="{{ old('email', $university->email ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('email') ring-red-500 @enderror" placeholder="john@example.com">
                            </div>
                            @error('email')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">Phone Number</label>
                            <div class="mt-2">
                                <input type="tel" name="phone" id="phone" value="{{ old('phone', $university->phone ?? '') }}" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('phone') ring-red-500 @enderror" placeholder="+1 (555) 000-0000">
                            </div>
                            @error('phone')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="source" class="block text-sm font-semibold leading-6 text-gray-900">University Source</label>
                            <div class="mt-2">
                                <select name="source" id="source" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('source') ring-red-500 @enderror">
                                    <option value="">Select Source</option>
                                    <option value="website" {{ old('source', $university->source ?? '') === 'website' ? 'selected' : '' }}>Website</option>
                                    <option value="referral" {{ old('source', $university->source ?? '') === 'referral' ? 'selected' : '' }}>Referral</option>
                                    <option value="social_media" {{ old('source', $university->source ?? '') === 'social_media' ? 'selected' : '' }}>Social Media</option>
                                    <option value="email" {{ old('source', $university->source ?? '') === 'email' ? 'selected' : '' }}>Email Campaign</option>
                                    <option value="walk_in" {{ old('source', $university->source ?? '') === 'walk_in' ? 'selected' : '' }}>Walk In</option>
                                    <option value="phone" {{ old('source', $university->source ?? '') === 'phone' ? 'selected' : '' }}>Phone Call</option>
                                    <option value="event" {{ old('source', $university->source ?? '') === 'event' ? 'selected' : '' }}>Event</option>
                                </select>
                            </div>
                            @error('source')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-semibold leading-6 text-gray-900">Status <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <select name="status" id="status" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-900 sm:text-sm sm:leading-6 @error('status') ring-red-500 @enderror">
                                    <option value="new" {{ old('status', $university->status ?? 'new') === 'new' ? 'selected' : '' }}>New</option>
                                    <option value="contacted" {{ old('status', $university->status ?? '') === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                    <option value="qualified" {{ old('status', $university->status ?? '') === 'qualified' ? 'selected' : '' }}>Qualified</option>
                                    <option value="converted" {{ old('status', $university->status ?? '') === 'converted' ? 'selected' : '' }}>Converted</option>
                                    <option value="lost" {{ old('status', $university->status ?? '') === 'lost' ? 'selected' : '' }}>Lost</option>
                                </select>
                            </div>
                            @error('status')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-end gap-x-4 border-t border-gray-200 pt-6">
                    <a href="{{ route('universities.index') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                    <button type="submit" class="inline-flex justify-center items-center gap-x-2 rounded-md bg-primary-900 px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-900 transition-colors duration-150">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ isset($university) ? 'Update University' : 'Create University' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
