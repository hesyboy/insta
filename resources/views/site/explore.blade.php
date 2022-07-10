@extends('site.layouts.master')

@section('body')
<div class="bg-slate-800">
    <div class="container mx-auto py-10 ">
        <div class="flex justify-center ">
            <div class="flex w-full justify-between items-center">
                <div class="flex flex-col gap-5">
                    <div class="text-3xl font-semibold text-white">
                        خرید پیج اینستاگرام
                    </div>
                    {{-- <div class="text-base breadcrumbs text-gray-100" dir="rtl">
                        <ul>
                          <li><a>Home</a></li>
                          <li><a>Documents</a></li>
                          <li>Add Document</li>
                        </ul>
                      </div> --}}
                </div>
                <div  class="flex flex-col gap-5 items-center">

                    <form action="" class="">
                        <div class="flex gap-3">
                            <select class="select select-bordered text-sm bg-gray-200">
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

                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div class="font-semibold text-lg">
                            بر اساس مدت گارانتی
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
                           ویژه
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

                            <x-product.instagram-card/>
                        @endfor
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>




@endsection
