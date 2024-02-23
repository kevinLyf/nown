@extends('layouts.main')

@section('title', $post->title)

@section('content')
    <section class="max-w-5xl">
        <div class="flex items-center gap-5 text-gray-500 font-bold">
            <div class="flex flex-wrap items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd"
                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                <span class="line-clamp-1">
                    Kevin Feitosa
                </span>
            </div>
            <div class="flex flex-wrap items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-clock-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                </svg>
                <span class="line-clamp-1">
                    {{ date('d/m/Y H:i', strtotime($post->created_at))  }} h
                </span>
            </div>
        </div>

        <div class="mt-2">
            <h1 class="text-gray-600 dark:text-gray-200 font-bold text-4xl">{{ $post->title  }}</h1>
            <p class="text-gray-400 dark:text-gray-300 mt-3">{{ $post->description  }}</p>
        </div>
    </section>
@endsection
