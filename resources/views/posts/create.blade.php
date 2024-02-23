@extends('layouts.main')

@section('title', 'nown - create a post')

@section('content')
    <section>
        <h1 class="text-gray-600 dark:text-gray-200 font-bold text-3xl">Create a new post</h1>
        <form action="/posts" method="POST" class="mt-5 space-y-5">
            @csrf

            <div>
                <label for="title" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Ex: how start..." minlength="5" required/>
            </div>

            <div>
                <label for="Description"
                       class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Description</label>
                <textarea id="description" name="description" rows="4" minlength="10"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Write your thoughts here..." required></textarea>
            </div>

            <div>
                <input type="submit" value="Create" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 cursor-pointer"/>
            </div>
        </form>
    </section>
@endsection
