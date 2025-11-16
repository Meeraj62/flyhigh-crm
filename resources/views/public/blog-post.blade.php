@extends('layouts.public')

@section('title', $post->title . ' - FlyHigh CRM Blog')
@section('description', $post->excerpt)

@section('content')

<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 animate-fade-in-up">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('public.blog') }}" class="text-gray-600 hover:text-primary-600 transition-colors">Blog</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-semibold truncate">{{ $post->title }}</li>
            </ol>
        </nav>

        <!-- Post Header -->
        <article class="glass-light rounded-3xl overflow-hidden shadow-glass-lg mb-12 animate-fade-in-up">
            <div class="h-96 bg-gradient-to-br from-primary-400 to-primary-600 relative">
                <div class="absolute inset-0 bg-black/20"></div>
                @if($post->is_featured)
                <div class="absolute top-6 left-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-xl bg-warning-100 text-warning-800 font-semibold">
                        <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        Featured Post
                    </span>
                </div>
                @endif
            </div>

            <div class="p-8 lg:p-12">
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    @if($post->category)
                    <a href="{{ route('public.blog', ['category' => $post->category->slug]) }}" class="inline-flex items-center px-4 py-2 rounded-xl bg-primary-100 text-primary-800 font-semibold hover:bg-primary-200 transition-colors">
                        {{ $post->category->name }}
                    </a>
                    @endif
                    <span class="flex items-center text-gray-600">
                        <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        {{ $post->published_at->format('F d, Y') }}
                    </span>
                </div>

                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">{{ $post->title }}</h1>

                <div class="flex items-center mb-8">
                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center text-white text-lg font-bold mr-4">
                        {{ substr($post->author->name, 0, 2) }}
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">{{ $post->author->name }}</div>
                        <div class="text-sm text-gray-600">Author</div>
                    </div>
                </div>

                @if($post->excerpt)
                <p class="text-xl text-gray-600 leading-relaxed mb-8 pb-8 border-b border-gray-200">
                    {{ $post->excerpt }}
                </p>
                @endif

                <div class="prose prose-lg max-w-none">
                    {!! nl2br(e($post->content)) !!}
                </div>
            </div>
        </article>

        <!-- Share Buttons -->
        <div class="glass-light rounded-2xl p-6 shadow-glass mb-12">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-gray-900">Share this article</h3>
                <div class="flex gap-3">
                    <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl glass hover:bg-white/50 transition-all duration-200 group">
                        <svg class="h-5 w-5 text-gray-600 group-hover:text-primary-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl glass hover:bg-white/50 transition-all duration-200 group">
                        <svg class="h-5 w-5 text-gray-600 group-hover:text-primary-600" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl glass hover:bg-white/50 transition-all duration-200 group">
                        <svg class="h-5 w-5 text-gray-600 group-hover:text-primary-600" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Posts -->
        @if($relatedPosts->isNotEmpty())
        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedPosts as $related)
                <article class="glass-light rounded-2xl overflow-hidden shadow-glass hover:shadow-glass-lg transition-all duration-300">
                    <div class="h-40 bg-gradient-to-br from-primary-400 to-primary-600"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">{{ $related->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $related->excerpt }}</p>
                        <a href="{{ route('public.blog.post', $related->slug) }}" class="text-sm font-semibold text-primary-600 hover:text-primary-800">
                            Read More →
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
