<div class="space-y-6">
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Total Leads</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['total_leads'] }}</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">New Leads</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['new_leads'] }}</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Total Students</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['total_students'] }}</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Universities</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['total_universities'] }}</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Courses</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['total_courses'] }}</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Upcoming Appointments</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['upcoming_appointments'] }}</dd>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <div class="overflow-hidden rounded-lg bg-white shadow">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Leads</h3>
                <div class="mt-4">
                    <div class="flow-root">
                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                            @forelse($recentLeads as $lead)
                                <li class="py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="min-w-0 flex-1">
                                            <p class="truncate text-sm font-medium text-gray-900">{{ $lead->first_name }} {{ $lead->last_name }}</p>
                                            <p class="truncate text-sm text-gray-500">{{ $lead->email }}</p>
                                        </div>
                                        <div>
                                            <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700">{{ $lead->status }}</span>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4 text-sm text-gray-500">No recent leads</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-hidden rounded-lg bg-white shadow">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Upcoming Appointments</h3>
                <div class="mt-4">
                    <div class="flow-root">
                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                            @forelse($upcomingAppointments as $appointment)
                                <li class="py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="min-w-0 flex-1">
                                            <p class="truncate text-sm font-medium text-gray-900">{{ $appointment->student?->name ?? 'N/A' }}</p>
                                            <p class="truncate text-sm text-gray-500">{{ $appointment->start_at->format('M d, Y H:i') }}</p>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4 text-sm text-gray-500">No upcoming appointments</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>