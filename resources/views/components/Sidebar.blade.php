  <div class="fixed bg-black w-80 h-screen text-white z-50 border-r">
      {{-- sidebar --}}
      <aside class="my-20 ms-14 px-2">
          <ul class="">
              <li class="mb-3">
                  <a data-turbo-frame="my_frame" href="/"
                      class="hover:bg-gray-800 transition duration-300 hover:text-gray-300 rounded-full flex gap-5 text-[21px] max-w-40 ps-4 py-2">
                      <i class="fa-solid fa-house-user mt-1"></i>
                      <span class="font-base">Beranda</span></a>
              </li>
              <li class="mb-3">
                  <a data-turbo-frame="/jelajah_page" href="/jelajah"
                      class="hover:bg-gray-800 transition duration-300 hover:text-gray-300 rounded-full flex gap-5 text-[21px] max-w-40 ps-4 py-2">
                      <i class="fa-solid fa-magnifying-glass mt-1"></i>
                      <span class="font-base">Jelajahi</span>
                  </a>
              </li>
              <li class="mb-3">
                  <a href=""
                      class="hover:bg-gray-800 transition duration-300 hover:text-gray-300 rounded-full flex gap-5 text-[21px] max-w-40 ps-4 py-2">
                      <i class="fa-solid fa-bell mt-1"></i>
                      <span class="font-base">Notifikasi</span>
                  </a>
              </li>
              <li class="mb-4">
                  <a href=""
                      class="hover:bg-gray-800 transition duration-300 hover:text-gray-300 rounded-full flex gap-5 text-[21px] max-w-40 ps-4 py-2">
                      <i class="fa-solid fa-envelope mt-1"></i>
                      <span class="font-base">Pesan</span>
                  </a>
              </li>
              <li class="mb-3">
                  <button
                      class="bg-indigo-800 px-20 font-bold py-3 rounded-full shadow-lg hover:bg-indigo-900 transition hover:text-gray-100">Posting</button>
              </li>

          </ul>
      </aside>
  </div>
