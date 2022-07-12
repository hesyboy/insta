@extends('site.layouts.master')

@section('body')
<div class="bg-slate-800">
    <div class="container mx-auto py-10 ">
        <div class="flex justify-center ">
            <div class="flex w-full justify-between items-center">
                <div class="flex flex-col gap-3">
                    <div class="text-4xl font-semibold text-white">
                        <span>خرید پیج اینستاگرام کد #35</span>
                    </div>
                    <div class="text-base breadcrumbs text-gray-100" dir="rtl">
                        <ul>
                          <li><a>Home</a></li>
                          <li><a>Documents</a></li>
                          <li>Add Document</li>
                        </ul>
                      </div>
                </div>
                <div  class="flex flex-col gap-5 items-center">

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
                <div class="w-3/12 flex flex-col gap-5">

                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div class="flex flex-col items-center justify-center gap-3 p-3 bg-white rounded-xl">
                            <div class="mockup-phone">
                                <div class="camera"></div>
                                <div class="display">
                                  <div class="artboard artboard-demo phone-1 p-1.5">
                                    <img src="http://127.0.0.1:8000/assets/images/instagram1.jpg" alt="">
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-6/12">
                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div>
                            <div class="flex flex-col text-white  items-center bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 p-3 rounded-xl">
                                <div class="w-full flex flex-col justify-end items-end gap-2 bg-white p-2 rounded-xl">
                                    <div class="flex w-full items-start justify-between">
                                        <div class="flex flex-col gap-5">
                                            <div class=" w-full flex gap-2  items-start mt-4">
                                                <div class="flex items-center justify-center bg-white rounded-xl shadow-lg p-1.5 text-sm tooltip" data-tip="نردبان">
                                                    <ion-icon name="flash" class="text-2xl text-gray-800"  ></ion-icon>
                                                </div>
                                                <div class="flex items-center justify-center bg-white rounded-xl shadow-lg p-1.5 text-sm  tooltip" data-tip=" تایید شده">
                                                    <ion-icon name="shield-checkmark" class="text-2xl text-gray-800"></ion-icon>
                                                </div>
                                                <div class="flex items-center justify-center bg-gray-800 rounded-xl shadow-lg p-1.5 text-sm tooltip" data-tip="نردبان">
                                                    <span class="text-base text-gray-200"> #35</span>
                                                </div>
                                                <div class="flex items-center justify-center bg-white rounded-xl shadow-lg p-2 font-semibold text-sm ">
                                                    <span  class="text-base text-gray-800 ">%30 تخفیف</span>
                                                </div>

                                            </div>
                                            <div>
                                                <h2 class="text-2xl text-gray-800"> پیج اینستاگرام کد #35</h2>
                                            </div>
                                        </div>
                                        <div>
                                            <ion-icon name="logo-instagram" class="text-[170px] text-gray-800"></ion-icon>
                                        </div>
                                    </div>
                                    <div dir="ltr" class="text-center text-sm text-gray-800">
                                        @hesammahmoodi
                                    </div>
                                </div>

                                <div class="w-full flex gap-3 justify-between mt-3">
                                    <div class="flex flex-col w-1/3 items-center bg-black/20 p-2 rounded-xl">
                                        <div class="text-lg font-semibold">5</div>
                                        <div class="text-xs">Following</div>
                                    </div>
                                    <div class="flex flex-col w-1/3 items-center bg-black/20 p-2 rounded-xl">
                                        <div class="text-lg font-semibold">5</div>
                                        <div class="text-xs">Follower</div>
                                    </div>
                                    <div class="flex flex-col w-1/3 items-center bg-black/20 p-2 rounded-xl">
                                        <div class="text-lg font-semibold">5</div>
                                        <div class="text-xs">Posts</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-3/12">
                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div>
                            <div>asdasdasdasd</div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>




@endsection
