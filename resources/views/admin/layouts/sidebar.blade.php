<div class=" flex flex-col gap-5">

    <ul class="menu bg-base-100 w-full p-2 rounded-box">
        <li>
          <a class="@if (request()->routeIs('admin.index'))
            bg-gray-800 text-white
          @endif" href={{route('admin.index')}}>
          <ion-icon name="home-outline" class="text-2xl"></ion-icon>
          داشبورد
          </a>
        </li>
        <hr class="my-3">
        <li class="menu-title">
            <span>خرید و فروش پیج</span>
          </li>
        <li>
          <a>
            <ion-icon name="reader-outline"  class="text-2xl"></ion-icon>
            لیست آگهی ها
          </a>
        </li>
        <li>
            <a href="{{route('admin.instagram.page.category.index')}}"
            class="@if (request()->routeIs('admin.instagram.page.category.*')) bg-gray-800 text-white @endif">
            <ion-icon name="folder-outline" class="text-2xl"></ion-icon>
              دسته بندی ها
            </a>
          </li>

          <hr class="my-3">


        <li class="menu-title">
            <span>کاربران   </span>
          </li>
        <li>
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            لیست کاربران
          </a>
        </li>

        <li class="menu-title">
            <span>تنظیمات سایت   </span>
          </li>
        <li>
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            تنظیمات
          </a>
        </li>

      </ul>



</div>
