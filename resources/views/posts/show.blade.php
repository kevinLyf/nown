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
            <h1 class="text-gray-600 font-bold text-4xl">{{ $post->title  }}</h1>
            <p class="text-gray-400 mt-3">{{ $post->description  }}</p>
        </div>

        <div class="mt-20">
            <h4 class="text-xl font-semibold darK:text-gray-400 text-gray-600">
                Comments: {{ count($comments)  }}
            </h4>
            <form action="/comment/{{ $post->id }}" method="POST" class="space-y-3">
                @csrf
                <textarea id="message" name="message" rows="4"
                          class="lock p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-5"
                          placeholder="Write your thoughts here..."></textarea>
                <div>
                    <input type="submit" value="Send"
                           class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 cursor-pointer"/>
                </div>
            </form>
            @if($errors->any())
                <div
                    class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 border border-red-400 mt-5"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Danger</span>
                    <div>
                        <span class="font-medium">Ensure that these requirements are met:</span>
                        <ul class="mt-1.5 list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if(session('success'))
                <div
                    class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Success</span> {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="space-y-5 mt-5">
                @foreach($comments as $comment)
                    <div
                        class="border border-gray-300 dark:border-gray-800 p-4 rounded-sm bg-gray-100 dark:bg-slate-800 ">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-person-circle text-blue-500" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd"
                                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>

                                <h4 class="text-xl font-bold text-gray-600">{{ $comment->user->name }}</h4>
                            </div>
                            <span
                                class="text-sm text-gray-500">{{ $comment->created_at->format('h:i - D, m Y') }}</span>
                        </div>
                        <p class="mt-2 dark:text-gray-200 text-gray-800">{{ $comment->message }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
