@extends('layouts.public')

@section('title', 'Blog - FlyHigh CRM')
@section('description', 'Read the latest articles, tips, and insights about studying abroad.')

@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">Blog & Resources</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Insights, tips, and guidance for your international education journey
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse($posts as $post)
                    <article class="glass-light rounded-3xl overflow-hidden shadow-glass hover:shadow-glass-lg transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                        <div class="h-48 bg-gradient-to-br from-primary-400 to-primary-600 relative">
                            <div class="absolute inset-0 bg-black/20"></div>
                            @if($post->is_featured)
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
                            <div class="flex items-center gap-3 mb-3">
                                @if($post->category)
                                <span class="inline-flex items-center px-3 py-1 rounded-lg bg-primary-100 text-primary-800 text-xs font-semibold">
                                    {{ $post->category->name }}
                                </span>
                                @endif
                                <span class="text-xs text-gray-500">
                                    {{ $post->published_at->format('M d, Y') }}
                                </span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">{{ $post->title }}</h2>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center text-white text-xs font-bold">
                                        {{ substr($post->author->name, 0, 2) }}
                                    </div>
                                    <span class="ml-2 text-sm text-gray-600">{{ $post->author->name }}</span>
                                </div>
                                <a href="{{ route('public.blog.post', $post->slug) }}" class="text-sm font-semibold text-primary-600 hover:text-primary-800">
                                    Read More →
                                </a>
                            </div>
                        </div>
                    </article>
                    @empty
                    <div class="col-span-2 text-center py-12">
                        <div class="glass-light rounded-3xl p-12 inline-block">
                            <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                            <p class="text-gray-500 text-lg">No blog posts available yet.</p>
                            <p class="text-gray-400 text-sm mt-2">Check back soon for helpful articles and insights!</p>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if($posts->hasPages())
                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Categories -->
                @if($categories->isNotEmpty())
                <div class="glass-light rounded-2xl p-6 shadow-glass mb-8 sticky top-24">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('public.blog') }}" class="flex items-center justify-between px-3 py-2 rounded-lg hover:bg-white/50 transition-colors {{ !request('category') ? 'bg-primary-50 text-primary-700 font-semibold' : 'text-gray-700' }}">
                                <span>All Posts</span>
                                <span class="text-sm">{{ $posts->total() }}</span>
                            </a>
                        </li>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('public.blog', ['category' => $category->slug]) }}" class="flex items-center justify-between px-3 py-2 rounded-lg hover:bg-white/50 transition-colors {{ request('category') == $category->slug ? 'bg-primary-50 text-primary-700 font-semibold' : 'text-gray-700' }}">
                                <span>{{ $category->name }}</span>
                                <span class="text-sm">{{ $category->posts_count }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Newsletter -->
                <div class="glass-dark rounded-2xl p-6 shadow-glass-lg">
                    <h3 class="text-lg font-bold text-white mb-3">Stay Updated</h3>
                    <p class="text-white/80 text-sm mb-4">Subscribe to our newsletter for the latest tips and insights.</p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Your email" class="w-full px-4 py-3 rounded-xl glass border-0 text-sm focus:ring-2 focus:ring-white/50">
                        <button type="submit" class="w-full px-4 py-3 rounded-xl bg-white text-primary-700 font-semibold hover:bg-gray-100 transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
