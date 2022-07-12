@extends('layouts.master')

@section('body')
<div class="bg-gray-900">
    <div class=" container w-full mx-auto px-2 border-t-2 border-slate-600 py-5">
      <div class="relative flex items-center justify-between ">
        <div class="flex flex-col gap-2 text-gray-300 ">
            <div class="text-xl text-gray-300 ">
                خرید پیج اینستاگرام
            </div>
            <div class="text-sm">
                دی جی اینستا | اولین سامانه هوشمند خرید و فروش پیج و اکانت اینستاگرام

            </div>
        </div>

        <div class="flex gap-8 items-center justify-center ">
          <div class="hidden sm:block sm:ml-6">
            <div class="flex gap-2 ">

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">دسته بندی ها</a>

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">جدیدترین ها</a>

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">تخفیف دار ها</a>

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">کارشناسی شده   </a>


            {{-- <a href="#" class="relative text-gray-300 hover:bg-slate-800 transition-all duration-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">
               <span>خرید لایک و فالور</span>
               <span class="text-xs absolute -bottom-1 right-4 text-orange-500">به زودی</span>
            </a> --}}



            </div>
          </div>
        </div>
        {{-- <div  class="flex flex-col gap-5 items-center">

            <form action="" class="">
                <div class="flex gap-3">
                    <select class="text-sm bg-gray-200 p-2 px-3 h-9 rounded font-semibold">
                        <option disabled selected>انتخاب دسته بندی</option>
                        <option>Han Solo</option>
                        <option>Greedo</option>
                    </select>
                    <select class="select select-bordered text-sm bg-gray-200">
                        <option disabled selected>تعداد فالور</option>
                        <option>Han Solo</option>
                        <option>Greedo</option>
                    </select>
                    <select class="select select-bordered text-sm bg-gray-200">
                        <option disabled selected>تعداد فالویینگ</option>
                        <option>Han Solo</option>
                        <option>Greedo</option>
                    </select>

                    <a href="" class="flex gap-2 items-center justify-center text-base px-5 py-2 bg-gray-900 rounded-xl text-white hover:bg-orange-500">
                        <ion-icon name="search-outline" class="text-3xl"></ion-icon>
                    </a>

                </div>
            </form>
        </div> --}}
      </div>
    </div>


</div>







{{-- Page Cointent --}}



<div class="bg-gray-100">
    <div class="container mx-auto my-3">







            <div class="flex gap-5 my-5">
                <div class="w-1/5 flex flex-col gap-5">

                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div class="font-semibold text-lg">
                            بر اساس دسته بندی
                        </div>
                        <div>
                            <select class="select w-full bg-gray-100">
                                <option disabled selected>Pick your favorite Simpson</option>
                                <option>Homer</option>
                                <option>Marge</option>
                                <option>Bart</option>
                                <option>Lisa</option>
                                <option>Maggie</option>
                              </select>
                        </div>

                    </div>



                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div class="font-semibold text-lg">
                            بر اساس فالور
                        </div>
                        <div dir="ltr">
                            <input type="range" min="0" max="100" value="0" class="range" step="25" />
                            <div class="w-full flex justify-between text-xs px-2">
                                <span>1K</span>
                                <span>5K</span>
                                <span>10K</span>
                                <span>30K</span>
                                <span>50K+</span>
                            </div>
                        </div>

                    </div>


                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div class="font-semibold text-lg">
                            بر اساس قیمت
                        </div>
                        <div dir="ltr">
                            <input type="range" min="0" max="100" value="0" class="range" step="25" />
                            <div class="w-full flex justify-between text-xs px-2">
                                <span>1K</span>
                                <span>5K</span>
                                <span>10K</span>
                                <span>30K</span>
                                <span>50K+</span>
                            </div>
                        </div>

                    </div>




                    <div class="flex justify-between gap-3 p-3 bg-white rounded-xl">
                        <div class="font-semibold text-lg">
                           کارشناسی شده
                        </div>
                        <div>
                            <input type="checkbox" class="toggle" checked />
                        </div>

                    </div>


                    <div class="flex justify-between gap-3 p-3 bg-white rounded-xl">
                        <div class="font-semibold text-lg">
                           دارای تخفیف
                        </div>
                        <div>
                            <input type="checkbox" class="toggle" checked />
                        </div>

                    </div>

                </div>

                <div class="w-4/5">


                    <div class="grid grid-cols-4 gap-5">
                        @for ($i=0;$i<10;$i++)

                            <x-product.instagram-card2/>
                        @endfor
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>




@endsection
