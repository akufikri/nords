  <nav class="fixed right-0 left-0 z-20 border-b">
      <div class="text-white flex justify-center ">
          <div class=" max-w-4xl py-5 rounded-br-xl rounded-bl-xl bg-black  w-full">
              <ul class="flex px-20 gap-5">
                  <li>
                      <button onclick="location.href='/'" class="w-10 bg-slate-900 h-10 rounded-full">
                          <i class="fa-solid fa-arrow-left"></i>
                      </button>
                  </li>
                  <li class="inline-block hover:underline  mt-1">
                      <a href="" class="font-medium text-lg">{{ Auth::user()->name }}</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
