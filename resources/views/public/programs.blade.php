@extends('layouts.public')

@section('title', 'Programs - FlyHigh CRM')
@section('description', 'Explore academic programs and courses from top universities worldwide.')

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">Explore Programs</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Find the perfect program to achieve your academic goals
            </p>
        </div>

        <!-- Filters -->
        <div class="mb-12">
            <form method="GET" action="{{ route('public.programs') }}" class="glass-light rounded-2xl p-6 shadow-glass">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="search" class="block text-sm font-semibold text-gray-900 mb-2">Search</label>
                        <input type="text" name="search" id="search" value="{{ request('search') }}"
                               class="w-full px-4 py-3 rounded-xl glass border-0 focus:ring-2 focus:ring-primary-500"
                               placeholder="Program name...">
                    </div>
                    <div>
                        <label for="degree_type" class="block text-sm font-semibold text-gray-900 mb-2">Degree Type</label>
                        <select name="degree_type" id="degree_type"
                                class="w-full px-4 py-3 rounded-xl glass border-0 focus:ring-2 focus:ring-primary-500">
                            <option value="">All Degrees</option>
                            @foreach($degreeTypes as $type)
                            <option value="{{ $type }}" {{ request('degree_type') == $type ? 'selected' : '' }}>
                                {{ $type }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button type="submit"
                                class="w-full px-6 py-3 rounded-xl bg-gradient-to-r from-primary-500 to-primary-700 text-white font-semibold hover:shadow-glass-lg transition-all duration-300">
                            <svg class="inline-block h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Programs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($programs as $program)
            <div class="glass-light rounded-3xl overflow-hidden shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-2 group animate-fade-in-up">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-20 w-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                        </svg>
                    </div>
                    @if($program->is_featured)
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-warning-100 text-warning-800 text-xs font-semibold">
                            <svg class="h-3 w-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Featured
                        </span>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-primary-100 text-primary-800 text-xs font-semibold">
                            {{ $program->degree_type }}
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-info-100 text-info-800 text-xs font-semibold">
                            {{ $program->duration }}
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">{{ $program->title }}</h3>
                    <p class="text-sm text-gray-600 mb-3">{{ $program->university->name }}</p>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $program->description }}</p>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-primary-600">{{ $program->currency }} {{ number_format($program->tuition_fee) }}</span>
                            <span class="text-sm text-gray-500 block">Tuition/Year</span>
                        </div>
                    </div>
                    <a href="{{ route('public.program.detail', $program->slug) }}"
                       class="inline-flex items-center justify-center w-full px-6 py-3 rounded-xl bg-gradient-to-r from-primary-500 to-primary-700 text-white font-semibold hover:shadow-glass-lg transition-all duration-300">
                        View Details
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <div class="glass-light rounded-3xl p-12 inline-block">
                    <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <p class="text-gray-500 text-lg">No programs found matching your criteria.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($programs->hasPages())
        <div class="flex justify-center">
            {{ $programs->links() }}
        </div>
        @endif
    </div>
</section>

@endsection
