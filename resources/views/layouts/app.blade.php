<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="h-full" x-data="{ sidebarOpen: false, showToast: false, toastMessage: '', toastType: 'success' }"
      @toast.window="showToast = true; toastMessage = $event.detail.message; toastType = $event.detail.type || 'success'; setTimeout(() => showToast = false, 3000)">
    <div class="min-h-full">
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="relative z-50 lg:hidden" x-cloak>
            <div class="fixed inset-0 bg-gray-900/80"></div>
            <div class="fixed inset-0 flex">
                <div class="relative mr-16 flex w-full max-w-xs flex-1">
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button type="button" @click="sidebarOpen = false" class="-m-2.5 p-2.5">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-indigo-600 px-6 pb-4">
                        <div class="flex h-16 shrink-0 items-center">
                            <span class="text-white text-xl font-bold">FlyHigh CRM</span>
                        </div>
                        <nav class="flex flex-1 flex-col">
                            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                <li>
                                    <ul role="list" class="-mx-2 space-y-1">
                                        <li><a href="{{ route('dashboard') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-white hover:bg-indigo-700">Dashboard</a></li>
                                        @can('manage leads')
                                        <li><a href="{{ route('leads.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">Leads</a></li>
                                        @endcan
                                        @can('manage students')
                                        <li><a href="{{ route('students.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">Students</a></li>
                                        @endcan
                                        @can('manage universities')
                                        <li><a href="{{ route('universities.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">Universities</a></li>
                                        <li><a href="{{ route('programs.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">Programs</a></li>
                                        @endcan
                                        @can('manage appointments')
                                        <li><a href="{{ route('appointments.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">Appointments</a></li>
                                        @endcan
                                        @can('manage courses')
                                        <li><a href="{{ route('courses.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">Courses</a></li>
                                        @endcan
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-64 lg:flex-col">
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-indigo-600 px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center">
                    <span class="text-white text-xl font-bold">FlyHigh CRM</span>
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li><a href="{{ route('dashboard') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('dashboard') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">Dashboard</a></li>
                                @can('manage leads')
                                <li><a href="{{ route('leads.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('leads.*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">Leads</a></li>
                                @endcan
                                @can('manage students')
                                <li><a href="{{ route('students.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('students.*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">Students</a></li>
                                @endcan
                                @can('manage universities')
                                <li><a href="{{ route('universities.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('universities.*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">Universities</a></li>
                                <li><a href="{{ route('programs.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('programs.*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">Programs</a></li>
                                @endcan
                                @can('manage appointments')
                                <li><a href="{{ route('appointments.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('appointments.*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">Appointments</a></li>
                                @endcan
                                @can('manage courses')
                                <li><a href="{{ route('courses.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('courses.*') ? 'bg-indigo-700 text-white' : 'text-indigo-200 hover:bg-indigo-700 hover:text-white' }}">Courses</a></li>
                                @endcan
                            </ul>
                        </li>
                        <li class="mt-auto">
                            <div class="flex items-center gap-x-4 px-2 py-3 text-sm font-semibold leading-6 text-white">
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="group -mx-2 flex w-full gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">Logout</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="lg:pl-64">
            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <button type="button" @click="sidebarOpen = true" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                    <div class="flex items-center gap-x-4 lg:gap-x-6 ml-auto">
                        <span class="text-sm text-gray-700">{{ auth()->user()->name }}</span>
                    </div>
                </div>
            </div>

            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <div x-show="showToast" x-transition class="fixed bottom-4 right-4 z-50" x-cloak>
        <div :class="toastType === 'success' ? 'bg-green-500' : 'bg-red-500'" class="rounded-lg px-6 py-4 text-white shadow-lg">
            <p x-text="toastMessage"></p>
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
