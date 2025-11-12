<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">My Dashboard</h1>
            <p class="mt-1 text-sm text-gray-600">Your clients and performance overview</p>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
        <div class="relative overflow-hidden rounded-xl bg-white px-6 py-5 shadow-soft hover:shadow-soft-lg transition-shadow duration-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">My Leads</dt>
                        <dd class="text-2xl font-bold text-gray-900">{{ \App\Models\Lead::count() }}</dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('leads.index') }}" class="text-sm font-semibold text-primary-500 hover:text-primary-700">View all →</a>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-xl bg-white px-6 py-5 shadow-soft hover:shadow-soft-lg transition-shadow duration-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-success-500">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">My Students</dt>
                        <dd class="text-2xl font-bold text-gray-900">{{ \App\Models\Student::count() }}</dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('students.index') }}" class="text-sm font-semibold text-primary-500 hover:text-primary-700">View all →</a>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-xl bg-white px-6 py-5 shadow-soft hover:shadow-soft-lg transition-shadow duration-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-warning-500">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">My Appointments</dt>
                        <dd class="text-2xl font-bold text-gray-900">{{ \App\Models\Appointment::where('start_at', '>=', now())->count() }}</dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('appointments.index') }}" class="text-sm font-semibold text-primary-500 hover:text-primary-700">View calendar →</a>
            </div>
        </div>
    </div>

    <div class="rounded-xl bg-white shadow-soft">
        <div class="border-b border-gray-200 px-6 py-5">
            <h3 class="text-lg font-semibold text-gray-900">My Recent Leads</h3>
            <p class="mt-1 text-sm text-gray-500">Leads assigned to you</p>
        </div>
        <div class="divide-y divide-gray-200">
            @forelse(\App\Models\Lead::latest()->take(5)->get() as $lead)
            <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                <div class="flex items-center justify-between">
                    <div class="flex items-center min-w-0 flex-1">
                        <div class="flex-shrink-0">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-100 text-primary-700 font-semibold">
                                {{ substr($lead->first_name, 0, 1) }}{{ substr($lead->last_name, 0, 1) }}
                            </div>
                        </div>
                        <div class="ml-4 min-w-0 flex-1">
                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $lead->first_name }} {{ $lead->last_name }}</p>
                            <p class="text-sm text-gray-500 truncate">{{ $lead->email }}</p>
                        </div>
                    </div>
                    <div class="ml-4 flex gap-2">
                        @php
                            $statusMap = [
                                'new' => 'bg-info-100 text-info-800',
                                'contacted' => 'bg-warning-100 text-warning-800',
                                'qualified' => 'bg-success-100 text-success-800',
                                'converted' => 'bg-success-500 text-white',
                                'lost' => 'bg-gray-100 text-gray-800',
                            ];
                        @endphp
                        <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold {{ $statusMap[$lead->status] ?? 'bg-gray-100 text-gray-800' }}">
                            {{ ucfirst($lead->status) }}
                        </span>
                        <a href="{{ route('leads.form', $lead) }}" class="text-primary-600 hover:text-primary-900 text-sm font-medium">Edit</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="px-6 py-12 text-center">
                <p class="text-sm text-gray-500">No leads assigned yet</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
