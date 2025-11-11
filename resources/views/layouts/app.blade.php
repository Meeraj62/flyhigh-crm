<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'FlyHigh CRM') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="h-full">
    <div x-data="{ sidebarOpen: false }" class="min-h-full">
        <nav class="bg-primary-600 border-b border-primary-700">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="text-white text-xl font-bold">FlyHigh CRM</span>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ route('dashboard') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-primary-700">Dashboard</a>
                                @can('manage leads')
                                    <a href="{{ route('leads.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-primary-700 hover:text-white">Leads</a>
                                @endcan
                                @can('manage students')
                                    <a href="{{ route('students.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-primary-700 hover:text-white">Students</a>
                                @endcan
                                @can('manage universities')
                                    <a href="{{ route('universities.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-primary-700 hover:text-white">Universities</a>
                                @endcan
                                @can('manage appointments')
                                    <a href="{{ route('appointments.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-primary-700 hover:text-white">Appointments</a>
                                @endcan
                                @can('manage courses')
                                    <a href="{{ route('courses.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-primary-700 hover:text-white">Courses</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <div class="relative ml-3">
                                <div class="flex items-center">
                                    <span class="text-white text-sm mr-4">{{ auth()->user()->name }}</span>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="rounded-md bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button @click="sidebarOpen = !sidebarOpen" class="inline-flex items-center justify-center rounded-md bg-primary-600 p-2 text-primary-200 hover:bg-primary-700 hover:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                @if (session('success'))
                    <div class="mb-4 rounded-md bg-green-50 p-4">
                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                    </div>
                @endif
                @if (session('error'))
                    <div class="mb-4 rounded-md bg-red-50 p-4">
                        <p class="text-sm font-medium text-red-800">{{ session('error') }}</p>
                    </div>
                @endif
                {{ $slot }}
            </div>
        </main>
    </div>
    @livewireScripts
</body>
</html>
