<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="h-full" x-data="{
    sidebarOpen: false,
    showToast: false,
    toastMessage: '',
    toastType: 'success',
    userMenuOpen: false
}" @toast.window="showToast = true; toastMessage = $event.detail.message; toastType = $event.detail.type || 'success'; setTimeout(() => showToast = false, 4000)">
    <div class="min-h-full">
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="relative z-50 lg:hidden" x-cloak>
            <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/80"></div>
            <div class="fixed inset-0 flex">
                <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative mr-16 flex w-full max-w-xs flex-1">
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button type="button" @click="sidebarOpen = false" class="-m-2.5 p-2.5">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-primary-900 px-6 pb-4">
                        <div class="flex h-16 shrink-0 items-center border-b border-primary-800">
                            <svg class="h-8 w-8 text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            <span class="ml-3 text-white text-xl font-bold">FlyHigh CRM</span>
                        </div>
                        <nav class="flex flex-1 flex-col">
                            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                <li>
                                    <ul role="list" class="-mx-2 space-y-1">
                                        <li>
                                            <a href="{{ route('dashboard') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('dashboard') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                                </svg>
                                                Dashboard
                                            </a>
                                        </li>
                                        @can('manage leads')
                                        <li>
                                            <a href="{{ route('leads.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('leads.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                                </svg>
                                                Leads
                                            </a>
                                        </li>
                                        @endcan
                                        @can('manage students')
                                        <li>
                                            <a href="{{ route('students.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('students.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                                </svg>
                                                Students
                                            </a>
                                        </li>
                                        @endcan
                                        @can('manage universities')
                                        <li>
                                            <a href="{{ route('universities.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('universities.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                                </svg>
                                                Universities
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('programs.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('programs.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                </svg>
                                                Programs
                                            </a>
                                        </li>
                                        @endcan
                                        @can('manage appointments')
                                        <li>
                                            <a href="{{ route('appointments.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('appointments.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                                </svg>
                                                Appointments
                                            </a>
                                        </li>
                                        @endcan
                                        @can('manage courses')
                                        <li>
                                            <a href="{{ route('courses.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('courses.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                </svg>
                                                Courses
                                            </a>
                                        </li>
                                        @endcan
                                    </ul>
                                </li>
                                <li class="mt-auto">
                                    <div class="px-2 py-3 border-t border-primary-800">
                                        <div class="flex items-center gap-x-3">
                                            <div class="flex-shrink-0">
                                                <div class="h-10 w-10 rounded-full bg-primary-700 flex items-center justify-center ring-2 ring-primary-600">
                                                    <span class="text-sm font-semibold text-white uppercase">{{ substr(auth()->user()->name, 0, 2) }}</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-semibold text-white truncate">{{ auth()->user()->name }}</p>
                                                <p class="text-xs text-primary-300 truncate">{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('logout') }}" class="mt-3">
                                            @csrf
                                            <button type="submit" class="group -mx-2 flex w-full gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6 text-primary-200 hover:bg-primary-800 hover:text-white transition-all duration-200">
                                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                                </svg>
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-primary-900 px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center border-b border-primary-800">
                    <svg class="h-8 w-8 text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                    <span class="ml-3 text-white text-xl font-bold">FlyHigh CRM</span>
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li>
                                    <a href="{{ route('dashboard') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('dashboard') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                @can('manage leads')
                                <li>
                                    <a href="{{ route('leads.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('leads.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                        </svg>
                                        Leads
                                    </a>
                                </li>
                                @endcan
                                @can('manage students')
                                <li>
                                    <a href="{{ route('students.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('students.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                        </svg>
                                        Students
                                    </a>
                                </li>
                                @endcan
                                @can('manage universities')
                                <li>
                                    <a href="{{ route('universities.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('universities.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                        </svg>
                                        Universities
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('programs.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('programs.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        Programs
                                    </a>
                                </li>
                                @endcan
                                @can('manage appointments')
                                <li>
                                    <a href="{{ route('appointments.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('appointments.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                        </svg>
                                        Appointments
                                    </a>
                                </li>
                                @endcan
                                @can('manage courses')
                                <li>
                                    <a href="{{ route('courses.index') }}" class="group flex gap-x-3 rounded-lg p-3 text-sm font-semibold leading-6 {{ request()->routeIs('courses.*') ? 'bg-primary-950 text-white shadow-lg' : 'text-primary-200 hover:bg-primary-800 hover:text-white' }} transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        Courses
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <li class="mt-auto">
                            <div class="px-2 py-3 border-t border-primary-800">
                                <div class="flex items-center gap-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="h-10 w-10 rounded-full bg-primary-700 flex items-center justify-center ring-2 ring-primary-600">
                                            <span class="text-sm font-semibold text-white uppercase">{{ substr(auth()->user()->name, 0, 2) }}</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-semibold text-white truncate">{{ auth()->user()->name }}</p>
                                        <p class="text-xs text-primary-300 truncate">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                                    @csrf
                                    <button type="submit" class="group -mx-2 flex w-full gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6 text-primary-200 hover:bg-primary-800 hover:text-white transition-all duration-200">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="lg:pl-72">
            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <button type="button" @click="sidebarOpen = true" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6 items-center justify-end">
                    <div class="flex items-center gap-x-4">
                        <span class="inline-flex items-center rounded-full bg-primary-50 px-3 py-1 text-xs font-semibold text-primary-900 ring-1 ring-inset ring-primary-900/20">
                            {{ ucfirst(auth()->user()->getRoleNames()->first() ?? 'User') }}
                        </span>
                    </div>
                </div>
            </div>

            <main class="py-8">
                <div class="px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <div x-show="showToast" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 scale-100" x-transition:leave-end="opacity-0 translate-y-2 scale-95" class="fixed bottom-4 right-4 z-50" x-cloak>
        <div class="rounded-lg px-6 py-4 text-white shadow-2xl flex items-center gap-3" :class="toastType === 'success' ? 'bg-green-600' : 'bg-red-600'">
            <svg x-show="toastType === 'success'" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <svg x-show="toastType === 'error'" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
            <p class="font-semibold" x-text="toastMessage"></p>
        </div>
    </div>

    @if(session('toast'))
    <script>
        document.addEventListener('alpine:initialized', () => {
            const toast = @json(json_decode(session('toast')));
            window.dispatchEvent(new CustomEvent('toast', { detail: toast }));
        });
    </script>
    @endif

    @livewireScripts
</body>
</html>
