@extends('layouts.public')

@section('title', 'Our Services - FlyHigh CRM')
@section('description', 'Comprehensive study abroad services including application support, visa assistance, counseling, and more.')

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">Our Services</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Comprehensive support for every step of your international education journey
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($services as $service)
            <div class="glass-light rounded-3xl p-8 shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-2 group animate-scale-in">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-primary-700 mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $service->name }}</h3>
                <p class="text-gray-600 mb-6">{{ $service->description }}</p>
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-3xl font-bold text-primary-600">${{ number_format($service->price) }}</span>
                        <span class="text-sm text-gray-500 ml-1">per service</span>
                    </div>
                </div>
                <a href="{{ route('public.service.detail', $service->slug) }}"
                   class="mt-6 inline-flex items-center justify-center w-full px-6 py-3 rounded-xl bg-gradient-to-r from-primary-500 to-primary-700 text-white font-semibold hover:shadow-glass-lg transition-all duration-300">
                    Learn More
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <div class="glass-light rounded-3xl p-12 inline-block">
                    <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                    <p class="text-gray-500 text-lg">No services available at the moment.</p>
                </div>
            </div>
            @endforelse
        </div>

        @if($services->isNotEmpty())
        <!-- CTA Section -->
        <div class="mt-20">
            <div class="glass-dark rounded-5xl p-12 lg:p-16 shadow-glass-xl text-center">
                <h2 class="text-4xl font-bold text-white mb-6">Ready to Get Started?</h2>
                <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                    Let's discuss which services best fit your needs and create a personalized plan for your success.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-white text-primary-700 text-lg font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300">
                    Schedule Consultation
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
