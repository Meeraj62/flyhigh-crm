@extends('layouts.public')

@section('title', $program->title . ' - ' . $program->university->name . ' - FlyHigh CRM')
@section('description', $program->description)

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 animate-fade-in-up">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('public.programs') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Programs</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-semibold">{{ $program->title }}</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="glass-light rounded-3xl p-8 lg:p-12 shadow-glass-lg animate-fade-in-up">
                    <div class="flex flex-wrap items-center gap-3 mb-6">
                        <span class="inline-flex items-center px-4 py-2 rounded-xl bg-primary-100 text-primary-800 font-semibold">
                            {{ $program->degree_type }}
                        </span>
                        <span class="inline-flex items-center px-4 py-2 rounded-xl bg-info-100 text-info-800 font-semibold">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $program->duration }}
                        </span>
                        @if($program->is_featured)
                        <span class="inline-flex items-center px-4 py-2 rounded-xl bg-warning-100 text-warning-800 font-semibold">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Featured Program
                        </span>
                        @endif
                    </div>

                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">{{ $program->title }}</h1>

                    <a href="{{ route('public.university.detail', $program->university->slug) }}" class="inline-flex items-center text-lg text-primary-600 hover:text-primary-800 font-semibold mb-8 transition-colors">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                        </svg>
                        {{ $program->university->name }}
                    </a>

                    <div class="prose prose-lg max-w-none mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Program Overview</h2>
                        <p class="text-xl text-gray-600 leading-relaxed mb-6">{{ $program->description }}</p>

                        <h3 class="text-xl font-bold text-gray-900 mb-4">Program Highlights</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>World-class faculty and research facilities</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Industry partnerships and internship opportunities</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Global alumni network</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Scholarship opportunities available</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-success-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Career support and placement services</span>
                            </li>
                        </ul>

                        <h3 class="text-xl font-bold text-gray-900 mt-8 mb-4">Entry Requirements</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Bachelor's degree or equivalent (for Master's programs)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>English language proficiency (IELTS/TOEFL)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Letters of recommendation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-600 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Statement of purpose</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="glass-light rounded-3xl p-8 shadow-glass-lg mb-8 sticky top-24 animate-fade-in-up">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Program Details</h3>

                    <div class="space-y-4 mb-8">
                        <div class="pb-4 border-b border-gray-200">
                            <div class="text-sm text-gray-600 mb-1">Tuition Fee</div>
                            <div class="text-3xl font-bold text-primary-600">{{ $program->currency }} {{ number_format($program->tuition_fee) }}</div>
                            <div class="text-sm text-gray-500">per year</div>
                        </div>

                        <div class="pb-4 border-b border-gray-200">
                            <div class="text-sm text-gray-600 mb-1">Duration</div>
                            <div class="text-lg font-bold text-gray-900">{{ $program->duration }}</div>
                        </div>

                        <div class="pb-4 border-b border-gray-200">
                            <div class="text-sm text-gray-600 mb-1">Degree Type</div>
                            <div class="text-lg font-bold text-gray-900">{{ $program->degree_type }}</div>
                        </div>

                        <div>
                            <div class="text-sm text-gray-600 mb-1">Location</div>
                            <div class="text-lg font-bold text-gray-900">{{ $program->university->city }}, {{ $program->university->country }}</div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="block w-full px-6 py-4 rounded-2xl bg-gradient-to-r from-primary-500 to-primary-700 text-white text-center font-semibold shadow-glass-lg hover:shadow-glass-xl hover:scale-105 transition-all duration-300 mb-4">
                        Apply Now
                        <svg class="inline-block ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <a href="{{ route('contact') }}"
                       class="block w-full px-6 py-4 rounded-2xl glass text-gray-700 text-center font-semibold hover:bg-white/50 transition-all duration-300">
                        Get More Info
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Programs -->
        @if($relatedPrograms->isNotEmpty())
        <div class="mt-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">More Programs at {{ $program->university->name }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedPrograms as $related)
                <div class="glass-light rounded-2xl p-6 shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="inline-flex items-center px-3 py-1 rounded-lg bg-primary-100 text-primary-800 text-xs font-semibold">
                            {{ $related->degree_type }}
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">{{ $related->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $related->description }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-primary-600">{{ $related->currency }} {{ number_format($related->tuition_fee) }}</span>
                        <a href="{{ route('public.program.detail', $related->slug) }}" class="text-sm font-semibold text-primary-600 hover:text-primary-800">
                            View →
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
