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
          <a href="{{route('admin.instagram.page.advertise.index')}}"
          class="@if (request()->routeIs('admin.instagram.page.advertise*')) bg-gray-800 text-white @endif">
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
            <span>پکیج ها   </span>
          </li>
          <li>
            <a href="{{route('admin.user.index')}}"
            class="@if (request()->routeIs('admin.user.*')) bg-gray-800 text-white @endif">
            <ion-icon name="speedometer-outline" class="text-2xl"></ion-icon>
                لیست پکیج ها
            </a>
          </li>


          <hr class="my-3">


        <li class="menu-title">
            <span>کاربران   </span>
          </li>
          <li>
            <a href="{{route('admin.user.index')}}"
            class="@if (request()->routeIs('admin.user.*')) bg-gray-800 text-white @endif">
            <ion-icon name="accessibility-outline" class="text-2xl"></ion-icon>
                لیست کاربران
            </a>
          </li>

        <li class="menu-title">
            <span>تنظیمات سایت   </span>
          </li>
        <li>
          <a>
            <ion-icon name="settings-outline" class="text-2xl"></ion-icon>
            تنظیمات
          </a>
        </li>

      </ul>



</div>
