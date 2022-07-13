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

        <li>
          <a href="{{route('panel.page.index')}}"
          class="@if (request()->routeIs('panel.page.*')) bg-gray-800 text-white @endif">
            <ion-icon name="reader-outline"  class="text-2xl"></ion-icon>
         آگهی ها
          </a>
        </li>
        <li>
            <a href="{{route('admin.instagram.page.category.index')}}"
            class="@if (request()->routeIs('admin.instagram.page.category.*')) bg-gray-800 text-white @endif">
            <ion-icon name="speedometer-outline" class="text-2xl"></ion-icon>
              خرید پکیج
            </a>
          </li>


          <li>
            <a href="{{route('admin.user.index')}}"
            class="@if (request()->routeIs('admin.user.*')) bg-gray-800 text-white @endif">
            <ion-icon name="chatbox-ellipses-outline" class="text-2xl"></ion-icon>
                پیام ها
            </a>
          </li>

          <li>
            <a href="{{route('admin.user.index')}}"
            class="@if (request()->routeIs('admin.user.*')) bg-gray-800 text-white @endif">
            <ion-icon name="wallet-outline" class="text-2xl"></ion-icon>
                کیف پول
            </a>
          </li>


          <hr class="my-3">

        <li>
          <a>
            <ion-icon name="settings-outline" class="text-2xl"></ion-icon>
            تنظیمات
          </a>
        </li>

      </ul>



</div>
