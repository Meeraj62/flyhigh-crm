<x-app-layout>
    <div class="max-w-2xl">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">{{ isset($lead) ? 'Edit Lead' : 'Create Lead' }}</h1>

        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-lg p-6">
            <form action="{{ isset($lead) ? route('leads.update', $lead) : route('leads.store') }}" method="POST">
                @csrf
                @if(isset($lead))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $lead->first_name ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('first_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $lead->last_name ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('last_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $lead->email ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', $lead->phone ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="source" class="block text-sm font-medium text-gray-700">Source</label>
                        <select name="source" id="source" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="">Select Source</option>
                            <option value="website" {{ old('source', $lead->source ?? '') === 'website' ? 'selected' : '' }}>Website</option>
                            <option value="referral" {{ old('source', $lead->source ?? '') === 'referral' ? 'selected' : '' }}>Referral</option>
                            <option value="social_media" {{ old('source', $lead->source ?? '') === 'social_media' ? 'selected' : '' }}>Social Media</option>
                            <option value="email" {{ old('source', $lead->source ?? '') === 'email' ? 'selected' : '' }}>Email Campaign</option>
                            <option value="walk_in" {{ old('source', $lead->source ?? '') === 'walk_in' ? 'selected' : '' }}>Walk In</option>
                        </select>
                        @error('source')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="new" {{ old('status', $lead->status ?? 'new') === 'new' ? 'selected' : '' }}>New</option>
                            <option value="contacted" {{ old('status', $lead->status ?? '') === 'contacted' ? 'selected' : '' }}>Contacted</option>
                            <option value="qualified" {{ old('status', $lead->status ?? '') === 'qualified' ? 'selected' : '' }}>Qualified</option>
                            <option value="converted" {{ old('status', $lead->status ?? '') === 'converted' ? 'selected' : '' }}>Converted</option>
                            <option value="lost" {{ old('status', $lead->status ?? '') === 'lost' ? 'selected' : '' }}>Lost</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-3">
                    <a href="{{ route('leads.index') }}" class="text-sm font-semibold text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                        {{ isset($lead) ? 'Update' : 'Create' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
