@extends('site.layouts.master')

@section('body')
<div class="bg-indigo-900">
    <div class="container mx-auto py-24 ">
        <div class="flex justify-center ">
            <div class="flex flex-col gap-12 items-center">
                <div class="text-7xl font-semibold text-white">
                    اینستاگرام
                </div>
                <div  class="flex flex-col gap-5 items-center">
                    <div class="text-3xl text-white">
                           سامانه هوشمند خرید و فروش اکانت و پیج اینستاگرام
                    </div>
                    <div class="text-xl text-white">
                        خرید و فروش بدون واسطه و دارای گارانتی خرید
                    </div>


                    <form action="" class="mt-5">
                        <div class="flex gap-3">
                            <select class="select select-bordered text-base w-60">
                                <option disabled selected>انتخاب دسته بندی</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>
                            <select class="select select-bordered text-base w-40">
                                <option disabled selected>تعداد فالور</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>
                            <select class="select select-bordered text-base w-40">
                                <option disabled selected>تعداد فالویینگ</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>

                            <a href="" class="flex gap-2 items-center justify-center text-base px-5 py-2 bg-orange-600 rounded-xl text-white hover:bg-orange-500">
                                <ion-icon name="search-outline" class="text-3xl"></ion-icon>
                                <span>جستجو و خرید </span>
                            </a>

                        </div>
                    </form>

                    <div class="text-sm text-white mt-3">
                        <span>
                            اگر قصد فروش پیج خود را دارید اینجا کلیک کنید .
                        </span>
                        <span class="text-orange-600 hover:text-orange-500  ">
                            فروش پیج اینستاگرام
                        </span>
                    </div>


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
                            <x-product.instagram-card/>
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



            <div>
                <div class="tabs tabs-boxed">
                    <a class="tab">Tab 1</a>
                    <a class="tab tab-active">Tab 2</a>
                    <a class="tab">Tab 3</a>
                  </div>
                </div>





        </div>




            <div class="flex gap-5 my-5">
                <div class="w-1/4">
                    swwwwwwww
                </div>

                <div class="w-3/4">
                    <div class="bg-gray-800 p-3 rounded-lg my-3">
                        <div class=" text-xl text-white">
                            فروش ویژه پیج
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-5">
                        @for ($i=0;$i<10;$i++)

                            <x-product.instagram-card/>
                        @endfor
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>




@endsection
