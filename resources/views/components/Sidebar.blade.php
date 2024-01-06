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
              <li class="mb-4">
                  <a href="/profile"
                      class="hover:bg-gray-800 transition duration-300 hover:text-gray-300 rounded-full flex gap-5 text-[21px] max-w-40 ps-4 py-2">
                      <i class="fa-solid fa-user mt-1"></i>
                      <span class="font-base">Profile</span>
                  </a>
              </li>
              <li class="mb-3">
                  <button
                      class="bg-indigo-800 px-20 font-bold py-3 rounded-full shadow-lg hover:bg-indigo-900 transition hover:text-gray-100">Posting</button>
              </li>
              <li class="bottom-3 absolute">
                  <button type="button" id="dropdownUserButton" data-dropdown-toggle="dropdown"
                      class="flex gap-4 hover:bg-gray-800 ps-4 pe-5 py-3 rounded-full transition">
                      <div>
                          <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                              <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                      clip-rule="evenodd"></path>
                              </svg>
                          </div>
                      </div>
                      <div class="grid text-start">
                          <span class="font-bold text-sm">{{ Auth::user()->name }}</span>
                          <span class="text-xs">@ {{ Auth::user()->username }}</span>
                      </div>
                  </button>

                  <!-- Dropdown menu -->
                  <div id="dropdown"
                      class="z-10 hidden bg-white divide-y divide-gray-100 rounded-full overflow-hidden shadow w-44 dark:bg-gray-950 border">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserButton">
                          <li>
                              <button type="button" data-modal-target="validate-logout-modal"
                                  data-modal-toggle="validate-logout-modal"
                                  class="block w-full px-4 py-2 hover:bg-gray-950 font-bold dark:hover:bg-gray-800 dark:hover:text-white">
                                  <i class="fa-solid fa-right-from-bracket me-1"></i>
                                  SignOut</button>
                          </li>
                      </ul>
                  </div>
              </li>
          </ul>
      </aside>
  </div>

  {{-- component --}}
  <x-modal-validate-logout />
