<!DOCTYPE html>
<html lang="en" class="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nord`s</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="dark:bg-black">
        <div class="flex justify-between">
            {{-- sidebar --}}
            <x-Sidebar />
            {{-- sidebar --}}
            {{-- nav --}}

            {{-- nav --}}
            <div class="ml-96 w-full mr-96">
                @yield('content')

            </div>
            {{-- Rightbar --}}
            <x-Rightbar />
            {{-- Rightbar --}}
            <div class=" z-50 fixed right-0 bottom-3">
                @if (session()->has('message'))
                    <div id="alert-5" class="flex items-center p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
                        role="alert">
                        {!! session('icon') !!}
                        <span class="sr-only">{{ session('type') }}</span>
                        <div class="ms-3 text-sm font-medium text-gray-800 dark:text-gray-300">
                            {!! session('message') !!}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-gray-50 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="alert-5" aria-label="Close">
                            <span class="sr-only">Dismiss</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

            </div>
        </div>

        <script>
            // Set timeout untuk menutup alert otomatis setelah beberapa detik
            setTimeout(function() {
                document.getElementById('alert-5').style.display = 'none';
            }, 5000); // Waktu dalam milidetik (5000 ms = 5 detik)
        </script>
    </body>

</html>
