@extends('layouts.public')

@section('title', $service->name . ' - FlyHigh CRM')
@section('description', $service->description)

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 animate-fade-in-up">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('public.services') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Services</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-semibold">{{ $service->name }}</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="glass-light rounded-3xl p-8 lg:p-12 shadow-glass-lg animate-fade-in-up">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex-1">
                            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">{{ $service->name }}</h1>
                            <div class="flex items-center gap-4">
                                <span class="inline-flex items-center px-4 py-2 rounded-xl bg-primary-100 text-primary-800 font-semibold">
                                    <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Professional Service
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none mb-8">
                        <p class="text-xl text-gray-600 leading-relaxed">{{ $service->description }}</p>

                        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">What's Included</h2>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Personalized consultation with expert advisors</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Comprehensive documentation support</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Step-by-step guidance throughout the process</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Follow-up support and assistance</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Access to our network of partners and resources</span>
                            </li>
                        </ul>

                        <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">How It Works</h2>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center text-white font-bold mr-4">1</div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Initial Consultation</h3>
                                    <p class="text-gray-600">Book a consultation to discuss your specific needs and goals</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center text-white font-bold mr-4">2</div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Document Preparation</h3>
                                    <p class="text-gray-600">We'll help you gather and prepare all necessary documents</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center text-white font-bold mr-4">3</div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Application Process</h3>
                                    <p class="text-gray-600">We guide you through each step of the application</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-xl bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center text-white font-bold mr-4">4</div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">Follow-up Support</h3>
                                    <p class="text-gray-600">Continued assistance until successful completion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Pricing Card -->
                <div class="glass-light rounded-3xl p-8 shadow-glass-lg mb-8 sticky top-24 animate-fade-in-up">
                    <div class="text-center mb-6">
                        <div class="text-5xl font-bold text-primary-600 mb-2">${{ number_format($service->price) }}</div>
                        <p class="text-gray-600">per service</p>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="block w-full px-6 py-4 rounded-2xl bg-gradient-to-r from-primary-500 to-primary-700 text-white text-center font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300 mb-4">
                        Get Started
                        <svg class="inline-block ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <a href="{{ route('contact') }}"
                       class="block w-full px-6 py-4 rounded-2xl glass text-gray-700 text-center font-semibold hover:bg-white/50 transition-all duration-300">
                        Schedule Consultation
                    </a>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h3 class="font-bold text-gray-900 mb-4">Why Choose Us?</h3>
                        <ul class="space-y-3 text-sm text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Expert guidance
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                95% success rate
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                24/7 support
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-primary-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Money-back guarantee
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Services -->
        @if($relatedServices->isNotEmpty())
        <div class="mt-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedServices as $related)
                <div class="glass-light rounded-2xl p-6 shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $related->name }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $related->description }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-primary-600">${{ number_format($related->price) }}</span>
                        <a href="{{ route('public.service.detail', $related->slug) }}" class="text-sm font-semibold text-primary-600 hover:text-primary-800">
                            Learn More →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
