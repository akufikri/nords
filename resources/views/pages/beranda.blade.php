@extends('app')
@section('content')
    <turbo-frame id="my_frame">
        <div>
            <div class=" mt-10 flex gap-5">
                <div>
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_text" id="floating_text"
                            class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 placeholder:text-xl text-xl  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="Tuangkan pikiran anda....." required autocomplete="off" />
                    </div>
                </div>
            </div>

            <div class="border-t-2 h-20  border-gray-500">
                <div class="flex mt-4 justify-between">
                    <div class="gap-4 flex ">
                        <button data-tooltip-target="settings-tooltip" class="text-white bg-gray-900 w-10 h-10 rounded-md">
                            <i class="fa-solid fa-gear hover:animate-spin"></i>
                        </button>
                        <button data-tooltip-target="img-tooltip" class="text-white bg-gray-900 w-10 h-10 rounded-md">
                            <i class="fa-regular fa-image"></i>
                        </button>
                    </div>
                    <div>
                        <button
                            class="text-white bg-indigo-800 hover:bg-indigo-900 px-8 text-base py-2 rounded-full font-medium transition">Posting</button>
                    </div>


                </div>
            </div>
        </div>

        {{-- postingan --}}
        <div class="grid grid-cols-1">
            <div class="h-auto  mb-4 rounded-md p-4">
                <div class="flex gap-5">
                    <div>
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Nama akun</h4>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                            non?</p>
                    </div>
                </div>
                {{-- media --}}
                <div class="mt-4 p-3">
                    <img src="https://placehold.co/700x400/EEE/31343C" class="rounded-lg" alt="">
                </div>
                {{-- button  actions --}}
                <div class="flex justify-between px-4">
                    <div>
                        <button><i class="fa-regular fa-heart text-white"></i></button>
                    </div>
                    <div>
                        <button><i class="fa-regular fa-comment text-white"></i></button>
                    </div>
                    <div class="flex gap-5">
                        <button><i class="fa-regular fa-bookmark text-white"></i></button>
                        <button><i class="fa-solid fa-share text-white"></i></button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="h-auto  mb-4 rounded-md p-4">
                <div class="flex gap-5">
                    <div>
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Nama akun</h4>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                            non?</p>
                    </div>
                </div>
                {{-- media --}}
                <div class="mt-4 p-3">
                    <img src="https://placehold.co/700x400/EEE/31343C" class="rounded-lg" alt="">
                </div>
                {{-- button  actions --}}
                <div class="flex justify-between px-4">
                    <div>
                        <button><i class="fa-regular fa-heart text-white"></i></button>
                    </div>
                    <div>
                        <button><i class="fa-regular fa-comment text-white"></i></button>
                    </div>
                    <div class="flex gap-5">
                        <button><i class="fa-regular fa-bookmark text-white"></i></button>
                        <button><i class="fa-solid fa-share text-white"></i></button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="h-auto  mb-4 rounded-md p-4">
                <div class="flex gap-5">
                    <div>
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-white font-bold">Nama akun</h4>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                            non?</p>
                    </div>
                </div>
                {{-- media --}}
                <div class="mt-4 p-3">
                    <div class="grid grid-cols-4 gap-2">
                        <div>
                            <img src="https://placehold.co/500x400/EEE/31343C" class="rounded-lg" alt="">
                        </div>
                        <div>
                            <img src="https://placehold.co/500x400/EEE/31343C" class="rounded-lg" alt="">
                        </div>
                        <div>
                            <img src="https://placehold.co/500x400/EEE/31343C" class="rounded-lg" alt="">
                        </div>
                        <div>
                            <img src="https://placehold.co/500x400/EEE/31343C" class="rounded-lg" alt="">
                        </div>
                    </div>
                </div>
                {{-- button  actions --}}
                <div class="flex justify-between px-4">
                    <div>
                        <button><i class="fa-regular fa-heart text-white"></i></button>
                    </div>
                    <div>
                        <button><i class="fa-regular fa-comment text-white"></i></button>
                    </div>
                    <div class="flex gap-5">
                        <button><i class="fa-regular fa-bookmark text-white"></i></button>
                        <button><i class="fa-solid fa-share text-white"></i></button>
                    </div>
                </div>
            </div>
            <hr>
        </div>

    </turbo-frame>
@endsection
