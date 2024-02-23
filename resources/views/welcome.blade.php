@extends('layouts.main')

@section('title', 'nown')

@section('content')
    <section class="flex flex-wrap  justify-between gap-5">
        <div class="w-20">
            <select id="filter" name="filter"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer">
                <option value="latest">Latest</option>
                <option value="Z-A">A-Z</option>
                <option value="A-Z">Z-A</option>
            </select>
        </div>
        <div class="relative mb-6 self-center">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </div>
            <input type="text" id="input-group-1" name="search"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Search...">
        </div>
    </section>

    <section class="mt-5 space-y-5 font-bold">
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
        @for($i = 0; $i < 10; $i++)
            <div>
                <h2 class="text-gray-900 dark:text-gray-200">2023 November 29, 09:00 h</h2>
                <div
                    class="w-full text-gray-900 bg-gray-50 dark:bg-gray-700 border border-gray-300 overflow-x-hidden p-2 rounded dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
                    <h3 class="font-bold text-xl">How start a new project with Docker?</h3>
                    <p class="text-gray-400 dark:text-gray-300 line-clamp-2">Mussum Ipsum, cacilds vidis litro abertis.
                        Manduma
                        pindureta
                        quium dia nois paga. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non
                        ipsum
                        felis. Interagi no mé, cursus quis, vehicula ac nisi. Suco de cevadiss deixa as pessoas mais
                        interessantis.</p>

                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2 mt-2 text-gray-400 dark:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-chat-left-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            </svg>
                            <span class="font-bold ">
                    23
                    </span>
                        </div>

                        <div class="flex items-center gap-2 mt-2 text-gray-400 dark:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                            <span class="font-bold line-clamp-1 ">
                    Kevin Feitosa
                    </span>
                        </div>
                    </div>
                </div>
            </div>

        @endfor
    </section>

@endsection
