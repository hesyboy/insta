@extends('site.layouts.master')

@section('body')
<div class="w-full
bg-gradient-to-r
from-indigo-700
via-purple-700
to-pink-700
background-animate " id="gradient">
    <style>
        body {
          font-family: "Inter", sans-serif;
        }

        .background-animate {
          background-size: 400%;

          -webkit-animation: AnimationName 6s ease infinite;
          -moz-animation: AnimationName 6s ease infinite;
          animation: AnimationName 6s ease infinite;
        }

        @keyframes AnimationName {
          0%,
          100% {
            background-position: 0% 50%;
          }
          50% {
            background-position: 100% 50%;
          }
        }
      </style>



    <div class="container mx-auto py-24 ">
        <div class="flex justify-center items-center gap-5 ">
            <div class="flex flex-col justify-center items-center">
                <ion-icon name="logo-instagram" class="text-[300px] text-gray-200"></ion-icon>
                <div class="text-4xl font-semibold text-gray-200">
                    dginsta.com
                </div>
            </div>
            <div class="flex flex-col gap-5 items-center">
                <div class="w-full flex flex-col gap-5">
                    <div class="text-6xl font-bold text-gray-200">
                        دیجی اینستا
                    </div>

                </div>
                <div  class="w-full flex flex-col gap-8">
                    <div class="text-xl text-gray-200">
                        سایت رایگان آگهی خرید و فروش پیج و اکانت اینستاگرام
                    </div>


                    <div class="flex gap-5">
                        <a href="/explore" class="flex items-center gap-2 text-gray-100 hover:text-white bg-orange-600 hover:bg-orange-500 transition-all duration-500  px-3 py-2 rounded-md text-base font-medium">
                            <ion-icon name="add" class="text-4xl"></ion-icon>
                            <span>فروش پیج اینستاگرام    </span>
                          </a>

                          <a href="/explore" class="flex items-center gap-2 text-gray-100 hover:text-white bg-indigo-800 hover:bg-indigo-900 transition-all duration-500  px-3 py-2 rounded-md text-base font-medium">
                            <ion-icon name="basket-outline" class="text-4xl"></ion-icon>
                            <span>خرید پیج اینستاگرام    </span>
                          </a>
                    </div>
                    {{-- <form action="" class="mt-5">
                        <div class="flex flex-col items-end justify-center gap-3">
                            <div class="w-full flex flex-col items-center justify-center gap-3">
                                <span class="text-white text-xs text-right">
                                    برای خرید پیج ، ابتدا دسته بندی مورد نطر را مشخص کنید
                                </span>
                            </div>

                            <div class="flex items-end justify-center gap-3">
                                <select class="select select-bordered text-base w-64">
                                    <option disabled selected>انتخاب دسته بندی</option>
                                    <option>Han Solo</option>
                                    <option>Greedo</option>
                                </select>
                                <a href="" class="w-auto flex gap-2 items-center justify-center text-base px-5 py-2 bg-orange-600 rounded-xl text-white hover:bg-orange-500">
                                    <ion-icon name="search-outline" class="text-3xl"></ion-icon>
                                    <span>جستجو   </span>
                                </a>
                            </div>


                        </div>
                    </form> --}}
{{--
                    <div class="flex flex-col gap-3 text-xs text-white mt-3">
                        <span>
                            اگر قصد فروش پیج خود را دارید اینجا کلیک کنید .
                        </span>
                        <a href="" class="flex gap-2 items-center justify-center text-base px-5 py-2 bg-indigo-800 rounded-xl text-white hover:bg-indigo-700">
                            <span>فروش پیج اینستاگرام</span>
                        </a>
                    </div> --}}


                    {{-- <div class="flex gap-5 mt-5">
                        <a href="" class="text-base px-5 py-2 bg-indigo-800 rounded-xl text-white hover:bg-indigo-900">خرید پیج اینستاگرام</a>
                        <a href="" class="text-base px-5 py-2 bg-orange-600 rounded-xl text-white hover:bg-orange-700">فروش پیج اینستاگرام</a>
                    </div> --}}







                </div>
                {{-- <div class="text-2xl font-semibold">
                    خرید و فروش بدون واسطه پیج و اکانت اینستاگرام
                </div>
                <div class="text-2xl font-semibold">
                    دارای گارانتی و ضمانت خرید 10 روزه
                </div> --}}
            </div>
        </div>

    </div>
</div>

<div class="bg-gray-100">
    <div class="container mx-auto my-3">


        <div>
            <div class="bg-gray-800 p-3 rounded-lg my-3">
                <div class=" text-xl text-white">
                    فروش ویژه پیج
                </div>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @for ($i=0;$i<10;$i++)
                        <div class="swiper-slide">
                            <x-product.instagram-card2/>
                        </div>
                    @endfor
                </div>
                              <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 5,
                    spaceBetween: 20,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    });
                </script>
            </div>


        </div>









        </div>
    </div>
</div>




@endsection
