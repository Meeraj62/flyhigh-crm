<x-app-layout>
    <div class="space-y-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
            <p class="mt-2 text-sm text-gray-700">Welcome back! Here's what's happening with your CRM today.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-200 rounded-lg hover:shadow-md transition-shadow duration-150">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-blue-100">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Leads</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Lead::count() }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-100">
                    <a href="{{ route('leads.index') }}" class="text-sm font-medium text-primary-900 hover:text-primary-700 transition-colors duration-150">View all</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-200 rounded-lg hover:shadow-md transition-shadow duration-150">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-green-100">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Active Students</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Student::count() }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-100">
                    <a href="{{ route('students.index') }}" class="text-sm font-medium text-primary-900 hover:text-primary-700 transition-colors duration-150">View all</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-200 rounded-lg hover:shadow-md transition-shadow duration-150">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-purple-100">
                                <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Appointments</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-bold text-gray-900">{{ \App\Models\Appointment::where('start_at', '>=', now())->count() }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-100">
                    <a href="{{ route('appointments.index') }}" class="text-sm font-medium text-primary-900 hover:text-primary-700 transition-colors duration-150">View all</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-200 rounded-lg hover:shadow-md transition-shadow duration-150">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-orange-100">
                                <svg class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Universities</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-bold text-gray-900">{{ \App\Models\University::count() }}</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-100">
                    <a href="{{ route('universities.index') }}" class="text-sm font-medium text-primary-900 hover:text-primary-700 transition-colors duration-150">View all</a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-200 bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-900">Recent Leads</h3>
                    <p class="mt-1 text-sm text-gray-600">Latest potential clients and prospects</p>
                </div>
                <div class="divide-y divide-gray-200">
                    @forelse(\App\Models\Lead::latest()->take(5)->get() as $lead)
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-primary-100 flex items-center justify-center">
                                    <span class="text-sm font-semibold text-primary-900">{{ substr($lead->first_name, 0, 1) }}{{ substr($lead->last_name, 0, 1) }}</span>
                                </div>
                                <div class="ml-4 min-w-0 flex-1">
                                    <p class="text-sm font-semibold text-gray-900 truncate">{{ $lead->first_name }} {{ $lead->last_name }}</p>
                                    <p class="text-sm text-gray-500 truncate">{{ $lead->email }}</p>
                                </div>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                @php
                                    $statusColors = [
                                        'new' => 'bg-blue-100 text-blue-800',
                                        'contacted' => 'bg-purple-100 text-purple-800',
                                        'qualified' => 'bg-yellow-100 text-yellow-800',
                                        'converted' => 'bg-green-100 text-green-800',
                                        'lost' => 'bg-red-100 text-red-800',
                                    ];
                                    $colorClass = $statusColors[$lead->status] ?? 'bg-gray-100 text-gray-800';
                                @endphp
                                <span class="inline-flex items-center rounded-md px-2.5 py-1 text-xs font-semibold {{ $colorClass }}">
                                    {{ ucfirst($lead->status) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="px-6 py-8 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                        <p class="mt-2 text-sm text-gray-500">No leads yet</p>
                    </div>
                    @endforelse
                </div>
                @if(\App\Models\Lead::count() > 0)
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <a href="{{ route('leads.index') }}" class="text-sm font-medium text-primary-900 hover:text-primary-700 transition-colors duration-150">View all leads →</a>
                </div>
                @endif
            </div>

            <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-200 bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-900">Upcoming Appointments</h3>
                    <p class="mt-1 text-sm text-gray-600">Your scheduled meetings and consultations</p>
                </div>
                <div class="divide-y divide-gray-200">
                    @forelse(\App\Models\Appointment::where('start_at', '>=', now())->orderBy('start_at')->take(5)->get() as $appointment)
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 flex-1">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                                    <svg class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>
                                </div>
                                <div class="ml-4 min-w-0 flex-1">
                                    <p class="text-sm font-semibold text-gray-900 truncate">{{ $appointment->title }}</p>
                                    <p class="text-sm text-gray-500">{{ $appointment->start_at->format('M d, Y - g:i A') }}</p>
                                </div>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                @php
                                    $statusColors = [
                                        'scheduled' => 'bg-blue-100 text-blue-800',
                                        'confirmed' => 'bg-green-100 text-green-800',
                                        'cancelled' => 'bg-red-100 text-red-800',
                                        'completed' => 'bg-gray-100 text-gray-800',
                                    ];
                                    $colorClass = $statusColors[$appointment->status] ?? 'bg-gray-100 text-gray-800';
                                @endphp
                                <span class="inline-flex items-center rounded-md px-2.5 py-1 text-xs font-semibold {{ $colorClass }}">
                                    {{ ucfirst($appointment->status) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="px-6 py-8 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="mt-2 text-sm text-gray-500">No upcoming appointments</p>
                    </div>
                    @endforelse
                </div>
                @if(\App\Models\Appointment::where('start_at', '>=', now())->count() > 0)
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <a href="{{ route('appointments.index') }}" class="text-sm font-medium text-primary-900 hover:text-primary-700 transition-colors duration-150">View all appointments →</a>
                </div>
                @endif
            </div>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-200 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Recent Students</h3>
                <p class="mt-1 text-sm text-gray-600">Newly enrolled and active students</p>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Student</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Phone</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-900 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse(\App\Models\Student::latest()->take(5)->get() as $student)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <div class="h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center">
                                            <span class="text-xs font-medium text-primary-900">{{ substr($student->first_name, 0, 1) }}{{ substr($student->last_name, 0, 1) }}</span>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-semibold text-gray-900">{{ $student->first_name }} {{ $student->last_name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $student->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $student->phone }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $statusColors = [
                                        'new' => 'bg-blue-100 text-blue-800',
                                        'contacted' => 'bg-purple-100 text-purple-800',
                                        'qualified' => 'bg-yellow-100 text-yellow-800',
                                        'converted' => 'bg-green-100 text-green-800',
                                        'lost' => 'bg-red-100 text-red-800',
                                    ];
                                    $colorClass = $statusColors[$student->status] ?? 'bg-gray-100 text-gray-800';
                                @endphp
                                <span class="inline-flex items-center rounded-md px-2.5 py-1 text-xs font-semibold {{ $colorClass }}">
                                    {{ ucfirst($student->status) }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <p class="mt-2 text-sm text-gray-500">No students yet</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(\App\Models\Student::count() > 0)
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                <a href="{{ route('students.index') }}" class="text-sm font-medium text-primary-900 hover:text-primary-700 transition-colors duration-150">View all students →</a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
