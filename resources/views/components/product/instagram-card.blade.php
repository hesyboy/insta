<div>
    <a href="{{route('site.product')}}" class="relative bg-white rounded-box p-3 flex flex-col gap-5 w-68 group hover:scale-95 transition-all duration-300">


        <div class="overflow-hidden transition-all duration-500 flex flex-col text-white  items-center
         bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600
         p-3 rounded-xl relative pt-8">
            <div class="w-full flex flex-col justify-end items-end gap-2">
                <div class="flex w-full items-center justify-center">
                    {{-- <div class="flex gap-1">
                        <div class="text-xs px-2 py-1 border rounded-xl text-gray-100 border-gray-100">30% تخفیف</div>
                        <div class="text-xs px-2 py-1 border rounded-xl text-gray-100 border-gray-100">ویژه</div>

                    </div> --}}
                    {{-- <ion-icon name="logo-instagram" class="text-7xl"></ion-icon> --}}
                    <div class="w-full h-56 flex flex-col justify-center rounded-xl" style="background-size: cover; background-image: url({{asset('assets/images/instagram1.jpg')}})">

                    </div>
                </div>
                <div dir="ltr" class="text-center text-sm">
                    @hesammahmoodi
                </div>
            </div>
            <div class="w-full flex gap-3 justify-between mt-3">
                <div class="flex flex-col w-1/3 items-center bg-white text-gray-600 p-2 rounded-xl  font-semibold">
                    <div class="text-base">5</div>
                    <div class="text-xs">Following</div>
                </div>
                <div class="flex flex-col w-1/3 items-center bg-white text-gray-600 p-2 rounded-xl  font-semibold">
                    <div class="text-base">5</div>
                    <div class="text-xs">Follower</div>
                </div>
                <div class="flex flex-col w-1/3 items-center bg-white text-gray-600 p-2 rounded-xl  font-semibold">
                    <div class="text-base">5</div>
                    <div class="text-xs">Posts</div>
                </div>
            </div>


            <div class="flex flex-col w-full gap-2 bg-white text-gray-600 mt-3 mb-2 rounded-xl p-2 font-semibold ">
                <div class="flex justify-between px-2">
                    <div class="text-xs">
                        دسته بندی :
                    </div>
                    <div class="text-xs">
                        فرهنگ و هنر
                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full gap-2 bg-white text-gray-600 mb-2 rounded-xl p-2 font-semibold">
                <div class="flex justify-between px-2">
                    <div class="text-xs">
                         کیفیت فالورها:
                    </div>
                    <div class="text-xs">
                        کاملا واقعی
                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full gap-2 bg-white text-gray-600 mb-2 rounded-xl p-2 font-semibold ">
                <div class="flex justify-between px-2">
                    <div class="text-sm">
                        قیمت :
                    </div>
                    <div class="text-sm">
                        <span>1،000،000 تومان </span>

                    </div>
                </div>
            </div>


{{--
            <div class="flex w-full gap-3 justify-between mt-3">
                <div href="" class="flex items-center justify-center text-xs text-center p-2 bg-white rounded-xl text-gray-800 hover:bg-indigo-600 hover:text-white">
                    <ion-icon name="cart-outline" class="text-2xl"></ion-icon>
                </div>
                <div href="" class="flex items-center justify-center text-xs text-center p-2 bg-white rounded-xl text-gray-800 hover:bg-pink-600 hover:text-white">
                    <ion-icon name="eye-outline" class="text-2xl"></ion-icon>
                </div>
            </div> --}}


        </div>


        {{-- <div class="absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-all duration-500 overflow-hidden p-5 h-full w-full">
            <div class="w-full h-full flex flex-col justify-center rounded-xl" style="background-size: cover; background-image: url({{asset('assets/images/instagram1.jpg')}})">
                <div class="flex flex-col w-full gap-3 justify-center items-center">
                    <div href="" class="flex w-2/3 gap-2 items-center justify-center text-sm text-center p-2 bg-gray-800 rounded-xl text-gray-100 hover:bg-indigo-600 hover:text-white">
                        <ion-icon name="cart-outline" class="text-2xl"></ion-icon>
                        <span>خرید</span>
                    </div>
                    <div href="" class="flex w-2/3 gap-2 items-center justify-center text-sm text-center p-2 bg-gray-800 rounded-xl text-gray-100 hover:bg-pink-600 hover:text-white">
                        <ion-icon name="eye-outline" class="text-2xl"></ion-icon>
                        <span>مشاهده</span>
                    </div>
                </div>
            </div>
        </div> --}}





        {{-- <div class="">
            <a href="" class="text-base px-5 py-2 bg-indigo-800 rounded-xl text-white hover:bg-indigo-900">خرید پیج اینستاگرام</a>
        </div> --}}

        <div class="absolute -top-2 -left-2 w-full flex gap-2 justify-end z-50">


            <div class="flex items-center justify-center bg-white rounded-xl shadow-lg p-1.5 text-sm tooltip" data-tip="نردبان">
                <ion-icon name="flash" class="text-2xl text-gray-800"  ></ion-icon>
            </div>
            <div class="flex items-center justify-center bg-white rounded-xl shadow-lg p-1.5 text-sm  tooltip" data-tip=" تایید شده">
                <ion-icon name="shield-checkmark" class="text-2xl text-gray-800"></ion-icon>
            </div>
        </div>

        <div class="absolute -top-2 -right-2 w-full flex gap-2 justify-start">
            <div class="flex items-center justify-center bg-gray-800 rounded-xl shadow-lg p-1.5 text-sm tooltip" data-tip="نردبان">
                <span class="text-xs text-gray-200"> #35</span>
            </div>
            <div class="flex items-center justify-center bg-white rounded-xl shadow-lg p-2 font-semibold text-sm ">
                <span  class="text-xs text-gray-800 ">%30 تخفیف</span>
            </div>

        </div>

    </a>
</div>
