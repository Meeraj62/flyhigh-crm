<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Welcome Back, {{ auth()->user()->name }}!</h1>
            <p class="mt-1 text-sm text-gray-600">Your personal dashboard and application status</p>
        </div>
    </div>

    @php
        // Get the student record for the authenticated user
        $student = \App\Models\Student::where('email', auth()->user()->email)->first();
    @endphp

    @if($student)
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
        <div class="relative overflow-hidden rounded-xl bg-white px-6 py-5 shadow-soft hover:shadow-soft-lg transition-shadow duration-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-info-500">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">My Applications</dt>
                        <dd class="text-2xl font-bold text-gray-900">{{ $student->applications()->count() }}</dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-sm font-semibold text-primary-500">Active applications</span>
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
                        <dd class="text-2xl font-bold text-gray-900">{{ \App\Models\Appointment::where('student_id', $student->id)->where('start_at', '>=', now())->count() }}</dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('appointments.index') }}" class="text-sm font-semibold text-primary-500 hover:text-primary-700">View calendar →</a>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-xl bg-white px-6 py-5 shadow-soft hover:shadow-soft-lg transition-shadow duration-200">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-success-500">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium text-gray-500">My Courses</dt>
                        <dd class="text-2xl font-bold text-gray-900">{{ $student->courses()->count() }}</dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('courses.index') }}" class="text-sm font-semibold text-primary-500 hover:text-primary-700">View courses →</a>
            </div>
        </div>
    </div>

    <div class="rounded-xl bg-white shadow-soft">
        <div class="border-b border-gray-200 px-6 py-5">
            <h3 class="text-lg font-semibold text-gray-900">My Profile</h3>
            <p class="mt-1 text-sm text-gray-500">Your personal information</p>
        </div>
        <div class="p-6">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-primary-100 text-primary-700 text-2xl font-bold">
                        {{ substr($student->first_name, 0, 1) }}{{ substr($student->last_name, 0, 1) }}
                    </div>
                </div>
                <div class="ml-6 flex-1">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Full Name</p>
                            <p class="mt-1 text-base font-semibold text-gray-900">{{ $student->first_name }} {{ $student->last_name }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Email</p>
                            <p class="mt-1 text-base font-semibold text-gray-900">{{ $student->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Phone</p>
                            <p class="mt-1 text-base font-semibold text-gray-900">{{ $student->phone ?? 'Not provided' }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Date of Birth</p>
                            <p class="mt-1 text-base font-semibold text-gray-900">{{ $student->date_of_birth ? \Carbon\Carbon::parse($student->date_of_birth)->format('M d, Y') : 'Not provided' }}</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('students.form', $student) }}" class="inline-flex items-center rounded-lg bg-primary-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <div class="rounded-xl bg-white shadow-soft">
            <div class="border-b border-gray-200 px-6 py-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">My Applications</h3>
                        <p class="mt-1 text-sm text-gray-500">Track your university applications</p>
                    </div>
                </div>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($student->applications()->latest()->take(5)->get() as $application)
                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-center justify-between">
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $application->program->name ?? 'Program Name' }}</p>
                            <p class="text-sm text-gray-500 truncate">{{ $application->university->name ?? 'University Name' }}</p>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            @php
                                $statusMap = [
                                    'pending' => 'bg-warning-100 text-warning-800',
                                    'submitted' => 'bg-info-100 text-info-800',
                                    'accepted' => 'bg-success-500 text-white',
                                    'rejected' => 'bg-danger-100 text-danger-800',
                                    'withdrawn' => 'bg-gray-100 text-gray-800',
                                ];
                            @endphp
                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold {{ $statusMap[$application->status] ?? 'bg-gray-100 text-gray-800' }}">
                                {{ ucfirst($application->status) }}
                            </span>
                        </div>
                    </div>
                </div>
                @empty
                <div class="px-6 py-12 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    <p class="mt-2 text-sm text-gray-500">No applications yet</p>
                    <p class="mt-1 text-xs text-gray-400">Contact your consultant to start applying</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="rounded-xl bg-white shadow-soft">
            <div class="border-b border-gray-200 px-6 py-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Upcoming Appointments</h3>
                        <p class="mt-1 text-sm text-gray-500">Your scheduled meetings</p>
                    </div>
                </div>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse(\App\Models\Appointment::where('student_id', $student->id)->where('start_at', '>=', now())->orderBy('start_at')->take(5)->get() as $appointment)
                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-warning-100 text-warning-700">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4 min-w-0 flex-1">
                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $appointment->title }}</p>
                            <p class="text-sm text-gray-500">{{ $appointment->start_at->format('M d, Y • g:i A') }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="px-6 py-12 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                    </svg>
                    <p class="mt-2 text-sm text-gray-500">No upcoming appointments</p>
                    <p class="mt-1 text-xs text-gray-400">Schedule a meeting with your consultant</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="rounded-xl bg-white shadow-soft">
        <div class="border-b border-gray-200 px-6 py-5">
            <h3 class="text-lg font-semibold text-gray-900">Browse Universities & Programs</h3>
            <p class="mt-1 text-sm text-gray-500">Explore your options</p>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <a href="{{ route('universities.index') }}" class="group flex items-center justify-between rounded-lg border-2 border-gray-200 px-6 py-4 hover:border-primary-500 hover:bg-primary-50 transition-all duration-200">
                    <div class="flex items-center">
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-info-100 text-info-700 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-200">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-semibold text-gray-900">Universities</p>
                            <p class="text-sm text-gray-500">Browse institutions</p>
                        </div>
                    </div>
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <a href="{{ route('programs.index') }}" class="group flex items-center justify-between rounded-lg border-2 border-gray-200 px-6 py-4 hover:border-primary-500 hover:bg-primary-50 transition-all duration-200">
                    <div class="flex items-center">
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-success-100 text-success-700 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-200">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-semibold text-gray-900">Programs</p>
                            <p class="text-sm text-gray-500">Browse courses</p>
                        </div>
                    </div>
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @else
    <div class="rounded-xl bg-white shadow-soft p-12 text-center">
        <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>
        <h3 class="mt-4 text-lg font-semibold text-gray-900">No Student Profile Found</h3>
        <p class="mt-2 text-sm text-gray-500">Please contact your administrator to set up your student profile.</p>
    </div>
    @endif
</div>
