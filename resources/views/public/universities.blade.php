@extends('layouts.public')

@section('title', 'Universities - FlyHigh CRM')
@section('description', 'Browse top universities from around the world. Find the perfect institution for your international education.')

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">Explore Universities</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover top-ranked universities from around the world
            </p>
        </div>

        <!-- Filters -->
        <div class="mb-12">
            <form method="GET" action="{{ route('public.universities') }}" class="glass-light rounded-2xl p-6 shadow-glass">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="search" class="block text-sm font-semibold text-gray-900 mb-2">Search</label>
                        <input type="text" name="search" id="search" value="{{ request('search') }}"
                               class="w-full px-4 py-3 rounded-xl glass border-0 focus:ring-2 focus:ring-primary-500"
                               placeholder="University name...">
                    </div>
                    <div>
                        <label for="country" class="block text-sm font-semibold text-gray-900 mb-2">Country</label>
                        <select name="country" id="country"
                                class="w-full px-4 py-3 rounded-xl glass border-0 focus:ring-2 focus:ring-primary-500">
                            <option value="">All Countries</option>
                            @foreach($countries as $country)
                            <option value="{{ $country }}" {{ request('country') == $country ? 'selected' : '' }}>
                                {{ $country }}
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

        <!-- Universities Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($universities as $university)
            <div class="glass-light rounded-3xl overflow-hidden shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-2 group animate-fade-in-up">
                <div class="h-48 bg-gradient-to-br from-primary-400 to-primary-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-20 w-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                        </svg>
                    </div>
                    @if($university->is_featured)
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
                    <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">{{ $university->name }}</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{ $university->city }}, {{ $university->country }}
                    </div>
                    <p class="text-gray-600 text-sm mb-6 line-clamp-3">{{ $university->description }}</p>
                    <a href="{{ route('public.university.detail', $university->slug) }}"
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    <p class="text-gray-500 text-lg">No universities found matching your criteria.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($universities->hasPages())
        <div class="flex justify-center">
            {{ $universities->links() }}
        </div>
        @endif
    </div>
</section>

@endsection
