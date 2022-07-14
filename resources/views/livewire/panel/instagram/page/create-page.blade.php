<div>
    <div class="  ">



        <div class="flex items-center">



            <div class="w-full">

                <div class="">

                    <form wire:submit.prevent="submit">
                        @csrf
                        <div class="w-full flex flex-col gap-5">


                            <div class="flex gap-5 bg-white p-5 shadow rounded-2xl">

                                <div class="w-full flex flex-col gap-5">

                                    <div class="flex flex-col gap-3">
                                        <div class="flex gap-3 items-center">
                                            <div class="py-2 text-gray-800">
                                                <div class="text-xl font-bold">
                                                    ثبت آگهی فروش پیج اینستاگرام
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            برای فروش پیج اینستاگرام خود اطلاعات پیج را به صورت دقیق در فرم زیر وارد کنید تا آگهی شما ساخته شود.
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="flex w-full flex-col md:flex-row gap-3">
                                        <div class="w-full md:w-12/12">
                                            <div class="text-sm flex justify-between items-center">
                                                <span>عنوان آگهی فروش پیج  </span>
                                                @error('title')
                                                <span class="text-orange-600 text-xs">{{$message}}</span>
                                                @enderror

                                            </div>
                                            <input name="title" wire:model.lazy="title" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100
                                                @error('title')
                                                border border-red-400
                                                @enderror "
                                             type="text" value="{{old('title')}}" placeholder="متن کوتاه نمایشی برای آگهی شما">
                                        </div>

                                    </div>




                                    <div class="flex w-full flex-col md:flex-row gap-5">
                                        <div class="w-full md:w-6/12">
                                            <div class="text-sm">
                                                <div class="flex justify-between items-center">
                                                    <span>آیدی پیج</span>
                                                    @error('pageId')
                                                    <span class="text-orange-600 text-xs">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <input wire:model.lazy="pageId" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100
                                            @error('pageId')
                                            border border-red-400
                                            @enderror "
                                             type="text" value="{{old('pageId')}}" placeholder=" آیدی پیج را وارد کنید .مثال : mypage@">
                                        </div>

                                        <div class="w-full md:w-6/12">
                                            <div class="text-sm flex justify-between items-center">
                                                <span>دسته بندی پیج  </span>
                                                @error('pageCategory')
                                                <span class="text-orange-600 text-xs">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <select wire:model.lazy="pageCategory" class="px-2 py-2 my-2 rounded-xl text-sm w-full bg-gray-100
                                            @error('pageCategory')
                                            border border-red-400
                                            @enderror ">
                                                <option value="">دسته بندی موضوعی پیج را انتخاب کنید        </option>
                                                @foreach ($pageCategories as $item )
                                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                                @endforeach

                                            </select>
                                        </div>



                                    </div>



                                    <div class="flex w-full flex-col md:flex-row gap-3">

                                        <div class="w-full md:w-4/12">
                                            <div class="">
                                                <div class="text-sm flex justify-between items-center">
                                                    <span>تعداد فالورها </span>
                                                    @error('pageFollowers')
                                                    <span class="text-orange-600 text-xs">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <input wire:model.lazy="pageFollowers" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100
                                            @error('pageFollowers')
                                            border border-red-400
                                            @enderror "
                                             type="number" placeholder="تعداد فالورهای پیج را وارد کنید">
                                        </div>

                                        <div class="w-full md:w-4/12">
                                            <div class="">
                                                <div class="text-sm flex justify-between items-center">
                                                    <span>تعداد پست ها </span>
                                                    @error('pagePosts')
                                                    <span class="text-orange-600 text-xs">{{$message}}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <input wire:model.lazy="pagePosts" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100
                                            @error('pagePosts')
                                            border border-red-400
                                            @enderror "
                                             type="number" placeholder="تعداد پست های پیج را وارد کنید">
                                        </div>



                                        <div class="w-full md:w-4/12">
                                            <div class="">
                                                <div class="text-sm flex justify-between items-center">
                                                    <span>تعداد فالویینگ ها </span>
                                                    @error('pageFollowings')
                                                    <span class="text-orange-600 text-xs">{{$message}}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <input wire:model.lazy="pageFollowings" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100
                                            @error('pageFollowings')
                                            border border-red-400
                                            @enderror "
                                             type="number" placeholder="تعداد فالویینگ های پیج را وارد کنید">
                                        </div>


                                    </div>




                                    {{-- <div class="flex w-full flex-col md:flex-row gap-3">

                                        <div class="w-full md:w-4/12">
                                            <div class="text-sm">
                                                <div class="flex justify-between px-1">
                                                    <span>کیفیت پیج  </span>
                                                </div>
                                                @error('seo_title')
                                                <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <input name="seo_title" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100 border-gray-400"
                                             type="text" value="{{old('seo_title')}}" placeholder="@mypage">
                                        </div>

                                        <div class="w-full md:w-4/12">
                                            <div class="text-sm">
                                                <div class="flex justify-between px-1">
                                                    <span>نوع پیج     </span>
                                                </div>
                                                @error('seo_title')
                                                <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <input name="seo_title" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100 border-gray-400"
                                             type="text" value="{{old('seo_title')}}" placeholder="@mypage">
                                        </div>

                                        <div class="w-full md:w-4/12">
                                            <div class="text-sm">
                                                <div class="flex justify-between px-1">
                                                    <span>جنسیت اغلب فالور ها </span>
                                                </div>
                                                @error('seo_title')
                                                <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <input name="seo_title" class="px-2 py-3 my-2 rounded-xl text-sm w-full bg-gray-100 border-gray-400"
                                             type="text" value="{{old('seo_title')}}" placeholder="@mypage">
                                        </div>

                                    </div> --}}



                                    <div class="flex gap-8 items-center">


                                        <div class="w-full md:w-4/12">
                                            <div>
                                                <div class="flex flex-col gap-3 items-center">
                                                    <div class="w-full text-sm my-1">
                                                        <span> تصاویر صفحه پروفایل</span>
                                                    </div>
                                                    <div class="w-full text-xs">
                                                        <span> اسکرین شات صفحه پروفایل پیج را طبق عکس زیر آپلود کنید</span>
                                                    </div>
                                                    <div class="w-full">
                                                        @error('pageProfilePhoto')
                                                        <span class="text-orange-600 text-xs">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="w-full justify-end">
                                                        <div class="w-52 border-2 border-dashed rounded-xl p-1 mb-3 relative flex justify-center items-center">
                                                            @if ($pageProfilePhoto)
                                                            <img id="preview" class="rounded-lg h-80"  src="{{$pageProfilePhoto->temporaryUrl()}}">
                                                            @else
                                                                <img id="preview" class="rounded-lg h-80"  src="{{asset('assets/images/instaview1.jpg')}}">
                                                            @endif
                                                            {{-- <ion-icon name="add-outline" class="text-6xl text-gray-200 absolute top-4 w-20 text-center"></ion-icon> --}}
                                                        </div>
                                                    </div>

                                                    <div  class="w-full justify-end px-2">
                                                        <label class="w-48 flex gap-3 items-center justify-center px-4 py-2 bg-orange-600 text-white rounded shadow-md tracking-wide uppercase border cursor-pointer hover:bg-orange-700 hover:text-white ease-linear transition-all duration-150">
                                                            <ion-icon class="text-xl" name="cloud-upload-outline"></ion-icon>
                                                            <span class=" text-sm leading-normal">افزودن تصاویر  </span>
                                                            <input wire:model.lazy="pageProfilePhoto" type="file" class="hidden" />
                                                        </label>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>




                                        <div class="w-full md:w-4/12">
                                            <div>
                                                <div class="flex flex-col gap-3 items-center">
                                                    <div class="w-full text-sm my-1">
                                                        <span> تصاویر آخرین پست</span>
                                                    </div>
                                                    <div class="w-full text-xs">
                                                        <span> اسکرین شات یکی از 5 پست آخر پیج را طبق عکس زیر آپلود کنید</span>
                                                    </div>

                                                    <div class="w-full">
                                                        @error('pageLastPostPhoto')
                                                        <span class="text-orange-600 text-xs">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="w-full justify-end">
                                                        <div class="w-52 border-2 border-dashed rounded-xl p-1 mb-3 relative flex justify-center items-center">
                                                            @if ($pageLastPostPhoto)
                                                            <img id="preview" class="rounded-lg h-80"  src="{{$pageLastPostPhoto->temporaryUrl()}}">
                                                            @else
                                                                <img id="preview" class="rounded-lg h-80"  src="{{asset('assets/images/instaview1.jpg')}}">
                                                            @endif
                                                            {{-- <ion-icon name="add-outline" class="text-6xl text-gray-200 absolute top-4 w-20 text-center"></ion-icon> --}}
                                                        </div>
                                                    </div>

                                                    <div  class="w-full justify-end px-2">
                                                        <label class="w-48 flex gap-3 items-center justify-center px-4 py-2 bg-orange-600 text-white rounded shadow-md tracking-wide uppercase border cursor-pointer hover:bg-orange-700 hover:text-white ease-linear transition-all duration-150">
                                                            <ion-icon class="text-xl" name="cloud-upload-outline"></ion-icon>
                                                            <span class=" text-sm leading-normal">افزودن تصاویر  </span>
                                                            <input wire:model.lazy="pageLastPostPhoto"  type="file" class="hidden" @change="showPreview(event)" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>






                                    <div>
                                        <div class="bg-gray-800 h-4 rounded"></div>


                                        <div class="flex justify-end gap-3 items-center mt-2">
                                            <div class="mt-2">
                                                <button type="submit" class=" text-sm text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-gray-100 rounded  ">Add   </button>
                                            </div>
                                            <div class="mt-2">
                                                <a href="{{route('admin.instagram.page.category.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded  ">Cancel </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                                {{-- <div class="w-1/3 bg-gray-100 p-3 flex flex-col justify-center items-center rounded-2xl ">
                                    <img class="h-72" src="{{asset('svg/add-adv.svg')}}" alt="">
                                </div> --}}







                        </div>
                    </form>
                </div>
            </div>

        </div>




    </div>
</div>
