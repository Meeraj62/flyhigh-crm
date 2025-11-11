<?php

namespace App\Livewire\Dashboard;

use App\Models\{Lead, Student, University, Course, Appointment};
use Livewire\Component;

class DashboardSummary extends Component
{
    public function render()
    {
        $stats = [
            'total_leads' => Lead::count(),
            'new_leads' => Lead::where('status', 'new')->count(),
            'total_students' => Student::count(),
            'total_universities' => University::count(),
            'total_courses' => Course::count(),
            'upcoming_appointments' => Appointment::where('start_at', '>=', now())->count(),
        ];

        $recentLeads = Lead::latest()->take(5)->get();
        $upcomingAppointments = Appointment::with(['consultant', 'student'])
            ->where('start_at', '>=', now())
            ->orderBy('start_at')
            ->take(5)
            ->get();

        return view('livewire.dashboard.dashboard-summary', compact('stats', 'recentLeads', 'upcomingAppointments'));
    }
}
