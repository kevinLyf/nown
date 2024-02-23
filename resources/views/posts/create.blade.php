@extends('layouts.main')

@section('title', 'nown - create a post')

@section('content')
    <section>
        <h1 class="text-gray-600 dark:text-gray-200 font-bold text-3xl">Create a new post</h1>
        @if($errors->any())
            <div
                    class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 border border-red-400 dark:bg-gray-800 dark:text-red-400 mt-5"
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

        <form action="/posts" method="POST" class="mt-5 space-y-5">
            @csrf

            <div>
                <label for="title" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Ex: how start..." />
            </div>

            <div>
                <label for="description"
                       class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Description</label>
                <textarea id="description" type="text" name="description" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Write your thoughts here..." >{{ @old('description')  }}</textarea>
            </div>

            <div>
                <input type="submit" value="Create"
                       class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 cursor-pointer"/>
            </div>
        </form>
    </section>
@endsection
