<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Join With Nord`s | SignIn</title>
</head>

<body class="dark:bg-black">

    <div class="flex">
        <div class="flex justify-center items-center h-screen w-full">
            <div class="max-w-xl w-full">
                <div class="mb-10 text-center">
                    <h1 class="text-5xl text-white font-extrabold text-center">Nord`s</h1>
                    <span class="text-white mt-3">Temukan insiprasi mu di Nord`s</span>
                </div>
                <div class="">

                    <form class="max-w-sm mx-auto" action="/login/proccess" method="POST">
                        @csrf
                        <div class="mb-5">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input name="email" type="email" id="email"
                                class="bg-gray-900 border border-gray-300 text-gray-900 text-sm rounded-full transition focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                placeholder="jhon@example.com" autocomplete="off">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1 ms-5">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input name="password" type="password" id="password"
                                class="bg-gray-900 border transition border-gray-300 text-gray-900 text-sm rounded-full focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                autocomplete="off" placeholder=".........">
                            @error('password')
                                <p class="text-red-500 text-xs mt-1 ms-5">{{ $message }}</p>
                            @enderror
                        </div>
                        @if (session('error'))
                            <p class="text-red-500 text-xs mb-2">{{ session('error') }}</p>
                        @endif
                        <div class="grid gap-5">
                            <button
                                type="submit"class="text-white border py-3 rounded-full hover:bg-gray-950 transition font-bold">Masuk</button>
                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                                <span
                                    class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-black">or</span>
                            </div>
                            <button onclick="location.href='/signup'"
                                type="button"class="text-white border py-3 rounded-full hover:bg-gray-950 transition font-bold">Buat
                                Akun</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
