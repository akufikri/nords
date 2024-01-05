<div id="validate-logout-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-sm max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-black">

            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <h2 class="text-center text-white font-extrabold">
                    Keluar dari Nord`s ?
                </h2>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Anda bisa masuk kembali kapan saja. Jika hanya ingin beralih akun, Anda dapat melakukannya dengan
                    menambahkan akun yang ada
                </p>
            </div>
            <!-- Modal footer -->
            <div class="grid p-4 md:p-5 border-t border-gray-200 rounded-b gap-3 dark:border-gray-600">
                <button onclick="location.href='/logout'" data-modal-hide="validate-logout-modal" type="button"
                    class="text-black font-bold bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-full text-sm px-5 py-2.5 text-center dark:bg-white dark:hover:bg-gray-50 ">Keluar</button>
                <button data-modal-hide="validate-logout-modal" type="button"
                    class="text-white font-bold bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-full text-sm px-5 py-2.5 text-center dark:bg-black dark:hover:bg-gray-950 border">Batal</button>


            </div>
        </div>
    </div>
</div>
