<!-- This example requires Tailwind CSS v2.0+ -->
<div class=" bg-slate-800">
    <div class=" container w-full mx-auto px-2 py-3 flex justify-between ">
        <div class=" text-gray-100 text-xs">
            دی جی اینستا | اولین سامانه هوشمند خرید و فروش پیج و اکانت اینستاگرام
        </div>
        <div class="flex gap-2 text-gray-300 text-xs">
            <a class="hover:text-gray-100" href="">آموزش کار با سایت</a>
            |
            <a class="hover:text-gray-100" href="">قوانین سایت    </a>
            |
            <a class="hover:text-gray-100" href="">پشتیبانی</a>
            |
            <a class="hover:text-gray-100" href="">درباره ما </a>
        </div>
    </div>

</div>
<nav class="bg-gray-900">
    <div class=" container w-full mx-auto px-2 py-2">
      <div class="relative flex items-center justify-between h-20">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex gap-8 items-center justify-center ">
          <div class="flex flex-col items-center">
                <h2 class="text-3xl text-gray-200">دیجی اینستا</h2>
                {{-- <span class="text-2xl text-gray-400">DG Insta</span> --}}
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex gap-2 ">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="flex items-center justify-center  transition-all duration-500 gap-2 bg-slate-800 text-white px-5 py-2 rounded-md text-base font-medium" aria-current="page">
                <ion-icon name="home"></ion-icon>
                <span>خانه</span>
              </a>

              <a href="#" class="text-gray-300 hover:bg-slate-800 transition-all duration-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">خرید پیج اینستاگرام </a>

              <a href="#" class="text-gray-300 hover:bg-slate-800 transition-all duration-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">فروش پیج اینستاگرام</a>


            {{-- <a href="#" class="relative text-gray-300 hover:bg-slate-800 transition-all duration-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">
               <span>خرید لایک و فالور</span>
               <span class="text-xs absolute -bottom-1 right-4 text-orange-500">به زودی</span>
            </a> --}}

            <a href="#" class="relative text-gray-300 hover:bg-slate-800 transition-all duration-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">
                <span>امنیت پیج اینستاگرام  </span>
                <span class="text-xs absolute -bottom-1 right-4 text-orange-500">به زودی</span>
             </a>

             <a href="#" class="relative text-gray-300 hover:bg-slate-800 transition-all duration-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">
                <span>تولید محتوا    </span>
                <span class="text-xs absolute -bottom-1 right-4 text-orange-500">به زودی</span>
             </a>

             <a href="#" class="relative text-gray-300 hover:bg-slate-800 transition-all duration-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">
                <span>مشاوره مارکتینگ   </span>
                <span class="text-xs absolute -bottom-1 right-4 text-orange-500">به زودی</span>
             </a>


            </div>
          </div>
        </div>
        <div class=" flex gap-3 items-center sm:static sm:inset-auto">

            <a href="/explore" class="flex items-center gap-2 font-medium text-gray-100 hover:text-white bg-slate-800 hover:bg-orange-500 transition-all duration-500  px-3 py-2 rounded-md text-sm">
                <ion-icon name="add" class="text-2xl"></ion-icon>
                <span>فروش پیج اینستاگرام    </span>
              </a>

              {{-- <a href="/explore" class="flex items-center gap-2 text-gray-100 hover:text-white bg-indigo-800 hover:bg-indigo-900 transition-all duration-500  px-3 py-2 rounded-md text-sm font-medium">
                <ion-icon name="basket-outline" class="text-2xl"></ion-icon>
                <span>خرید پیج اینستاگرام    </span>
              </a> --}}


            {{-- <a href="#" class="text-gray-100 hover:text-white  bg-indigo-800 hover:bg-indigo-700 transition-all duration-500 px-3 py-2 rounded-md text-sm font-medium">فروش پیج اینستاگرام   </a> --}}


            <a href="/explore" class="flex justify-center items-center text-gray-200 hover:text-white bg-slate-800 hover:bg-slate-700 transition-all duration-500 px-3 py-2 rounded-md text-sm font-medium">
                <ion-icon name="person" class="text-2xl"></ion-icon>
            </a>

        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
      </div>
    </div>
</nav>


