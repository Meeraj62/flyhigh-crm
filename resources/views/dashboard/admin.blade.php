<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
            <p class="mt-1 text-sm text-gray-600">Complete system overview and management</p>
        </div>
        <div class="flex items-center gap-3">
            <select class="rounded-lg border-gray-300 text-sm focus:border-primary-500 focus:ring-primary-500">
                <option>Last 7 days</option>
                <option>Last 30 days</option>
                <option>Last 90 days</option>
                <option>This Year</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
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
                        <dt class="truncate text-sm font-medium text-gray-500">Total Leads</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Lead::count() }}</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-success-600">
                                <svg class="h-4 w-4 flex-shrink-0 self-center" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Increased by</span> 12%
                            </div>
                        </dd>
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
                        <dt class="truncate text-sm font-medium text-gray-500">Active Students</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Student::count() }}</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-success-600">
                                <svg class="h-4 w-4 flex-shrink-0 self-center" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Increased by</span> 8%
                            </div>
                        </dd>
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">Total Users</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\User::count() }}</div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-sm font-semibold text-primary-500">System users</span>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-xl bg-white px-6 py-5 shadow-soft hover:shadow-soft-lg transition-shadow duration-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-info-500">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">Universities</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-bold text-gray-900">{{ \App\Models\University::count() }}</div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('universities.index') }}" class="text-sm font-semibold text-primary-500 hover:text-primary-700">View all →</a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <div class="rounded-xl bg-white shadow-soft">
            <div class="border-b border-gray-200 px-6 py-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Recent Leads</h3>
                        <p class="mt-1 text-sm text-gray-500">Latest potential clients (All)</p>
                    </div>
                    <a href="{{ route('leads.index') }}" class="text-sm font-semibold text-primary-500 hover:text-primary-700">View all</a>
                </div>
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
                        <div class="ml-4 flex-shrink-0">
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
                        </div>
                    </div>
                </div>
                @empty
                <div class="px-6 py-12 text-center">
                    <p class="text-sm text-gray-500">No leads yet</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="rounded-xl bg-white shadow-soft">
            <div class="border-b border-gray-200 px-6 py-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">System Activity</h3>
                        <p class="mt-1 text-sm text-gray-500">Recent user actions</p>
                    </div>
                </div>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse(\App\Models\User::latest()->take(5)->get() as $user)
                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-info-100 text-info-700 font-semibold">
                                {{ substr($user->name, 0, 2) }}
                            </div>
                        </div>
                        <div class="ml-4 min-w-0 flex-1">
                            <p class="text-sm font-semibold text-gray-900">{{ $user->name }}</p>
                            <p class="text-sm text-gray-500">{{ $user->getRoleNames()->first() ?? 'User' }} • {{ $user->email }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="px-6 py-12 text-center">
                    <p class="text-sm text-gray-500">No activity</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
