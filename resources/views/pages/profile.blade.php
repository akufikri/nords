@extends('app')
@section('content')
    <section>
        <x-Nav-profile />
        <div class="pt-24">
            <div class="bg-gray-600 h-36 rounded-tl-lg rounded-tr-lg">
            </div>
            <div>
                <div class="flex">
                    <div class="absolute top-48 px-2 mb-10">
                        <div
                            class="relative border-4 border-black w-32 h-32 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute w-36 h-36 text-gray-400 -left-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <button
                            class="text-white border font-bold text-sm hover:bg-gray-900 transition bg-black px-8 py-2 mt-3 rounded-full">Atur
                            Profile</button>
                    </div>
                </div>
                <div class="mt-8 mx-3">
                    <div>
                        <h4 class="text-white text-2xl font-bold">{{ Auth::user()->name }}</h4>
                        <span class="text-gray-500">@ {{ Auth::user()->username }}</span>
                    </div>
                    <div class="mt-5">
                        <span class="me-2"><i class="fa-solid fa-calendar-days text-gray-500"></i></span>
                        <span class="text-gray-500">Bergabung
                            {{ Auth::user()->created_at->translatedFormat('F Y') }}</span>
                    </div>

                    <div class="flex mt-2 gap-4">
                        <div>
                            <a href="#" class="text-gray-500 hover:underline">
                                <span class="font-bold text-white">{{ Auth::user()->following()->count() }}</span>
                                mengikuti
                            </a>
                        </div>
                        <div>
                            <a href="#" class="text-gray-500 hover:underline">
                                <span class="font-bold text-white"> {{ Auth::user()->followers()->count() }}</span>
                                pengikut
                            </a>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div
                            class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px ">
                                <li class="me-2">
                                    <a href="#"
                                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Postingan</a>
                                </li>
                                <li class="me-2">
                                    <a href="#"
                                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Suka</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
