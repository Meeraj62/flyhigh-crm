<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Route to role-specific dashboard views
        if ($user->hasRole('admin')) {
            return view('dashboard.admin');
        }

        if ($user->hasRole('staff')) {
            return view('dashboard.staff');
        }

        if ($user->hasRole('consultant')) {
            return view('dashboard.consultant');
        }

        if ($user->hasRole('student')) {
            return view('dashboard.student');
        }

        // Fallback to default dashboard if no specific role is found
        return view('dashboard.index');
    }
}
