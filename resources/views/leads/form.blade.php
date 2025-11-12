<x-app-layout>
    <div class="space-y-6">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">{{ isset($lead) ? 'Edit Lead' : 'Create Lead' }}</h1>
                <p class="mt-1 text-sm text-gray-600">{{ isset($lead) ? 'Update lead information' : 'Add a new potential client to your pipeline' }}</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <a href="{{ route('leads.index') }}" class="inline-flex items-center gap-x-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    Back to Leads
                </a>
            </div>
        </div>

        <form action="{{ isset($lead) ? route('leads.update', $lead) : route('leads.store') }}" method="POST" class="space-y-6">
            @csrf
            @if(isset($lead))
                @method('PUT')
            @endif

            <div class="rounded-xl bg-white shadow-soft">
                <div class="border-b border-gray-200 px-6 py-5">
                    <h3 class="text-lg font-semibold text-gray-900">Basic Information</h3>
                    <p class="mt-1 text-sm text-gray-500">Personal details of the lead</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-gray-900">First Name <span class="text-danger-500">*</span></label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $lead->first_name ?? '') }}" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('first_name') border-danger-300 @enderror">
                            @error('first_name')
                                <p class="mt-1 text-sm text-danger-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-gray-900">Last Name <span class="text-danger-500">*</span></label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $lead->last_name ?? '') }}" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('last_name') border-danger-300 @enderror">
                            @error('last_name')
                                <p class="mt-1 text-sm text-danger-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-900">Email Address</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $lead->email ?? '') }}" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('email') border-danger-300 @enderror">
                            @error('email')
                                <p class="mt-1 text-sm text-danger-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-900">Phone Number</label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone', $lead->phone ?? '') }}" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('phone') border-danger-300 @enderror">
                            @error('phone')
                                <p class="mt-1 text-sm text-danger-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="source" class="block text-sm font-semibold text-gray-900">Lead Source</label>
                            <select name="source" id="source" class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('source') border-danger-300 @enderror">
                                <option value="">Select Source</option>
                                <option value="website" {{ old('source', $lead->source ?? '') == 'website' ? 'selected' : '' }}>Website</option>
                                <option value="referral" {{ old('source', $lead->source ?? '') == 'referral' ? 'selected' : '' }}>Referral</option>
                                <option value="social_media" {{ old('source', $lead->source ?? '') == 'social_media' ? 'selected' : '' }}>Social Media</option>
                                <option value="event" {{ old('source', $lead->source ?? '') == 'event' ? 'selected' : '' }}>Event</option>
                                <option value="other" {{ old('source', $lead->source ?? '') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('source')
                                <p class="mt-1 text-sm text-danger-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-semibold text-gray-900">Status <span class="text-danger-500">*</span></label>
                            <select name="status" id="status" required class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('status') border-danger-300 @enderror">
                                <option value="new" {{ old('status', $lead->status ?? 'new') == 'new' ? 'selected' : '' }}>New</option>
                                <option value="contacted" {{ old('status', $lead->status ?? '') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                <option value="qualified" {{ old('status', $lead->status ?? '') == 'qualified' ? 'selected' : '' }}>Qualified</option>
                                <option value="converted" {{ old('status', $lead->status ?? '') == 'converted' ? 'selected' : '' }}>Converted</option>
                                <option value="lost" {{ old('status', $lead->status ?? '') == 'lost' ? 'selected' : '' }}>Lost</option>
                            </select>
                            @error('status')
                                <p class="mt-1 text-sm text-danger-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-4">
                <a href="{{ route('leads.index') }}" class="rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center gap-x-2 rounded-lg bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    {{ isset($lead) ? 'Update Lead' : 'Create Lead' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
