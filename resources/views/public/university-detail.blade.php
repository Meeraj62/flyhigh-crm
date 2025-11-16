@extends('layouts.public')

@section('title', $university->name . ' - FlyHigh CRM')
@section('description', $university->description)

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 animate-fade-in-up">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('public.universities') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Universities</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-semibold">{{ $university->name }}</li>
            </ol>
        </nav>

        <!-- University Header -->
        <div class="glass-light rounded-3xl overflow-hidden shadow-glass-lg mb-12 animate-fade-in-up">
            <div class="h-64 bg-gradient-to-br from-primary-400 to-primary-600 relative">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <svg class="h-32 w-32 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                    </svg>
                </div>
                @if($university->is_featured)
                <div class="absolute top-6 right-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-xl bg-warning-100 text-warning-800 font-semibold">
                        <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        Featured University
                    </span>
                </div>
                @endif
            </div>
            <div class="p-8 lg:p-12">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">{{ $university->name }}</h1>
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-xl bg-info-100 text-info-800 font-semibold">
                        <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{ $university->city }}, {{ $university->country }}
                    </span>
                </div>
                <p class="text-xl text-gray-600 leading-relaxed">{{ $university->description }}</p>
            </div>
        </div>

        <!-- Programs Offered -->
        @if($programs->isNotEmpty())
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Programs Offered</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($programs as $program)
                <div class="glass-light rounded-2xl p-6 shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-primary-100 text-primary-800 text-xs font-semibold">
                            {{ $program->degree_type }}
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-success-100 text-success-800 text-xs font-semibold">
                            {{ $program->duration }}
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $program->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $program->description }}</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-primary-600">{{ $program->currency }} {{ number_format($program->tuition_fee) }}</span>
                            <span class="text-sm text-gray-500 block">per year</span>
                        </div>
                        <a href="{{ route('public.program.detail', $program->slug) }}" class="text-sm font-semibold text-primary-600 hover:text-primary-800">
                            View →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- CTA -->
        <div class="glass-dark rounded-3xl p-12 text-center shadow-glass-xl">
            <h2 class="text-3xl font-bold text-white mb-4">Interested in {{ $university->name }}?</h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Get personalized guidance for your application. Our experts are here to help you succeed.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-white text-primary-700 text-lg font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300">
                Schedule Consultation
                <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
