@extends('site.layouts.master')

@section('body')
<div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
    <div class="container mx-auto py-10 ">
        <div class="flex justify-center ">
            <div class="flex w-full justify-between items-center">
                <div class="flex flex-col gap-3">
                    <div class="text-4xl font-semibold text-white">
                        <span>خرید پیج اینستاگرام کد #35</span>
                    </div>
                    <div class="text-sm breadcrumbs text-gray-100" dir="rtl">
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
                <div class="w-1/5 flex flex-col gap-5">

                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div>
                            <img src="https://vamp-brands.com/wp-content/uploads/2021/01/switch-creator-v-business-instagram-account-one.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="w-2/5">
                    <div class="flex flex-col gap-3 p-3 bg-white rounded-xl">
                        <div>
                            <div class="flex flex-col text-white  items-center bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 p-3 rounded-xl">
                                <div class="w-full flex flex-col justify-end items-end gap-2">
                                    <div class="flex w-full items-center justify-between">
                                        <div class="flex gap-1">
                                            <div class="text-xs px-2 py-1 border rounded-xl text-gray-100 border-gray-100">30% تخفیف</div>
                                            <div class="text-xs px-2 py-1 border rounded-xl text-gray-100 border-gray-100">ویژه</div>

                                        </div>
                                        <ion-icon name="logo-instagram" class="text-7xl"></ion-icon>
                                    </div>
                                    <div dir="ltr" class="text-center text-sm">
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
                <div class="w-2/5">
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