<a href="/user/{{ $post->user->name }}" class="h-auto mb-4 rounded-md p-4">
    <div class="flex gap-5">
        <div>
            <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                    </path>
                </svg>
            </div>
        </div>
        <div>
            <h4 class="text-white font-bold">{{ $post->user->name }}</h4>
            <p class="text-white">{{ json_decode($post->content)->titles }}</p>
        </div>
    </div>

    {{-- media --}}
    @if (isset(json_decode($post->content)->media))
        <div
            class="mt-4 p-3 grid {{ count(json_decode($post->content)->media) > 1 ? 'grid-cols-4' : 'grid-cols-1' }} gap-6 w-full">
            @foreach (json_decode($post->content)->media as $media)
                @if (Str::contains($media, ['.jpg', '.jpeg', '.png', '.gif']))
                    <img src="{{ asset($media) }}" class="rounded-lg w-full" alt="">
                @elseif (Str::contains($media, ['.mp4']))
                    <video controls width="400" height="300">
                        <source src="{{ asset($media) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endif
            @endforeach
        </div>
    @endif
</a>
{{-- button actions --}}
<div class="flex justify-between px-4 py-3">
    <form action="{{ route('posts.like', $post) }}" method="POST">
        @csrf
        <div class="flex items-center">
            <button type="submit">
                @if (auth()->user()->hasLiked($post))
                    <i class="fa-solid fa-heart text-white"></i>
                @else
                    <i class="fa-regular fa-heart text-white"></i>
                @endif
            </button>
            <span class="ml-2 text-white text-xs">{{ $likesCount->total_likes ?? 0 }}</span>

        </div>
    </form>
    <div>
        <button><i class="fa-regular fa-comment text-white"></i></button>
    </div>
    <div class="flex gap-5">
        <button><i class="fa-regular fa-bookmark text-white"></i></button>
        <button><i class="fa-solid fa-share text-white"></i></button>
    </div>
</div>

<hr>
