@extends('app')
@section('content')
    <x-Nav />
    <div class="pt-12">
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
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
                            <input name="titles" type="text" id="floating_text"
                                class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 placeholder:text-xl text-xl  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder="Tuangkan pikiran anda....." autocomplete="off" />
                        </div>
                        <div id="media-preview" class="flex gap-3"></div>
                    </div>
                </div>
            </div>

            <!-- Input untuk media -->
            <div class="border-t-2 h-20  border-gray-500">
                <div class="flex mt-4 justify-between">
                    <div class="gap-4 flex ">
                        <button data-tooltip-target="settings-tooltip" class="text-white bg-gray-900 w-10 h-10 rounded-md">
                            <i class="fa-solid fa-gear hover:animate-spin"></i>
                        </button>
                        <label for="media"
                            class="text-white text-center bg-gray-900 w-10 h-10 rounded-md cursor-pointer">
                            <i class="fa-regular fa-image mt-3"></i>
                            <input type="file" name="content[]" id="media" accept="image/*,video/*" multiple
                                class="hidden" onchange="previewMedia()">
                        </label>
                    </div>
                    <div>
                        <button type="submit"
                            class="text-white bg-indigo-800 hover:bg-indigo-900 px-8 text-base py-2 rounded-full font-medium transition">Posting</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- postingan --}}
    <div class="grid grid-cols-1">
        @foreach ($data as $post)
            <x-posts :post="$post" :likesCount="$likesCount[$post->id] ?? null" />
        @endforeach
    </div>

    <script>
        function previewMedia() {
            var input = document.getElementById('media');
            var previewContainer = document.getElementById('media-preview');
            previewContainer.innerHTML = '';

            var files = input.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                var reader = new FileReader();
                reader.onload = function(e) {
                    var mediaType = file.type.startsWith('image') ? 'img' : 'video';
                    var previewElement = document.createElement('div');
                    var mediaElement = document.createElement(mediaType);

                    mediaElement.src = e.target.result;
                    mediaElement.style.width = '200px'; // Ukuran tampilan gambar atau video
                    mediaElement.style.height = '150px';

                    // Tambahkan kelas rounded-full pada media preview
                    previewElement.classList.add('rounded-full');

                    previewElement.appendChild(mediaElement);
                    previewContainer.appendChild(previewElement);
                };

                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
